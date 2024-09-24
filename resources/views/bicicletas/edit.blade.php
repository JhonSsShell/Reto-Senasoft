{{ html()->modelForm($bicicleta, 'PUT')->route('bicicletas.update', $bicicleta->id)->open() }}

    @include('bicicletas.partials.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}