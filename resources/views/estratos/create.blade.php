{{ html()->form()->route('estratos.store')->open() }}

    @include('estratos.partials.form')

    <button type="submit">Agregar Permiso</button>

{{ html()->form()->close() }}
