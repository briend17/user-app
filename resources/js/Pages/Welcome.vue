<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-blue-400 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" href="/dashboard" class="text-sm text-gray-700 underline">
                Dashboard
            </Link>

            <!-- <template v-else>
                <Link :href="route('login')" class="text-sm text-white underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-white underline">
                    Register
                </Link>
            </template> -->
        </div>
<section>
        <div class="text-white py-20">
          <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
            <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                <h1 class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose">Viste a la moda</h1>
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Los mejores estilos y diseños para ti.
                </h2>
                <p class="text-sm md:text-base text-gray-50 mb-4">Explore sus diseños favoritos, y disfrute de una gran experiencia.</p>
                <a :href="route('login')" class="bg-yellow-300 hover:bg-gray-500 text-black hover:text-yellow-300 rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                    Ingresẹ ahora
                </a>
            </div>
            <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-50 ml-0 md:ml-12 lg:w-2/3  justify-center">
              <div class="h-48 flex flex-wrap content-center">
                <div class="flex justify-center items-center">
                    <img class="block top-10 mt-24 md:mt-0 p-8 md:p-0 rounded-3xl md:w-max"  src="/img/portada.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</template>

<style scoped>

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
      Head,
      Link,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
}
</script>
