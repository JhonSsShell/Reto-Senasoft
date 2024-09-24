<div>
    <a href=" {{route('regionales.create')}} ">Agregar regional</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Acciones</th>
            <th>Agregar centro</th>
        </thead>
        <tbody>
            @foreach ($regionales as $regional)
                <tr>
                    <td>
                        {{$regional->id}}
                    </td>
                    <td>
                        {{$regional->nombre_regional}}
                    </td>
                    <td>
                        {{$regional->cantidad_bicicletas}}
                    </td>
                    <td>
                        <a href=" {{ route('regionales.edit', $regional->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($regional, 'DELETE')->route('regionales.destroy', $regional->id)->open() }}
                            <button>
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                    <td><a href=" {{route('centros.index', $regional->id)}} ">Agregar centro</a></td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
