{{ html()->modelForm($role, 'PUT')->route('roles.update', $role->id)->open() }}

    @include('roles.partials.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}