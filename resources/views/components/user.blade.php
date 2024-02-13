<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />
    <h1 class="mt-8 mb-8 text-2xl font-medium text-gray-900">
        Nuevo usuario
    </h1>
    <div class="flex">
        <div class="flex-1 mr-8">
            <!-- Name -->
            <div class="mb-4">
                <x-label for="name" value="{{ __('Nombres y Apellidos') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="Nombres y Apellidos" />
            </div>
            <!-- Email -->
            <div class="mb-4">
                <x-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
        </div>
        <div class="flex-1 mr-0">
            <!-- Password -->
            <div class="mb-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
            <!-- Confirm Password -->
            <div class="mb-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>
    </div>
    <div class="flex items-center justify-end mt-4">
        <x-button>
            {{ __('Register') }}
        </x-button>
    </div>
</div>
