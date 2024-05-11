<template>
    <div class="mx-auto px-5 bg-[#EAF0FF] min-h-sceen">
        <div class="flex flex-col items-center">
            <h2 class="font-bold text-5xl mt-5 tracking-tight">
                FAQ
            </h2>
        </div>
        <div class="grid  w-[90%] mx-auto mt-8">
            <div class="p-5 text-black mb-8 border-[3px] border-[#0155A5]  rounded-lg">
                <details class="group">
                    <summary
                        class="flex justify-between items-center font-medium cursor-pointer list-none border-full ">
                        <span>   {{ translate("question_1") }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        {{ translate("answer_1") }}
                    </p>
                </details>
            </div>
            <div class="p-5 text-black border-[3px] border-[#0155A5] mb-8 rounded-lg">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span>    {{ translate("question_2") }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 mb-8 group-open:animate-fadeIn">
                        {{ translate("answer_2") }}
                    </p>
                </details>
            </div>
            <div class="p-5 border-[3px] border-[#0155A5] text-black mb-8 rounded-lg">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span>   {{ translate("question_3") }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        {{ translate("answer_3") }}
                    </p>
                </details>
            </div>
            <div class="p-5 border-[3px] border-[#0155A5] text-black mb-8 rounded-lg">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span>   {{ translate("question_4") }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        {{ translate("answer_4") }}
                    </p>
                </details>
            </div>
            <div class="p-5 border-[3px] border-[#0155A5] text-black mb-8 rounded-lg">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span>   {{ translate("headerOne") }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        {{ translate("headerOne") }}
                    </p>
                </details>
            </div>
            <div class="p-5 border-[3px] border-[#0155A5] text-black mb-8 rounded-lg">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span>   {{ translate("question_5") }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        {{ translate("answer_5") }}
                    </p>
                </details>
            </div>

            <div class="p-5 border-[3px] border-[#0155A5] text-black mb-8 rounded-lg">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span>    {{ translate("question_6") }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        {{ translate("answer_6") }}
                    </p>
                </details>
            </div>

            <div class="p-5 border-[3px] border-[#0155A5] text-black mb-8 rounded-lg">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span>    {{ translate("question_7") }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        {{ translate("answer_7") }}
                    </p>
                </details>
            </div>

        </div>
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
