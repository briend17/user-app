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
                    <div class="w-4/5 mx-auto my-4 flex justify-end">
                        <button type="button" class="bg-green-500 hover:bg-green-600 px-2 py-1 rounded text-white focus:outline-none">
                            Nuevo usuario
                        </button>
                    </div>
                    <div class="flex items-top justify-center sm:pt-0 w-full">
                        <div class="w-4/5 h-1/4 overflow-x-scroll">
                        <table class="text-left w-full">
                            <thead class="bg-blue-400 flex text-white w-full">
                                <tr class="flex w-full">
                                    <th class="p-2 w-1/4">Nombre completo</th>
                                    <th class="p-2 w-1/4">E-mail</th>
                                    <th class="p-2 w-1/4">Celular</th>
                                    <th class="p-2 w-1/4">País</th>
                                    <th class="p-2 w-1/4">Dirección</th>
                                    <th class="p-2 w-1/4">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full">
                                <tr class="flex w-full hover:bg-gray-300">
                                    <td class="p-2 w-1/4">Dogs</td>
                                    <td class="p-2 w-1/4">Cats</td>
                                    <td class="p-2 w-1/4">Birds</td>
                                    <td class="p-2 w-1/4">Fish</td>
                                    <td class="p-2 w-1/4">Fish</td>
                                    <td class="p-2 w-1/4">
                                        <div class="flex justify-between">
                                            <button type="button" class="bg-blue-500 hover:bg-blue-600 px-2 py-1 rounded text-white focus:outline-none mr-2">
                                                Editar
                                            </button>
                                            <button type="button" class="bg-red-500 hover:bg-red-600 px-2 py-1 rounded text-white focus:outline-none">
                                                Eliminar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
    table tbody{
        height: 45vh;
    }
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