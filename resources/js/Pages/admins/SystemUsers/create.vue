<template>
    <!-- Main modal -->
    <div class="container px-5 py-24 mx-auto flex">
        <div class="lg:w-4/6 mx-auto">
            <div
                class="flex-col justify-center sm:flex-row mt-10 bg-white rounded-2xl"
            >
                <div class="text-center sm:pr-8 sm:py-8">
                    <form class="p-4 md:p-5" @submit.prevent="submit">
                        <div class="flex flex-col justify-center mb-4">
                            <div class="shrink-0 mb-6 justify-center flex">
                                <img class="h-20 w-20 bg-slate-300 object-cover rounded-full" src="" alt="" />
                            </div>

                            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Upload Photo</label>
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
                            <div class="col-span-2"></div>
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
                                    placeholder="Type SystemUser Name"
                                    required=""
                                />
                                                    <InputError class="mt-2" :message="form.errors.name" />

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
                                                    <InputError class="mt-2" :message="form.errors.email" />

                            </div>
                                 <div class="col-span-2">
                                    <label
                                        for="email"
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
                                                        <InputError class="mt-2" :message="form.errors.password" />

                                </div>
                                <div class="col-span-2">
                                    <label
                                        for="password_confirmation"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >Confirm Password</label
                                    >
                                    <input
                                        v-model="form.password_confirmation"
                                        type="password"
                                        name="password_confirmation"
                                        id="password_confirmation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Confirm Password"
                                        required
                                    />
                                                        <InputError class="mt-2" :message="form.errors.password_confirmation" />

                                </div>
                            <!-- <div class="col-span-2 ">
                        <label for="role" class="block mb-2 text-sm text-center font-medium text-gray-900 dark:text-white">Role</label>
                        <select v-model="form.role" id="role" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-500 w-full focus:border-primary-500 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">none </option>
                            <option value="">Admin</option>
                            <option value="">Super Admin</option>

                        </select>
                    </div> -->


                        </div>
                        <button
                            type="submit"
                            class="text-white inline-flex mt-6 w-full items-center bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
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
import InputError from '@/Components/InputError.vue';
import AdminsLayout from "@/Layouts/AdminsLayout.vue";
defineOptions({ layout: AdminsLayout });
const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    // role: "",
    image: "",
});
const submit = () => {
    form.post(route("admins.admins.store"), {
        onFinish: () => Swal.fire("Created successfully", "", "success"),
    });
};
</script>

<style lang="scss" scoped></style>
