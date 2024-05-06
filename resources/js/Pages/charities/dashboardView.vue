<template>
    <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol
            class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse"
        >
            <li class="inline-flex items-center">
                <Link
                    href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                >
                    <svg
                        class="w-3 h-3 me-2.5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                        />
                    </svg>
                    Home
                </Link>
            </li>
            <li>
                <div class="flex items-center">
                    <svg
                        class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 6 10"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 9 4-4-4-4"
                        />
                    </svg>
                    <a
                        href="#"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white"
                        >Dashboard</a
                    >
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg
                        class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 6 10"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 9 4-4-4-4"
                        />
                    </svg>
                    <span
                        class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"
                        >Analytics</span
                    >
                </div>
            </li>
        </ol>
    </nav>
    <h2
        class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white"
    >
        Analytics
    </h2>
    <hr class="h-px my-6 bg-gray-200 border-0 dark:bg-gray-700" />
    <ol class="items-center sm:flex">
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div
                    class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0"
                >
                    <svg
                        class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                        />
                    </svg>
                </div>
                <div
                    class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"
                ></div>
            </div>
            <div class="mt-3 sm:pe-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    January
                </h3>
                <time
                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"
                    >100 Donations</time
                >
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div
                    class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0"
                >
                    <svg
                        class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                        />
                    </svg>
                </div>
                <div
                    class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"
                ></div>
            </div>
            <div class="mt-3 sm:pe-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    February
                </h3>
                <time
                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"
                    >125 Donations</time
                >
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div
                    class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0"
                >
                    <svg
                        class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                        />
                    </svg>
                </div>
                <div
                    class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"
                ></div>
            </div>
            <div class="mt-3 sm:pe-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Mars
                </h3>
                <time
                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"
                    >150 Donations</time
                >
            </div>
        </li>
    </ol>
    <div class="grid grid-cols-4">
        <div class="col-span-2">
            <!-- <Charts class="my-20 bg-white rounded-xl p-2" /> -->
        </div>
        <div class="col-span-1">
            <!-- <LastUsers /> -->
        </div>
        <div class="col-span-1">
            <!-- <LastDonetion /> -->
        </div>
    </div>

    <!-- <DonationTable /> -->
</template>

<script setup>
import charitiesLayout from "@/Layouts/charitesLayout.vue";
defineOptions({ layout: charitiesLayout });
import { Link } from "@inertiajs/vue3";
// import Charts from "@/Components/Charts.vue";
// import LastDonetion from "@/Components/LastDonetion.vue";
// import LastUsers from "@/Components/LastUsers.vue";
// import DonationTable from "@/Components/DonationTable.vue";
</script>

<style lang="scss" scoped></style>
