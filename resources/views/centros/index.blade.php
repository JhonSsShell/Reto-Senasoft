<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex items-center gap-6">
            <a href="{{ route('regionales.index') }}" class="btn btn-sm">
                <i class="fa-solid fa-chevron-left text-bold"></i>             
            </a>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Centros de la regional') }}
            </h2>
        </div>
    </x-slot>
    <div class="mas-w-5xl mt-5 my-0 mx-auto">
        <div>
            <a href="{{ route('centros.create', $regional->id) }}" class="btn btn-sm btn-outline border-none">Crear centro</a>
        </div>
        <div>
            <p class="font-bold">
                Centro regional {{ $regional->nombre_regional }}
            </p>
        </div>
    </div>
    <div class="max-w-5xl flex flex-wrap gap-4 justify-around my-0 mx-auto min-h-8 mt-4">
        @foreach ($centros as $centro)
            <div class="p-4 rounded-xl bg-white flex flex-col gap-3">
                <div class="w-full">
                    <h1 class="flex gap-4 items-center font-bold text-2xl">
                        <i class="fa-solid fa-business-time"></i> {{ $centro->nombre }}
                    </h1>
                </div>
                <div class="w-full">
                    <p class="text-xs">
                        Direccion: <span class="font-bold"> {{ $centro->direccion }} </span> 
                    </p>
                    <p class="text-xs">
                        Telefono <span class="font-bold"> {{ $centro->telefono_centro }} </span>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

{{-- <div>
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
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div> --}}
