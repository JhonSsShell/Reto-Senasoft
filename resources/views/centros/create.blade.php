{{ html()->form()->route('centros.store')->open() }}

    @include('centros.partials.form')

    <button type="submit">Agregar regional</button>

{{ html()->form()->close() }}
