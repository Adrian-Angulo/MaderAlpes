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
                                <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" id="first_name" name="first_name"
                                    class="mt-1 block w-full border-gray-500  border-b-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('first_name')" required autofocus autocomplete="given-name">
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>
                            <div class="w-1/2">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido</label>
                                <input type="text" id="last_name" name="last_name"
                                    class="mt-1 block w-full border-gray-500 border-b-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('last_name')" required autocomplete="family-name">
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Phone, Document Type, and Document Number -->
                        <div class="flex space-x-4">
                            <div class="w-1/3">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <input type="tel" id="phone" name="phone"
                                    class="mt-1 block w-full border-gray-500 border-b-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('phone')" required autocomplete="tel">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <div class="w-1/3">
                                <label for="document_type" class="block text-sm font-medium text-gray-700">Tipo de
                                    documento</label>
                                <select id="document_type" name="document_type"
                                    class="mt-1 block w-full border-gray-500 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    required>
                                    <option value="cc">Cédula de ciudadanía</option>
                                    <option value="ce">Cédula de extranjería</option>
                                    <option value="nit">NIT</option>
                                    <option value="passport">Pasaporte</option>
                                </select>
                                <x-input-error :messages="$errors->get('document_type')" class="mt-2 border-b-2" />
                            </div>
                            <div class="w-1/3">
                                <label for="document_number" class="block text-sm font-medium text-gray-700">Número de
                                    documento</label>
                                <input type="text" id="document_number" name="document_number"
                                    class="mt-1 block w-full border-gray-500 rounded-lg border-b-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-12"
                                    :value="old('document_number')" required>
                                <x-input-error :messages="$errors->get('document_number')" class="mt-2" />
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
