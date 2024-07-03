<template>
    <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol
            class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse"
        >
            <li class="inline-flex items-center">
                <a
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
                </a>
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
                        class="ms-1 text-sm font-medium text-slate-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white"
                        >Charities</a
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
                        class="ms-1 text-sm font-medium text-gray-700 md:ms-2 dark:text-gray-400"
                        >Charity Table</span
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
                        class="ms-1 text-sm font-medium text-gray-700 md:ms-2 dark:text-gray-400"
                        >Edit Charity</span
                    >
                </div>
            </li>
        </ol>
    </nav>
    <h2
        class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white"
    >
        Edit Charity Profile
    </h2>
    <hr class="h-px my-6 bg-gray-300 border-0 dark:bg-gray-700" />
    <section class="text-gray-200 body-font">
        <div class="container px-5 py-24 mx-auto">
            <!-- Edit Section-->
            <form class="w-full p-4 md:p-5" @submit.prevent="submit">
                <div class="">
                    <!-- image upload -->
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
                    <!-- image upload End -->
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="  ">
                        <div class="mt-4">
                            <!-- <label
                                for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Password</label
                            >
                            <input
                                v-model="form.password"
                                type="password"
                                name="password"
                                id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Password"
                                required
                            />
                            <InputError
                                class="mt-2"
                                :message="form.errors.password"
                            /> -->
                            <label
                                for="id"
                                class="mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Charity Id</label
                            >
                            <input
                                type="number"
                                name="id"
                                id="id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type User ID"
                                required=""
                                disabled
                                readonly
                                v-model="form.id"
                            />
                        </div>
                        <div class="mt-4">
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
                                placeholder="Charity Name"
                                required=""
                            />
                            <InputError
                                class="mt-2"
                                :message="form.errors.name"
                            />
                        </div>
                        <div class="mt-4">
                            <label
                                for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Phone</label
                            >
                            <input
                                v-model="form.phone"
                                type="text"
                                name="phone"
                                id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Phone"
                            />
                            <InputError
                                class="mt-2"
                                :message="form.errors.phone"
                            />
                        </div>
                        <div class="mt-4">
                            <label
                                for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Email</label
                            >
                            <input
                                v-model="form.email"
                                type="email"
                                name="email"
                                id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Email"
                                required=""
                            />
                            <InputError
                                class="mt-2"
                                :message="form.errors.email"
                            />
                        </div>
                    </div>
                    <div class="">
                        <div class="mt-4">
                            <label
                                for="website"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Website URL</label
                            >
                            <input
                                v-model="form.website_link"
                                type="url"
                                id="website"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Website.com"
                            />
                        </div>

                        <div class="mt-4">
                            <label
                                for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Speciality</label
                            >
                            <select
                                v-model="form.specialty_id"
                                id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 w-full focus:border-primary-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                disabled
                            >
                                <option
                                    v-for="(s, index) in specialty"
                                    :key="index"
                                    :value="s.id"
                                >
                                    {{ s.title }}
                                </option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <label
                                for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Status</label
                            >
                            <select
                                v-model="form.isAtive"
                                id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 w-full focus:border-primary-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            >
                                <option selected="">-</option>
                                <option value="">Active</option>
                                <option value="">Not Active</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <label
                                for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >
                                Description</label
                            >
                            <textarea
                                v-model="form.description"
                                id="description"
                                rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write product description here"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <button
                    type="submit"
                    class="text-white inline-flex w-full mt-12 items-center bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
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
            <!-- Edit Section End-->
            <hr class="h-px my-6 bg-gray-300 border-0 dark:bg-gray-700" />

            <div class="lg:w-4/6 mx-auto bg-white rounded-3xl">
                <div class="py-20">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div
                            class="flex flex-col flex-1 gap-10 lg:gap-0 lg:flex-row lg:justify-between"
                        >
                            <div
                                class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100"
                            >
                                <div
                                    class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center"
                                >
                                    260+
                                </div>
                                <span
                                    class="text-xl text-gray-500 text-center block"
                                    >Expert Consultants
                                </span>
                            </div>
                            <div
                                class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100"
                            >
                                <div
                                    class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center"
                                >
                                    975+
                                </div>
                                <span
                                    class="text-xl text-gray-500 text-center block"
                                    >Active Clients
                                </span>
                            </div>
                            <div
                                class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100"
                            >
                                <div
                                    class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center"
                                >
                                    724+
                                </div>
                                <span
                                    class="text-xl text-gray-500 text-center block"
                                    >Projects Delivered
                                </span>
                            </div>
                            <div class="w-full lg:w-1/4">
                                <div
                                    class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center"
                                >
                                    89+
                                </div>
                                <span
                                    class="text-xl text-gray-500 text-center block"
                                    >Orders in Queue
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="h-px my-6 bg-gray-300 border-0 dark:bg-gray-700" />

            <charities-users-table />
        </div>
    </section>
</template>

<script setup>
import Swal from "sweetalert2";
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import { Head, Link, useForm } from "@inertiajs/vue3";
import AdminsLayout from "@/Layouts/AdminsLayout.vue";
import InputError from "@/Components/InputError.vue";
defineOptions({ layout: AdminsLayout });

const props = defineProps({ charity: Object, specialty: Object });

onMounted(() => {
    initFlowbite();
});

const form = useForm({
    id: props.charity.id,
    name: props.charity.name,
    email: props.charity.email,
    phone: props.charity.phone,
    website_link: props.charity.website_link,
    // password: "",
    specialty_id: props.charity.specialty_id,
    isAtive: props.charity.isActive,
    description: props.charity.description,
    image: props.charity.image,
});
const submit = () => {
    form.put(route("admins.charities.update", { charity: props.charity.id }), {
        onSuccess: () => Swal.fire("Created successfully", "", "success"),
    });
};
</script>

<style lang="scss" scoped></style>
