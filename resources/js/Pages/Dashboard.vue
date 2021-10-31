<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Administración de usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Listado de usuarios
                    </div>
                    <div class="flex items-top justify-center my-4 sm:pt-0 w-full">
                        <div class="flex justify-end">
                            <button type="submit" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                            Confirmar
                        </button>
                        </div>
                        <div class="w-4/5 h-1/4 overflow-x-scroll">
                        <table class="text-left w-full">
                            <thead class="bg-blue-400 flex text-white w-full">
                                <tr class="flex w-full">
                                    <th class="p-4 w-1/4">Nombre completo</th>
                                    <th class="p-4 w-1/4">E-mail</th>
                                    <th class="p-4 w-1/4">Celular</th>
                                    <th class="p-4 w-1/4">Pais</th>
                                    <th class="p-4 w-1/4">Dirección</th>
                                </tr>
                            </thead>
                        <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-4 w-1/4">Dogs</td>
                                    <td class="p-4 w-1/4">Cats</td>
                                    <td class="p-4 w-1/4">Birds</td>
                                    <td class="p-4 w-1/4">Fish</td><td class="p-4 w-1/4">Fish</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- component -->
                    <!-- <section class="container mx-auto p-6 font-mono">
                      <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full h-1/4 overflow-auto">
                          <table class="w-4/5 mx-auto my-3">
                            <thead>
                              <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 border-b border-gray-600">
                                <th class="px-4 py-3">Nombre completo</th>
                                <th class="px-4 py-3">Cédula</th>
                                <th class="px-4 py-3">E-mail</th>
                                <th class="px-4 py-3">País</th>
                                <th class="px-4 py-3">Opciones</th>
                              </tr>
                            </thead>
                            <tbody class="bg-white"> -->
                           <!--  @foreach($orders as $order)
                              <tr class="text-gray-700">
                                <td class="px-4 py-3 border">
                                  <div class="flex items-center text-sm">
                                    <div>
                                      <p class="font-semibold text-black">{{ $order->created_at->format('d-m-Y') }}</p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold border">
                                    {{ $order->order_reference }}
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold border">
                                  $89.000
                                </td>
                                <td class="px-4 py-3 text-sm border">
                                    <span class="px-2 py-1 font-semibold leading-tight{{ $order->status_color }}rounded-sm"> {{ $order->status_display }} </span>
                                </td>
                                <td class="px-4 py-3 text-sm border">
                                    <a href="{{ route('orders.show',['order' => $order->id]) }}" class="bg-blue-500 hover:bg-blue-600 px-2   py-1 rounded text-white focus:outline-none">Ver pedido
                                    </a>
                                </td>
                              </tr>
                            @endforeach -->
                           <!--  </tbody>
                          </table>
                        </div>
                      </div>
                    </section> -->
                </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        AuthenticatedLayout,
        Head,
    },
}
</script>
<style scope>

  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>