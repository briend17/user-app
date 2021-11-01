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
                    <div class="w-4/5 mx-auto my-4 flex justify-between">
                        <input @paste.prevent  id="buscar" type="text" class="py-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block" placeholder="Buscar..." v-model="buscar" />
                        <Link :href="route('dashboard.create')" class="bg-green-500 hover:bg-green-600 px-1 py-1 rounded text-white focus:outline-none">
                            Nuevo usuario
                        </Link>
                    </div>
                    <div class="py-5">
                        <div class='overflow-x-auto w-full flex mb-4'>
                            <table class='mx-auto max-w-4xl w-4/5 whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                                <thead class="bg-blue-400">
                                    <tr class="text-white text-left">
                                        <th class="font-semibold text-sm px-6 py-2"> Nombre </th>
                                        <th class="font-semibold text-sm px-6 py-2"> E-mail </th>
                                        <th class="font-semibold text-sm px-6 py-2 text-center"> Perfil </th>
                                        <th class="font-semibold text-sm px-6 py-2 text-center"> Pais </th>
                                        <th class="font-semibold text-sm px-6 py-2 text-center"> Categoría </th>
                                        <th class="font-semibold text-sm px-6 py-2">Opciones </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-300" v-for="item in items" :key="item.id" v-if="items.length">
                                        <td class="px-6 py-2">
                                            <div class="flex items-center">
                                                {{ item.display_name }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-2">
                                            <span class=""> {{ item.email }} </span>
                                        </td>
                                        <td class="px-6 py-2 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> {{ item.profile }} </span> </td>
                                        <td class="px-6 py-2"> {{ item.pais.nombre }} </td>
                                        <td class="px-6 py-2"> {{ item.categoria.nombre }} </td>
                                        <td class="px-6 py-2 text-center">
                                            <div class="flex justify-between">
                                                <Link :href="route('dashboard.edit',{dashboard:item.id})" class="bg-blue-500 hover:bg-blue-600 px-2 py-1 rounded text-white focus:outline-none mr-2">
                                                    Editar
                                                </Link>
                                                <button v-if="item.profile != 'Administrador'" type="button" @click="deleteUser(item.id)" class="bg-red-500 hover:bg-red-600 px-2 py-1 rounded text-white focus:outline-none">
                                                    Borrar
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr v-else>
                                    <td class="text-center" colspan="7">
                                        <span class="w-full text-center text-gray-400">No hay datos para mostrar.</span>
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
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia'

export default {
    props:['users'],
    components: {
        AuthenticatedLayout,
        Head,
        Link,
    },
    data () {
      return {
        buscar:'',
      };
    },
    methods: {
        deleteUser(user) {
            Inertia.delete(`/dashboard/${user}`, {
              onBefore: () => confirm('¿Realmente desea borrar este usuario?'),
            })
        }
    },
    computed: {
        items() {
            if(this.buscar.length)
            {
              return this.users.filter(item => item.display_name.toLowerCase().includes(this.buscar.toLowerCase()));
            }
            else
            {
                return this.users;
            }
        },
  }
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