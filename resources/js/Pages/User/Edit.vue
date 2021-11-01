<template>
    <Head title="Crear" />
    <AuthenticatedLayout>

    <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Administración de usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Modificar usuario
                    </div>
                 <ValidationErrors class="" />
                 <div class="p-10 mb-4">
                    <form @submit.prevent="submit">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <div>
                                <Label for="nombres" value="Nombres" />
                                <Input @paste.prevent  id="nombres" type="text" class="mt-1 block w-full" v-model="form.nombres" required autofocus />
                            </div>
                            <div>
                                <Label for="apellidos" value="Apellidos" />
                                <Input @paste.prevent  id="apellidos" type="text" class="mt-1 block w-full" v-model="form.apellidos" required />
                            </div>
                            <div>
                                <Label for="cedula" value="Cédula" />
                                <Input @paste.prevent  id="cedula" @keydown="validaCampoNumerico($event)" @keydown.space.prevent type="number" class="mt-1 block w-full" v-model="form.cedula" required />
                            </div>
                            <div class="">
                                <Label for="email" value="Email" />
                                <Input @paste.prevent  id="email" type="email" class="mt-1 block w-full" v-model="form.email" required />
                            </div>

                            <div>
                                <Label for="pais_id" value="País" />
                                 <select id="pais_id" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" v-model="form.pais_id" required>
                                    <option value="">Seleccione</option>
                                    <option v-for="item in pais" :value="item.id" :key="item.id">{{ item.nombre }}</option>
                                </select>
                            </div>
                            <div>
                                <Label for="direccion" value="Dirección" />
                                <Input @paste.prevent  id="direccion" type="text" class="mt-1 block w-full" v-model="form.direccion" required />
                            </div>
                            <div>
                                <Label for="celular" value="Celular" />
                                <Input @paste.prevent  id="celular" @keydown="validaCampoNumerico($event)" @keydown.space.prevent type="number" class="mt-1 block w-full" v-model="form.celular" required />
                            </div>
                            <div>
                                <Label for="categoria_id" value="Categoría" />
                                <select id="categoria_id" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" v-model="form.categoria_id" required>
                                    <option value="">Seleccione</option>
                                    <option v-for="item in categorias" :value="item.id" :key="item.id">{{ item.nombre }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center justify-end my-3">
                            <Button class="ml-4 bg-green-500" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Actualizar usuario
                            </Button>
                        </div>
                    </form>
                 </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import Button from '@/Components/Button.vue'
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import Input from '@/Components/Input.vue'
import Label from '@/Components/Label.vue'
import ValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia'

export default {
    props:['user','pais','categorias'],
    components: {
        Button,
        Input,
        Label,
        ValidationErrors,
        Head,
        Link,
        AuthenticatedLayout,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: this.user.email,
                nombres: this.user.nombres,
                apellidos: this.user.apellidos,
                direccion: this.user.direccion,
                cedula: this.user.cedula,
                celular: this.user.celular,
                categoria_id: this.user.categoria_id,
                pais_id: this.user.pais_id,
            })
        }
    },

    methods: {
        submit() {
            this.form.put(this.route('dashboard.update',{dashboard:this.user.id}), {
                onFinish: () => {},
            })
        },
        validaCampoNumerico(event){
            let  tecla = event.key;

            if(tecla == '.' || tecla == ','  || tecla == '-' || tecla == '+' || tecla == 'e' || tecla == 'E'){
                event.preventDefault();
            }
        },
    },
}
</script>
