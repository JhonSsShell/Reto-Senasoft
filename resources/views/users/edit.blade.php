{{ html()->modelForm($user, 'PUT')->route('users.update', $user->id)->open() }}

    @include('users.partials.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}