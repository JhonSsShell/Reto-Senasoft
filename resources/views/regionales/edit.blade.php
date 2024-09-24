{{ html()->modelForm($regionale, 'PUT')->route('regionales.update', $regionale->id)->open() }}

    @include('regionales.partials.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}