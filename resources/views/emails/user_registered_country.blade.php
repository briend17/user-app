<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
 <!-- Scripts -->
        
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <h1>Usuarios registrads por país</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Listado de usuarios por país
                </div>
                <div class="flex items-top justify-center my-4 sm:pt-0 w-full">
                    <div class="w-4/5">
                    <table class="text-left w-1/2">
                        <thead class="bg-blue-400 flex text-white w-full">
                            <tr class="flex w-full">
                                <th class="p-2">País</th>
                                <th class="p-2">Usuarios</th>
                            </tr>
                        </thead>
                        <tbody class="bg-grey-light w-full">
                            <tr class="flex w-full hover:bg-gray-300">
                                <td class="p-2">&nbsp;</td>
                                <td class="p-2">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>