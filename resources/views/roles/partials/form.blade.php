{{ html()->label('name') }}
{{ html()->text('name') }}
@foreach ($permissions as $permission )
<div class="p-3">
    {{ html()->checkbox('permissions[]', isset($permissions_role) && $permissions_role->contains($permission->id) ? true : false, $permission->id)->class('checkbox')->id('permission_' . $permission->id) }}
    {{ html()->label($permission->name, 'permission_' . $permission->id)->class('form-check-label') }}
</div>
@endforeach
