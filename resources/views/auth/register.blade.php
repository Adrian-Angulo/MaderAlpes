<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Iniciar Sesión</title>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white border border-gray-200 rounded-lg shadow-lg max-w-2xl w-full mx-auto mt-10">
        <div class="p-6">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800">Registrarse</h1>
                <p class="mt-2 text-sm text-gray-600">
                    ¿Ya tienes una cuenta?
                    <a class="text-blue-500 hover:underline font-medium" href="{{ route('login') }}">
                        Inicia sesión aquí
                    </a>
                </p>
            </div>

            <div class="mt-6">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="space-y-6">
                        <!-- First Name and Last Name -->
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" id="nombre" name="nombre"
                                    class="mt-1 block w-full border-gray-500  border-b-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('nombre')" required autofocus autocomplete="given-name">
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>
                            <div class="w-1/2">
                                <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                                <input type="text" id="apellido" name="apellido"
                                    class="mt-1 block w-full border-gray-500 border-b-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('apellido')" required autocomplete="family-name">
                                <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Phone, Document Type, and Document Number -->
                        <div class="flex space-x-4">
                            <div class="w-1/3">
                                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <input type="tel" id="telefono" name="telefono"
                                    class="mt-1 block w-full border-gray-500 border-b-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('telefono')" required autocomplete="tel">
                                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                            </div>
                            <div class="w-1/3">
                                <label for="tipo_documento" class="block text-sm font-medium text-gray-700">Tipo de
                                    documento</label>
                                <select id="tipo_documento" name="tipo_documento"
                                    class="mt-1 block w-full border-gray-500 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    required>
                                    <option value="cc">Cédula de ciudadanía</option>
                                    <option value="ce">Cédula de extranjería</option>
                                    <option value="nit">NIT</option>
                                    <option value="passport">Pasaporte</option>
                                </select>
                                <x-input-error :messages="$errors->get('tipo_documento')" class="mt-2 border-b-2" />
                            </div>
                            <div class="w-1/3">
                                <label for="numero_documento" class="block text-sm font-medium text-gray-700">Número de
                                    documento</label>
                                <input type="text" id="numero_documento" name="numero_documento"
                                    class="mt-1 block w-full border-gray-500 rounded-lg border-b-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('numero_documento')" required>
                                <x-input-error :messages="$errors->get('numero_documento')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Email, Password, and Confirm Password -->
                        <div class="space-y-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Correo
                                    electrónico</label>
                                <input type="email" id="email" name="email"
                                    class="mt-1 block w-full border-gray-300 rounded-lg border-b-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('email')" required autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                                <input type="password" id="password" name="password"
                                    class="mt-1 block w-full border-gray-300 rounded-lg border-b-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar
                                    contraseña</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="mt-1 block w-full border-gray-300 rounded-lg border-b-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full py-3 px-4 text-sm font-medium text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
