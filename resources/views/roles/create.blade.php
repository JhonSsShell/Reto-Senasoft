{{ html()->form()->route('roles.store')->open() }}

    @include('roles.partials.form')

    <button type="submit">Agregar Rol</button>

{{ html()->form()->close() }}
