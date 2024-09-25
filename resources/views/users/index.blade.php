<div>
    <a href=" {{route('users.create')}} ">Agregar centro</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Editar</th>
            <th>Elimar</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{$user->id}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        <a href=" {{ route('users.edit', $user->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($user, 'DELETE')->route('users.destroy', $user->id)->open() }}
                            <button>
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
