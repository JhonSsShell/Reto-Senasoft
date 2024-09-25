{{ html()->form()->route('permisos.store')->open() }}

    @include('permisos.partials.form')

    <button type="submit">Agregar Permiso</button>

{{ html()->form()->close() }}
