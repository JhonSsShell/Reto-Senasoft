{{ html()->form()->route('regionales.store')->open() }}

    @include('regionales.partials.form')

    <button type="submit">Agregar regional</button>

{{ html()->form()->close() }}
