<template>
    <!-- nav -->
    <NavbarVue />
    <!-- frist section -->
    <HeroSection />
    <!-- second section -->
    <TowSection />

    <!-- fifth section -->
    <featuresVue />
    <!-- sixing section -->
    <SectionVideoTwoVue />
    <!-- footer -->
    <Footer />

</template>
<script>
import NavbarVue from './LandingPage/Navbar.vue';
import HeroSection from "./LandingPage/HeroSection.vue";
import TowSection from "./LandingPage/TwoSection.vue";
import SectionVideoTwoVue from "./LandingPage/SectionVideoTwo.vue";
import Footer from "./LandingPage/Footer.vue";
import featuresVue from './LandingPage/features.vue';
export default {
    components: {
        HeroSection,
        TowSection,
        Footer,
        SectionVideoTwoVue,
        NavbarVue,
        featuresVue
    },
};

</script>
