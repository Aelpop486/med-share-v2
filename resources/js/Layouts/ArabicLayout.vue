<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import ArabicFooterVue from '@/Pages/LandingPage/ArabicFooter.vue';
import ArabicNavbar from '@/Pages/LandingPage/ArabicNavbar.vue'
import { Link } from '@inertiajs/vue3';




</script>

<template>


<ArabicNavbar />

    <slot />

<ArabicFooterVue />


</template>
