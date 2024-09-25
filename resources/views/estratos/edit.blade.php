{{ html()->modelForm($estrato, 'PUT')->route('estratos.update', $estrato->id)->open() }}

    @include('estratos.partials.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}