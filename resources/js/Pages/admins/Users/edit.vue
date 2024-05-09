<template>
<!-- Main modal -->
  <div class="container px-5 py-24 mx-auto flex ">
            <div class="lg:w-4/6 mx-auto">
                <div
                    class=" flex-col justify-center sm:flex-row mt-10 bg-white  rounded-2xl"
                >
                    <div class=" text-center sm:pr-8 sm:py-8 ">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-400 text-gray-600"
                        >
                            <img
                                class="w-20 h-20 rounded-full"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfhk7r0ysYUeoklEp9XpCCCvf346u8U2dBow&s"
                                alt=""
                            />
                        </div>




                          <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Id</label>
                        <input type="number" name="id" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type User ID" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input v-model="form.name" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type User Name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input v-model="form.email" type="text" name="Email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Email" required="">
                    </div>
                    <div class="col-span-2 ">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input v-model="form.address" type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="area" required="">
                    </div>
                    <div class="col-span-2 ">
                        <label for="language" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
                        <input v-model="form.language" type="text" name="language" id="language" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Language" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Description</label>
                        <textarea v-model="form.description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                    </div>
                </div>

               <div class="flex justify-center">
                 <DisableButton/>
                <BanButton/>
               </div>
            </form>
                    </div>
                </div>
            </div>
        </div>

</template>

<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

import AdminsLayout from '@/Layouts/AdminsLayout.vue';
defineOptions({ layout: AdminsLayout })
import DisableButton from "@/Components/DisableButton.vue";
import BanButton from "@/Components/BanButton.vue";
const form = useForm({
    name: '',
    email: '',
    address:'',
    role: '',
    description: '',
    image: '',
    language:'',

});


</script>

<style lang="scss" scoped>

</style>
