<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="overflow-auto max-h-96">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre completo')" />
            <x-text-input id="name" class="input input-bordered input-sm mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" placeholder="Ingrese su nombre" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo Electronico')" />
            <x-text-input id="email" class="input input-bordered input-sm mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="email" placeholder="Ingrese su correo electronico" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="documento" :value="__('Numero de documento')" />
            <x-text-input id="email" class="input input-bordered input-sm mt-1 w-full" type="text" name="documento" :value="old('documento')" autocomplete="documento" placeholder="Ingrese su numero de documento" />
            <x-input-error :messages="$errors->get('documento')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="telefono" :value="__('Numero telefonico')" />
            <x-text-input id="email" class="input input-bordered input-sm mt-1 w-full" type="text" name="telefono" :value="old('telefono')" autocomplete="username" placeholder="Ingrese su numero telefonico" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="input input-bordered input-sm mt-1 w-full"
                            type="password"
                            name="password"
                            autocomplete="new-password" 
                            placeholder="Ingresa una contraseña" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="input input-bordered input-sm mt-1 w-full"
                            type="password"
                            name="password_confirmation" autocomplete="new-password"
                            placeholder="Confirma la contraseña" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="centros" :value="__('Centro de formacion')" />
            <select name="centros" id="centros" class="select mt-1 select-bordered select-sm w-full text-gray-400">
                <option value=""></option>
                @foreach ($estratos as $estrato)
                    <option value="">
                        {{ $estrato->tipo_estrato }}
                    </option>
                    @endforeach
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Registro') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
