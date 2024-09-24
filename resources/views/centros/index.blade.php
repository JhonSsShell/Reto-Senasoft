<div>
    <a href=" {{route('centros.create', $regional->id)}} ">Agregar centro</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>direccion</th>
            <th>telefono</th>
            <th>regional</th>
            <th>Acciones</th>
            <th>Agregar centro</th>
            <th>Ver bicicletas</th>
        </thead>
        <tbody>
            @foreach ($centros as $centro)
                <tr>
                    <td>
                        {{$centro->id}}
                    </td>
                    <td>
                        {{$centro->nombre}}
                    </td>
                    <td>
                        {{$centro->direccion}}
                    </td>
                    <td>
                        {{$centro->telefono_centro}}
                    </td>
                    <td>
                        {{$centro->regional_id}}
                    </td>
                    <td>
                        <a href=" {{ route('centros.edit', $centro->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($centro, 'DELETE')->route('centros.destroy', $centro->id)->open() }}
                            <button>
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                    <td> <a href=" {{ route('bicicletas.index', $centro->id) }} "> ver bicicleteas</a></td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
