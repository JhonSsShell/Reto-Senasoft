<div>
    <a href=" {{route('bicicletas.create', $centro->id)}} ">Agregar bicicleta</a>

    <table>
        <thead>
            <th>ID</th>
            <th>color</th>
            <th>marca</th>
            <th>estado</th>
            <th>precio</th>
            <th>centro_id</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($bicicletas as $bicicleta)
                <tr>
                    <td>
                        {{$bicicleta->id}}
                    </td>
                    <td>
                        {{$bicicleta->color}}
                    </td>
                    <td>
                        {{$bicicleta->marca}}
                    </td>
                    <td>
                        {{$bicicleta->estado}}
                    </td>
                    <td>
                        {{$bicicleta->precio}}
                    </td>
                    <td>
                        {{$bicicleta->centro_id}}
                    </td>
                    <td>
                        <a href=" {{ route('bicicletas.edit', $centro->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($bicicleta, 'DELETE')->route('bicicletas.destroy', $bicicleta->id)->open() }}
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
