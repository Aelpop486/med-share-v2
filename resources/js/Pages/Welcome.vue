<template>
    <!-- nav -->
    <NavbarVue />
    <!-- frist section -->
    <HeroSection />
    <!-- second section -->
    <TowSection />
    <!-- third section -->
    <!-- <FeaturesSectionVue /> -->
    <!-- fifth section -->
    <featuresVue />
    <!-- sixing section -->
    <SectionVideoTwoVue />
    <!-- footer -->
    <Footer />

</template>
<script>

// import en from "@/translation/en";
// import ar from "@/translation/ar";

////++++  import components  ++++\\\\
import NavbarVue from './LandingPage/Navbar.vue';
import HeroSection from "./LandingPage/HeroSection.vue";
import TowSection from "./LandingPage/TwoSection.vue";
// import FeaturesSectionVue from "./LandingPage/Features Section.vue";
import SectionVideoTwoVue from "./LandingPage/SectionVideoTwo.vue";
import Footer from "./LandingPage/Footer.vue";
import featuresVue from './LandingPage/features.vue';
export default {
    components: {
        HeroSection,
        TowSection,
        Footer,
        // FeaturesSectionVue,
        SectionVideoTwoVue,
        NavbarVue,
        featuresVue
    },

    // mixins: [en, ar],
    // data() {
    //     return {
    //         lang: "en",
    //     };
    // },
    // methods: {
    //     translate(prop) {
    //         return this[this.lang][prop];
    //     },
    // },
};

</script>
