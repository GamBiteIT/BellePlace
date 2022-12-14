<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>

<div style="background-image: url('https://c0.wallpaperflare.com/path/299/374/387/algeria-jijel-photography-cloudporn-7aff6b4e4a88bca49164be6d2d0c31b1.jpg');" class="min-h-screen flex flex-col  pt-6 sm:pt-0 bg-cover bg-center">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center" >
        <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-black" />
            </Link>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 backdrop-blur-lg border-1 rounded-lg  shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>

<div class=" text-white absolute bottom-5 right-10 font-bold" >
<p style="font-size: 20px;"> @JiJel-Algeria</p>
</div>
</div>

   

   
</template>
