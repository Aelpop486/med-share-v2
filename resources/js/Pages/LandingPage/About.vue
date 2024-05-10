<template>


    <body class="font-inter">
        <NavbarVue />
        <section class="py-14 lg:py-24 bg-gray-50">
            <h1
                class="max-w-2xl mx-auto text-center font-manrope font-bold text-4xl  text-gray-900 mb-5 md:text-5xl md:leading-normal">
                Control your Finances with our <span class="text-indigo-600">Smart Tool </span>
            </h1>
            <p class="max-w-sm mx-auto text-center text-base font-normal leading-7 text-gray-500 mb-9">Invest
                intelligently
                and discover a better way to manage your entire wealth easily.</p>

            <div class="mx-auto px-4 sm:px-6 lg:px-8 text-center">

                <video class=" mx-auto w-full h-full rounded-lg" autoplay loop muted>
                    <source src="@/Images/WhatsApp Video 2024-04-23 at 12.26.03 AM.mp4" type="video/mp4" />
                </video>
            </div>
        </section>

        <section class="py-14 lg:py-24 relative">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                    <div class="img-box">
                        <img src="https://pagedone.io/asset/uploads/1702034769.png" alt="About Us tailwind page"
                            class="max-lg:mx-auto">
                    </div>
                    <div class="lg:pl-[100px] flex items-center">
                        <div class="data w-full">
                            <h2
                                class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                                About
                                Us </h2>
                            <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                                Driven by a passion for seamless user experiences, we've meticulously curated pagedone
                                to empower creators, designers, and developers alike. Our mission is to provide a
                                comprehensive toolkit,
                                enabling you to build intuitive, beautiful interfaces that resonate with users on every
                                interaction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-14 lg:py-24 relative">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-9 ">

                    <div class="lg:pr-24 flex items-center">
                        <div class="data w-full">
                            <img src="https://pagedone.io/asset/uploads/1702034785.png" alt="About Us tailwind page"
                                class="block lg:hidden mb-9 mx-auto">
                            <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center">
                                We
                                are Creative Since 2005</h2>
                            <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                                Pagedone isn’t just a collection of components and guidelines; it's a philosophy. We go
                                beyond aesthetics, prioritizing accessibility, scalability, and usability. Every
                                element,
                                from the tiniest
                                detail to the grandest layout, is meticulously crafted to enhance functionality and
                                elevate
                                user
                                satisfaction.
                            </p>
                        </div>
                    </div>
                    <div class="img-box ">
                        <img src="https://pagedone.io/asset/uploads/1702034785.png" alt="About Us tailwind page"
                            class="hidden lg:block ">
                    </div>
                </div>
            </div>
        </section>
        <Footer />
    </body>

</template>

<script>
import NavbarVue from '../LandingPage/Navbar.vue';
import Footer from '../LandingPage/Footer.vue'
export default {
    components: { Footer, NavbarVue },
}
</script>
