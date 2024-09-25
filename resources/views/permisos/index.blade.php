<div>
    <a href=" {{route('permisos.create')}} ">Agregar permiso</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @foreach ($permisos as $permiso)
                <tr>
                    <td>
                        {{$permiso->id}}
                    </td>
                    <td>
                        {{$permiso->name}}
                    </td>
                    <td>
                        {{$permiso->description}}
                    </td>
                    <td>
                        <a href=" {{ route('permisos.edit', $permiso->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($permisos, 'DELETE')->route('permisos.destroy', $permiso->id)->open() }}
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
