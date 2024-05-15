<template>
    <body class="font-inter">
        <section class="py-14 lg:py-24 bg-gray-50">
            <h1
                class="max-w-2xl mx-auto text-center font-bold text-4xl  text-gray-900 mb-5 md:text-5xl md:leading-normal">
                who are we..?
            </h1>
            <p class=" mx-auto text-center text-base font-bold leading-7 text-gray-500 mb-9">Invest
                We are a team dedicated to helping people get the necessary treatment and providing it in a simple and effective way.</p>

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
                            <img src="@/Images/About.jpg" alt="About medShare"
                                class="block lg:hidden mb-9 mx-auto">
                            <h2 class="font-manrope font-bold text-xl lg:text-5xl text-black mb-9 max-lg:text-center">
                                A team that seeks to change the lives of others with unused medicines
                                </h2>
                            <p class="font-normal text-md leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">

                                We are a team of students from Borg El Arab Technological University, committed to spreading awareness of the importance of exploiting unused medicines instead of disposing of them. We designed this project to achieve our goal of helping those in need and improving public health, and we seek to build a society based on sustainability and social solidarity.
                            </p>
                        </div>
                    </div>
                    <div class="img-box ">
                        <img src="@/Images/About.jpg" alt="About medShare"
                            class="hidden lg:block ">
                    </div>
                </div>
            </div>
        </section>
    </body>

</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';

defineOptions({ layout: GuestLayout })
</script>
