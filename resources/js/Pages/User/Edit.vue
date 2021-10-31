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
                                <Label for="names" value="Nombres" />
                                <Input id="names" type="text" class="mt-1 block w-full" v-model="form.names" required autofocus />
                            </div>
                            <div>
                                <Label for="surnames" value="Apellidos" />
                                <Input id="surnames" type="text" class="mt-1 block w-full" v-model="form.surnames" required />
                            </div>
                            <div>
                                <Label for="identity_number" value="Cédula" />
                                <Input id="identity_number" type="number" class="mt-1 block w-full" v-model="form.identity_number" required />
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
                                <Label for="direction" value="Dirección" />
                                <Input id="direction" type="text" class="mt-1 block w-full" v-model="form.direction" required />
                            </div>
                            <div>
                                <Label for="phone_number" value="Celular" />
                                <Input id="phone_number" type="number" class="mt-1 block w-full" v-model="form.phone_number" required />
                            </div>
                            <div>
                                <Label for="categoria_id" value="Categoría" />
                                <Input id="categoria_id" type="text" class="mt-1 block w-full" v-model="form.categoria_id" required />
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
    props:['user'],
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
                names: this.user.nombres,
                surnames: this.user.apellidos,
                direction: this.user.direccion,
                identity_number: this.user.cedula,
                phone_number: this.user.celular,
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
        }
    },
}
</script>
