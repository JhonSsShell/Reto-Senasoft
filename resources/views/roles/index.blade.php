<div>
    <a href=" {{route('roles.create')}} ">Agregar centro</a>
    <a href=" {{route('permisos.index')}} ">Permisos</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Elimar</th>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>
                        {{$role->id}}
                    </td>
                    <td>
                        {{$role->name}}
                    </td>
                    <td>
                        <a href=" {{ route('roles.edit', $role->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($role, 'DELETE')->route('roles.destroy', $role->id)->open() }}
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
