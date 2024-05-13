<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import NavbarVue from '@/Pages/LandingPage/Navbar.vue';
import Footer from '@/Pages/LandingPage/Footer.vue';
</script>

<template>
    <NavbarVue />

    <slot />


    <Footer />

</template>
