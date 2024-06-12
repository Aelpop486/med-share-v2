<template>
    <div class="bg-[#f3f4f6] dark:bg-black">
        <nav class="bg-[#f3f4f6] dark:bg-gray-900 border-b-2 border-blue-700">
            <div
                class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
            >
                <a
                    href="/"
                    class="flex items-center space-x-3 rtl:space-x-reverse"
                >
                    <img
                        src="@/Images/IMG_1525.svg"
                        class="h-8"
                        alt="MedShare"
                    />
                    <span
                        class="roo self-center text-[#1e429f] font-bold text-2xl whitespace-nowrap dark:text-white"
                        >MedShare</span
                    >
                </a>
                <div class="flex items-center lg:order-2">
                    <!-- <select
                        class="text-gray-950 dark:text-white outline-none font-bold rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-gray-950"
                    >
                        <option>English</option>
                        <option>عربي</option>
                    </select> -->
                    <Link
                        :href="route('login')"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-bold rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        >Log in</Link
                    >
                    <button
                        @click="toggleNavbar"
                        type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        data-collapse-toggle="navbar-cta"
                        aria-controls="navbar-cta"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <svg
                            class="hidden w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                </div>
                <div
                    :class="[
                        'items-center justify-between w-full md:flex md:w-auto md:order-1',
                        { hidden: !isNavbarOpen },
                    ]"
                    id="navbar-cta"
                >
                    <ul
                        class="flex flex-col font-bold p-4 md:p-0 mt-4 border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                    >
                        <li>
                            <a
                                href="/"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded font-bold hover:bg-[#1e429f] hover:text-white md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                aria-current="page"
                                >Home</a
                            >
                        </li>
                        <li>
                            <Link
                                :href="route('About')"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded font-bold hover:bg-[#1e429f] hover:text-white md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >About</Link
                            >
                        </li>
                        <li>
                            <Link
                                :href="route('Services')"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded font-bold hover:bg-[#1e429f] hover:text-white md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Our Services</Link
                            >
                        </li>
                        <li>
                            <Link
                                :href="route('pages')"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded font-bold hover:bg-[#1e429f] hover:text-white md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Pages</Link
                            >
                        </li>
                        <li>
                            <Link
                                :href="route('Contact')"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded font-bold hover:bg-[#1e429f] hover:text-white md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Contact Us</Link
                            >
                        </li>
                        <li>
                            <Link
                                :href="route('Faqs')"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded font-bold hover:bg-[#1e429f] hover:text-white md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Faqs</Link
                            >
                        </li>
                        <li>
                            <DarkMode   class="block py-2 px-3 md:p-0 text-gray-900 rounded font-bold hover:bg-[#1e429f] hover:text-white md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"/>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script setup>
import DarkMode from "./DarkMode.vue";
import { Link } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import { initFlowbite } from "flowbite";

const isNavbarOpen = ref(false);

function toggleNavbar() {
    isNavbarOpen.value = !isNavbarOpen.value;
}

onMounted(() => {
    initFlowbite();
});
</script>
