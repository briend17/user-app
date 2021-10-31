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
                        Nuevo usuario
                    </div>
                 <ValidationErrors />
                 <div class="px-10 mb-4">
                    <form @submit.prevent="submit">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <div>
                                <Label for="nombres" value="Nombres" />
                                <Input id="nombres" type="text" class="mt-1 block w-full" v-model="form.nombres" required autofocus />
                            </div>
                            <div>
                                <Label for="apellidos" value="Apellidos" />
                                <Input id="apellidos" type="text" class="mt-1 block w-full" v-model="form.apellidos" required />
                            </div>
                            <div>
                                <Label for="cedula" value="Cédula" />
                                <Input id="cedula" type="number" class="mt-1 block w-full" v-model="form.cedula" required />
                            </div>
                            <div class="">
                                <Label for="email" value="Email" />
                                <Input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required />
                            </div>

                            <div>
                                <Label for="pais_id" value="País" />
                                <Input id="pais_id" type="text" class="mt-1 block w-full" v-model="form.pais_id" required />
                            </div>
                            <div>
                                <Label for="direccion" value="Dirección" />
                                <Input id="direccion" type="text" class="mt-1 block w-full" v-model="form.direccion" required />
                            </div>
                            <div>
                                <Label for="cedula" value="Celular" />
                                <Input id="cedula" type="number" class="mt-1 block w-full" v-model="form.cedula" required />
                            </div>
                            <div>
                                <Label for="categoria_id" value="Categoría" />
                                <Input id="categoria_id" type="text" class="mt-1 block w-full" v-model="form.categoria_id" required />
                            </div>
                        </div>

                        <div class="flex items-center justify-end my-3">
                            <Button class="ml-4 bg-green-500" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Registrar usuario
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

export default {
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
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                names: '',
                apellidos: '',
                direccion: '',
                cedula: '',
                cedula: '',
                categoria_id: '',
                pais_id: '',
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('dashboard.store'), {
                onFinish: () => {},
            })
        }
    }
}
</script>
