<template>
<!-- Main modal -->
  <div class="container px-5 py-24 mx-auto flex ">
            <div class="lg:w-4/6 mx-auto">
                <div
                    class=" flex-col justify-center sm:flex-row mt-10 bg-white rounded-2xl"
                >
                    <div class=" text-center sm:pr-8 sm:py-8">
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
                        <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SystemUser Id</label>
                        <input type="number" name="id" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type SystemUser ID" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type SystemUser Name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="Email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Email" required="">
                    </div>
                    <div class="col-span-2 ">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="area" required="">
                    </div>
                    <div class="col-span-2 ">
                        <label for="category" class="block mb-2 text-sm text-center font-medium text-gray-900 dark:text-white">Role</label>
                        <select id="category" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-500 w-full focus:border-primary-500 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">none </option>
                            <option value="">Admin</option>
                            <option value="">Super Admin</option>

                        </select>
                    </div>

                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Notes</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex w-full  items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Create
                </button>

            </form>
                    </div>
                </div>
            </div>
        </div>

</template>

<script setup>
import AdminsLayout from '@/Layouts/AdminsLayout.vue';
defineOptions({ layout: AdminsLayout })

</script>

<style lang="scss" scoped>

</style>
