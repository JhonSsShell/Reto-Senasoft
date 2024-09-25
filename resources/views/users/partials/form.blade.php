{{ html()->label('email') }}
{{ html()->text('email') }}
@foreach ($roles as $role)
<div class="form-check form-switch">
    {{ html()->checkbox('role[]', isset($roles_user) && $roles_user->contains($role) ? true : false, $role)->class('form-check-input')->id('role_' . $role) }}
    {{ html()->label($role, 'role_' . $role)->class('form-check-label') }}
</div>
@endforeach

