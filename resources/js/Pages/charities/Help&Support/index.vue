<template>
   <!-- component -->
<div class="flex justify-center mx-auto items-center h-screen bg-white rounded-2xl ">
	<!-- COMPONENT CODE -->
	<div class="container grid md:grid-cols-3 sm:grid-cols-1 my-4 px-4 lg:px-20 gap-8">

		<div class="w-full p-8 my-4 md:px-12  lg:pl-20 lg:pr-40  rounded-2xl shadow-2xl col-span-2">
			<div class="flex">
				<h1 class="font-bold text-blue-500 uppercase text-5xl">Send us a <br /> message</h1>
			</div>
			<div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
				<input v-model="form.name" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="First Name*" />
				<input  v-model="form.charityName" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="Charity Name*" />
				<input v-model="form.email" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="email" placeholder="Email*" />
				<input v-model="form.phone" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="tel" placeholder="Phone*" />
        </div>

				<div class="my-4" >
					<textarea v-model="form.description" placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
				</div>
                 <label
                                class="mb-2 text-sm font-medium text-gray-300 dark:text-white"
                                for="file_input"
                                >Upload Photo</label
                            >
                            <input
                                class="w-full text-sm text-gray-900 border  border-gray-500 rounded-lg cursor-pointer bg-gray-100  dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input"
                                type="file"
                            />
				<div class="my-2 ">
					<button class="uppercase text-sm font-bold tracking-wide bg-blue-500 hover:bg-blue-600 text-gray-100 p-3 rounded-lg w-full
                      focus:outline-none focus:shadow-outline">
            Send Message
          </button>
				</div>
			</div>

            <div class="bg-blue-500 m-4 p-4 col-span-1  rounded-2xl shadow-2xl">
                <h2 class="text-white bold text-3xl text-center mt-6">
                    Contact Us
                </h2>
                <p class="text-white bold text-xl m-6 ">Our Email:<br>--</p>
                <p class="text-white bold text-xl m-6">Our Phone:<br> ---</p>

            </div>

    </div>
    <!-- COMPONENT CODE -->
</div>


</template>

<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

import charitiesLayout from "@/Layouts/charitesLayout.vue";
defineOptions({ layout: charitiesLayout });
const form = useForm({
    name: '',
    charityName:'',
    email: '',
    phone: '',
    description: '',
    image: '',

});
</script>

<style lang="scss" scoped></style>
