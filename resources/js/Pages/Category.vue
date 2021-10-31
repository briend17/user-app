<template>
    <Head title="Categorias" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Categorías
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Listado de categorías
                    </div>
                    <div class="flex items-top justify-center my-4 sm:pt-0 w-full">
                        <div class="w-4/5">
                        <table class="text-left w-1/2">
                            <thead class="bg-blue-400 flex text-white w-full">
                                <tr class="flex w-full">
                                    <th class="p-2">Categoría</th>
                                </tr>
                            </thead>
                            <tbody class="bg-grey-light w-full">
                                <tr class="flex w-full hover:bg-gray-300" v-for="item in categorias">
                                    <td class="p-2">{{ item.nombre }}</td>
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
    props:['categorias'],
    components: {
        AuthenticatedLayout,
        Head,
    },
}
</script>
