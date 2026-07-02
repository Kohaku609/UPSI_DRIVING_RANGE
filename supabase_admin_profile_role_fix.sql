-- Fix additional admin accounts becoming normal users after email verification.
-- Run this in Supabase SQL Editor as the project owner.

create or replace function public.handle_new_user()
returns trigger
language plpgsql
security definer
set search_path = public
as $$
declare
  requested_role text;
begin
  requested_role := lower(coalesce(
    new.raw_user_meta_data->>'requested_role',
    new.raw_user_meta_data->>'role',
    'user'
  ));

  if requested_role not in ('admin', 'main_admin') then
    requested_role := 'user';
  end if;

  insert into public.profiles (
    user_id,
    full_name,
    email,
    phone,
    role,
    status
  ) values (
    new.id,
    coalesce(new.raw_user_meta_data->>'full_name', new.email),
    lower(new.email),
    nullif(new.raw_user_meta_data->>'phone', ''),
    requested_role,
    'active'
  )
  on conflict (email) do update set
    user_id = coalesce(public.profiles.user_id, excluded.user_id),
    full_name = coalesce(nullif(excluded.full_name, ''), public.profiles.full_name),
    phone = coalesce(excluded.phone, public.profiles.phone),
    role = case
      when requested_role in ('admin', 'main_admin') then requested_role
      when public.profiles.role in ('admin', 'main_admin') then public.profiles.role
      else excluded.role
    end,
    status = coalesce(public.profiles.status, excluded.status);

  return new;
end;
$$;

drop trigger if exists on_auth_user_created on auth.users;
create trigger on_auth_user_created
after insert on auth.users
for each row execute function public.handle_new_user();

create or replace function public.upsi_promote_profile_to_admin(target_email text)
returns public.profiles
language plpgsql
security definer
set search_path = public
as $$
declare
  current_role text;
  updated_profile public.profiles;
begin
  select role into current_role
  from public.profiles
  where user_id = auth.uid()
  limit 1;

  if current_role not in ('admin', 'main_admin') then
    raise exception 'Only administrators can promote profiles.';
  end if;

  update public.profiles
  set role = 'admin',
      status = 'active'
  where lower(email) = lower(target_email)
  returning * into updated_profile;

  if updated_profile.id is null then
    raise exception 'Profile not found for email %', target_email;
  end if;

  return updated_profile;
end;
$$;

grant execute on function public.upsi_promote_profile_to_admin(text) to authenticated;
