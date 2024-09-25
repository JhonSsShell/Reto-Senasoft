{{ html()->modelForm($permiso, 'PUT')->route('permisos.update', $permiso->id)->open() }}

    @include('permisos.partials.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}