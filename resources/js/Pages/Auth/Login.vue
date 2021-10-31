<template>
    <Head title="Log in" />

    <ValidationErrors class="mb-4" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
    </div>

    <form @submit.prevent="submit">
        <div>
            <Label for="email" value="Email" />
            <Input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <Label for="password" value="Password" />
            <Input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Log in
            </Button>
        </div>
    </form>
</template>

<script>
import Button from '@/Components/Button.vue'
import Checkbox from '@/Components/Checkbox.vue'
import GuestLayout from '@/Layouts/Guest.vue'
import Input from '@/Components/Input.vue'
import Label from '@/Components/Label.vue'
import ValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    layout: GuestLayout,

    components: {
        Button,
        Checkbox,
        Input,
        Label,
        ValidationErrors,
        Head,
        Link,
    },

    props: {
        canResetPassword: Boolean,
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('login'), {
                onFinish: () => this.form.reset('password'),
            })
        }
    }
}
</script>
