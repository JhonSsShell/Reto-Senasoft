{{-- @vite(['resources/css/app.css', 'resources/js/app.js'])
@include('layouts.navigation') --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Regionales') }}
        </h2>
    </x-slot>
    <div class="max-w-5xl mt-5 my-0 mx-auto">
        <div>
            <a href="{{ route('regionales.create') }}" class="btn btn-sm btn-outline border-none"> Crear nueva regional <i class="fa-solid fa-mountain-sun"></i></a>
        </div>
    </div>
    <div class="max-w-5xl flex flex-wrap justify-around my-0 mx-auto min-h-8 mt-4">
        @foreach ($regionales as $regional)
            <div class="p-4 mt-6 max-w-fit rounded-xl bg-gray-100 flex flex-col gap-2 text-center">
                <div>
                    <p class="font-bold text-2xl">
                        {{ $regional->nombre_regional }}
                    </p>
                </div>
                <div>
                    <p class="italic font-bold text-sm">
                        Cantidad de bicicletas --- {{ $regional->cantidad_bicicletas }}
                    </p>
                </div>
                <div class="flex w-full justify-between">
                    <div>
                        <a href="{{ route('regionales.edit', $regional->id) }}" class="btn btn-sm btn-info text-white">
                            Editar <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                    <div>
                        {{ html()->modelForm($regional, 'DELETE')->route('regionales.destroy', $regional->id)->open() }}
                            <button class="btn btn-sm btn-error text-white">
                                Eliminar <i class="fa-solid fa-trash"></i>
                            </button>
                        {{ html()->closeModelForm() }}
                    </div>  
                </div>
                <div class="w-full">
                    <a href="{{ route('centros.index', $regional->id) }}" class="btn btn-success w-full btn-sm text-white">
                        Agregar centro <i class="fa-solid fa-square-plus"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>