<script>
import { Link } from "@inertiajs/vue3";

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

<template>
    <nav>
        <div
            class="flex items-center w-[100%] bg-[#EAF0FF] justify-between p-3 border-b border-[#0155A5]"
        >
            <div class="flex items-center gap-2">
                <div class="h-10 w-10">
                    <img src="@/Images/IMG_1525.svg" alt="" />
                </div>
                <!-- <div class="w-[1px] bg-blue-900 h-10 hidden lg:block"></div> -->
                <div class="hidden font-bold text-2xl leading-4 lg:block">
                    <p>
                        Med
                        <span class="text-[#0155A5]">Share</span>
                    </p>
                </div>
            </div>
            <div class="flex items-center mx-auto">
                <div class="hidden lg:block">
                    <ul
                        class="flex items-center text-xl font-bold justify-center text-[#1C2F41]"
                    >
                        <li
                            class="text-center pt-2 mr-6 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div class="">{{ translate("home") }}</div>
                            </a>
                        </li>
                        <li
                            class="mr-6 text-center pt-2 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div class="">{{ translate("about") }}</div>
                            </a>
                        </li>
                        <li
                            class="mr-6 text-center pt-2 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div>{{ translate("ourServices") }}</div>
                            </a>
                        </li>
                        <li
                            class="mr-6 text-center pt-2 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div>{{ translate("pages") }}</div>
                            </a>
                        </li>
                        <li
                            class="mr-6 text-center pt-2 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div>{{ translate("contact") }}</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="xl:hidden"></div>
            </div>
            <div class="flex items-center space-x-3">
                <select
                    name="lang"
                    v-model="lang"
                    class="appearance-none row-start-1 col-start-1 border-[#0155a5] border-[2px] text-white transition-all duration-500 loginbtn rounded-xl"
                >
                    translation
                    <option value="en">ُEnglish</option>
                    <option value="ar">عربي</option>
                </select>

                <Link
                    :href="route('login')"
                    type="button"
                    class="flex items-center font-bold gap-2 px-10 py-2 mr-2 text-white transition-all duration-500 loginbtn rounded-xl"
                >
                    {{ translate("login") }}

                    <svg
                        class="hidden sm:block"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="none"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                        />
                    </svg>
                </Link>
            </div>
        </div>
    </nav>
    <nav id="secondNav" class="text-blue-900 lg:hidden">
        <div
            class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600"
        >
            <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
                <button
                    type="button"
                    class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-6 h-6 group-hover:text-blue-600 text-gray-500"
                    >
                        <path
                            d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z"
                        />
                        <path
                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z"
                        />
                    </svg>

                    <span
                        class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        >{{ translate("homeOne") }}</span
                    >
                </button>
                <button
                    type="button"
                    class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-6 h-6 group-hover:text-blue-600 text-gray-500"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                            clip-rule="evenodd"
                        />
                    </svg>

                    <span
                        class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        >{{ translate("aboutone") }}</span
                    >
                </button>
                <button
                    type="button"
                    class="inline-flex flex-col items-center justify-center text-sm px-5 border-e border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-6 h-6 group-hover:text-blue-600 text-gray-500"
                    >
                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        <path
                            fill-rule="evenodd"
                            d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    <span
                        class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        >{{ translate("ourServicesOur") }}</span
                    >
                </button>

                <button
                    type="button"
                    class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-6 h-6 group-hover:text-blue-600 text-gray-500"
                    >
                        <path
                            d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"
                        />
                    </svg>

                    <span
                        class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        >{{ translate("pages") }}</span
                    >
                </button>
                <button
                    type="button"
                    class="inline-flex flex-col items-center justify-center px-5 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group border-x dark:border-gray-600"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-6 h-6 group-hover:text-blue-600 text-gray-500"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    <span
                        class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        >{{ translate("contactone") }}</span
                    >
                </button>
            </div>
        </div>
    </nav>
</template>

<style>
.loginbtn {
    background-color: #eaf0ff;
    border: 2px solid #0155a5;

    color: #0155a5;
}

.loginbtn:hover {
    color: #fff;
    background-color: #0155a5;
}
</style>
