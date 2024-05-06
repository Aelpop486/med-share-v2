<template>
    <!-- nav -->
    <NavbarVue />
    <!-- frist section -->
    <HeroSection />
    <!-- second section -->
    <TowSection />
    <!-- third section -->
    <SectionVideoOneVue />
    <!-- fifth section -->
    <FeaturesSectionVue />
    <!-- sixing section -->
    <SectionVideoTwoVue />
    <!-- 7 section -->
    <FourthSection />
    <!-- footer -->
    <Footer />

</template>
<script>
///++++  import components  ++++\\\
import NavbarVue from './LandingPage/Navbar.vue';
import HeroSection from "./LandingPage/HeroSection.vue";
import TowSection from "./LandingPage/TwoSection.vue";
import FourthSection from "./LandingPage/FourthSection.vue";
import SectionVideoOneVue from "./LandingPage/SectionVideoOne.vue";
import FeaturesSectionVue from "./LandingPage/Features Section.vue";
import SectionVideoTwoVue from "./LandingPage/SectionVideoTwo.vue";
import Footer from "./LandingPage/Footer.vue";
export default {
    components: {
        HeroSection,
        TowSection,
        FourthSection,
        Footer,
        SectionVideoOneVue,
        FeaturesSectionVue,
        SectionVideoTwoVue,
        NavbarVue,
    },
};
</script>
