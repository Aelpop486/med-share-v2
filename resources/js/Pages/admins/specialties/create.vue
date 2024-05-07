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
                    <Link
                        href="#"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white"
                        >Specialties</Link
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
                        >Speciality Charity Table</span
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
                    >
                        Create Speciality
                    </span>
                </div>
            </li>
        </ol>
    </nav>
    <h2
        class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white"
    >
        Create Speciality
    </h2>
    <hr class="h-px my-6 bg-gray-200 border-0 dark:bg-gray-700" />
    <!-- Main modal -->
    <div class="container px-5 py-24 mx-auto ">
        <div class="lg:w-4/6 mx-auto bg-white rounded-2xl">
            <div
                class="flex flex-col justify-center sm:flex-row mt-10 rounded-xl"
            >
                <div class="w-3/4 text-center sm:pr-8 sm:py-8">
                    <form class="p-4 md:p-5">
                        <div class="flex flex-col justify-center mb-4">
                            <div class="shrink-0 mb-6 justify-center flex">
                                <img
                                    class="h-20 w-20 bg-slate-300 object-cover rounded-full"
                                    src=""
                                    alt=""
                                />
                            </div>

                            <label
                                class="mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input"
                                >Upload Photo</label
                            >
                            <input
                                class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input"
                                type="file"
                            />
                        </div>
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label
                                    for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Title</label
                                >
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type Speciality Title"
                                    required=""
                                />
                            </div>

                            <div class="col-span-2">
                                <label
                                    for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >
                                    Description</label
                                >
                                <textarea
                                    id="description"
                                    rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write Speciality description "
                                ></textarea>
                            </div>
                        </div>
                        <button
                            type="submit"
                            class="text-white inline-flex w-full items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        >
                            <svg
                                class="me-1 -ms-1 w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import AdminsLayout from "@/Layouts/AdminsLayout.vue";
defineOptions({ layout: AdminsLayout });
</script>

<style lang="scss" scoped></style>
