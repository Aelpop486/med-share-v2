<template>
<section class="bg-[#f3f4f6] dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Cooperate with the largest charities
        </h1>
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                style="background-image:url('https://mekeg.org/assets/v2/img/logo-en.svg')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Best website collections</h2>
                    <a href="https://mekeg.org/en">
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Website</p>
                </a>
                </div>
            </div>

            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                style="background-image:url('https://scontent.fcai20-5.fna.fbcdn.net/v/t39.30808-6/440582692_833017858873940_4609254405662983498_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=mUUcIzeUknsQ7kNvgEqZY_X&_nc_ht=scontent.fcai20-5.fna&oh=00_AYDpXHjpfXrRvJq7t6zTIOmnopARCDQ5S7BfYe9P8AGT_w&oe=666F56A0')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Block of Ui kit collections</h2>
                    <a href="https://www.egyptianrc.org/Arabic/home">
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Website</p>
                </a>
                </div>
            </div>

            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                style="background-image:url('https://ahl-masr.ngo/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2024/03/cropped-1-01-scaled-e1709765234602.jpg.webp')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Ton’s of mobile mockup</h2>
                    <a href="https://ahl-masr.ngo/ar/?doing_wp_cron=1718196797.8433630466461181640625">
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Website</p>
                </a>
                </div>
            </div>

        </div>
    </div>
</section>
</template>

<script>
import en from "@/translation/en";
import ar from "@/translation/ar";

export default {
    mixins: [en, ar],
    data() {
        return {
            lang: "en",
        };
    },
    methods: {
        translate(prop) {
            return this[this.lang][prop];
        },
    },
};
</script>

<style>

</style>
