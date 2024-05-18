<template>
    <!-- Main modal -->
    <div class="container px-5 py-24 mx-auto flex">
        <div class="lg:w-4/6 mx-auto">
            <div
                class="flex-col justify-center sm:flex-row mt-10 rounded-2xl bg-white"
            >
                <div class="text-center sm:pr-8 sm:py-8">
                    <form class="p-4 md:p-5" @submit.prevent="submit">
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
                                class="mb-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input"
                                type="file"
                                @input="form.image = $event.target.files[0]"
                            />
                            <InputError
                                class="mt-2"
                                :message="form.errors.image"
                            />
                        </div>

                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label
                                    for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Name</label
                                >
                                <input
                                    v-model="form.name"
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type User Name"
                                    required=""
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.name"
                                />
                            </div>
                            <div class="col-span-2">
                                <label
                                    for="Email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Email</label
                                >
                                <input
                                    v-model="form.email"
                                    type="text"
                                    name="Email"
                                    id="Email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type Email"
                                    required=""
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.email"
                                />
                            </div>
                            <div class="col-span-2">
                                <label
                                    for="address"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Address</label
                                >
                                <input
                                    v-model="form.address"
                                    type="text"
                                    name="address"
                                    id="address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="area"
                                    required=""
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.address"
                                />
                            </div>
                            <div class="col-span-2">
                                <label
                                    for="language"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Language</label
                                >
                                <input
                                    v-model="form.language"
                                    type="text"
                                    name="language"
                                    id="language"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Language"
                                    required=""
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.language"
                                />
                            </div>

                            <div class="col-span-2">
                                <label
                                    for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >
                                    Notes</label
                                >
                                <textarea
                                    v-model="form.description"
                                    id="description"
                                    rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write product description here"
                                ></textarea>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.description"
                                />
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
import { Head, Link, useForm } from "@inertiajs/vue3";

import AdminsLayout from "@/Layouts/AdminsLayout.vue";
defineOptions({ layout: AdminsLayout });
const form = useForm({
    name: "",
    email: "",
    address: "",
    role: "",
    description: "",
    image: "",
    language: "",
});

const submit = () => {
    form.post(route("users.store"), {
        onFinish: () => Swal.fire("Created successfully", "", "success"),
    });
};
</script>

<style lang="scss" scoped></style>
