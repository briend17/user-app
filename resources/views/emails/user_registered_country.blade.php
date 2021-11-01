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

    </head>
    <body class="font-sans antialiased">
        <h3>Usuarios registrados por país</h3>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
                            @forelse($pais as $item)
                            <tr class="flex w-full hover:bg-gray-300">
                                <td class="p-2">{{ $item->nombre }}</td>
                                <td class="p-2">{{ $item->user()->count() }}</td>
                            </tr>
                            @empty
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-2" style="text-align: center;" colspan="2">No hay datos para mostrar.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>