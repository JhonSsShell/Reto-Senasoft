{{ html()->modelForm($centro, 'PUT')->route('centros.update', $centro->id)->open() }}

    @include('centros.partials.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}