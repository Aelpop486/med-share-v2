<template>
    <div class="text-center bg-[#cedafb] ">
        <h1 class="pb-10 font-bold text-[#1C2F41] text-4xl">
            {{ translate("sixthSecrionOne") }}
        </h1>
        <p class=" font-bold text-[#1C2F41] pb-5 text-2xl">
            {{ translate("sixthSecrionTwo") }}
        </p>
        <video class="pb-20 mx-auto h-[50%] w-[70%] rounded-lg" autoplay loop muted>
            <source src="@/Images/WhatsApp Video 2024-04-23 at 12.26.03 AM.mp4" type="video/mp4" />
        </video>
    </div>

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

<style></style>
