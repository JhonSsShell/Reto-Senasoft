<div>
    <a href=" {{route('estratos.create')}} ">Agregar estrato</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @foreach ($estratos as $estrato)
                <tr>
                    <td>
                        {{$estrato->id}}
                    </td>
                    <td>
                        {{$estrato->tipo_estrato}}
                    </td>
                    <td>
                        {{$estrato->descuento}}
                    </td>
                    <td>
                        <a href=" {{ route('estratos.edit', $estrato->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($estrato, 'DELETE')->route('estratos.destroy', $estrato->id)->open() }}
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
