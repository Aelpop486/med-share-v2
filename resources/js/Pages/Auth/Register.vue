<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
// import Swal from 'sweetalert2'

defineOptions({ layout: GuestLayout })

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    phone: '',
    website_link: '',
    specialty_id: '',
    description: '',
    image: "",
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => Swal.fire('Registered successfully', '', 'success')
    });
};

</script>

<template>

    <div class="mx-auto dark:bg-gray-900 dark:text-white">

        <div class="flex justify-center items-center font-bold text-2xl  text-center">
            <h1>
                👋<br>
                Register with us now as a charitable organization <br>
                <span class="text-blue-700">To become our partner in spreading health awareness </span>
            </h1>
        </div>

        <form @submit.prevent="submit"
            class="h-fit bg-white border dark:bg-gray-900 dark:text-white border-slate-200 shadow-xl rounded-2xl lg:p-12 p-8 w-[75%] mt-10  max-w-lg md:max-w-3xl lg:max-w-full mx-auto">

            <div class="relative mb-8 dark:bg-gray-900 dark:text-white">
                <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Name
                </label>
                <div class="relative text-gray-500 focus-within:text-gray-900">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 21C20 18.1716 20 16.7574 19.1213 15.8787C18.2426 15 16.8284 15 14 15H10C7.17157 15 5.75736 15 4.87868 15.8787C4 16.7574 4 18.1716 4 21M12.1441 11C12.0541 10.991 11.9459 10.991 11.8468 11C9.7027 10.9278 8 9.16911 8 7.00451C8 4.79481 9.78378 3 12 3C14.2072 3 16 4.79481 16 7.00451C15.991 9.16911 14.2883 10.9278 12.1441 11Z"
                                stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <input id="name" type="text" v-model="form.name" required autofocus autocomplete="name"
                        class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Full Name">
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
            </div>

            <div class="relative mb-8">
                <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Email
                </label>
                <div class="relative text-gray-500 focus-within:text-gray-900">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.25201 7L8.15881 10.8953C10.2686 12.1612 11.3235 12.7941 12.4825 12.7665C13.6416 12.739 14.6652 12.0566 16.7124 10.6917L21.748 7M10 20H14C17.7712 20 19.6569 20 20.8284 18.8284C22 17.6569 22 15.7712 22 12C22 8.22876 22 6.34315 20.8284 5.17157C19.6569 4 17.7712 4 14 4H10C6.22876 4 4.34315 4 3.17157 5.17157C2 6.34315 2 8.22876 2 12C2 15.7712 2 17.6569 3.17157 18.8284C4.34315 20 6.22876 20 10 20Z"
                                stroke="#6B7280" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <input id="email" type="email" v-model="form.email" required autocomplete="username"
                        class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Enter Your Email">
                    <InputError class="mt-2" :message="form.errors.email" />

                </div>
            </div>

            <div class="relative mb-8">
                <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Phone
                </label>
                <div class="relative text-gray-500 focus-within:text-gray-900">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>


                    </div>
                    <input id="phone" type="tel" v-model="form.phone" required autocomplete="phone"
                        class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Enter Your Phone">
                    <InputError class="mt-2" :message="form.errors.phone" />
                </div>
            </div>

            <div class="relative mb-8">
                <label for="category"
                    class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Major</label>
                <div class="relative text-gray-500 focus-within:text-gray-900">

                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>


                    </div>
                    <select v-model="form.specialty_id" id="category"
                        class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-600 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none">
                        <option selected="">-</option>
                        <option value="">Major 1</option>
                        <option value="">Major 2</option>
                        <option value="">Major 3</option>
                        <option value="">Major 4</option>
                    </select>
                </div>

            </div>


            <div class="relative mb-8">
                <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Website
                </label>
                <div class="relative text-gray-500 focus-within:text-gray-900">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>


                    </div>
                    <input id="website" type="url" v-model="form.website_link" autocomplete="website"
                        class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Enter Your Website">
                    <InputError class="mt-2" :message="form.errors.website" />

                </div>
            </div>



            <div class="relative mb-8">
                <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Password
                </label>
                <div class="relative text-gray-500 focus-within:text-gray-900">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-6 h-6"
                            viewBox="0 0 128 128">
                            <path
                                d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                data-original="#000000"></path>
                        </svg>

                    </div>
                    <input type="password" id="password" v-model="form.password" required autocomplete="new-password"
                        class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Enter Your Password">
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
            </div>


            <div class="relative mb-8">
                <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Confirm Password
                </label>
                <div class="relative text-gray-500 focus-within:text-gray-900">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-6 h-6"
                            viewBox="0 0 128 128">
                            <path
                                d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                data-original="#000000"></path>
                        </svg>

                    </div>
                    <input type="password" id="password_confirmation" v-model="form.password_confirmation" required
                        autocomplete="new-password"
                        class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="Enter Your Confirm Password">
                    <InputError class="mt-2" :message="form.errors.password_confirmation" />

                </div>
            </div>

            <div class="relative mb-8">
                <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">
                    Description
                </label>
                <div class="relative ">
                    <textarea v-model="form.description" id="description" rows="4"
                        class="block w-full h-40 px-4 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-2xl placeholder-gray-400 focus:outline-none resize-none"
                        placeholder="Write your message"></textarea>
                </div>
            </div>

            <div class="mb-8">
                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                        <PhotoIcon class="mx-auto h-12 w-12 text-gray-300" aria-hidden="true" />
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Upload a file</span>
                                <input
                                @input="form.image = $event.target.files[0]"
                                id="file_input"
                               type="file" class="sr-only" />
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
            </div>

            <button
                class="w-full h-12 rounded-full bg-[#0155A5] hover:bg-indigo-900 transition-all duration-700 shadow-sm text-white text-base font-semibold leading-6 flex items-center justify-center">Register <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.5 15L11.0858 11.4142C11.7525 10.7475 12.0858 10.4142 12.0858 10C12.0858 9.58579 11.7525 9.25245 11.0858 8.58579L7.5 5"
                        stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </form>
    </div>
</template>
