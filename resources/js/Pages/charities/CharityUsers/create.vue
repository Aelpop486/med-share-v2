<template>

  <div>
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
                              class="ms-1 text-sm font-medium text-gray-700 md:ms-2 dark:text-gray-400"
                              >CharityUsers</span
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
                              ></span
                          >
                      </div>
                  </li>
              </ol>
          </nav>
          <h2
              class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white"
          >
            CharityUsers
          </h2>
          <hr class="h-px my-6 bg-gray-300 border-0 dark:bg-gray-700" />

  </div>

 <div class="container px-5 py-6">

            <div class="lg:w-3/6 mx-auto bg-white rounded-2xl">
                <div class="rounded-xl">
                    <div class="text-center sm:pr-8 sm:py-8">
                        <form
                            class="p-4 md:p-5"
                            @submit.prevent="submit"
                            method="POST"
                        >
                            <div class="justify-center mb-10">
                                <div class="shrink-0 mb-6 justify-center flex">
                                    <img
                                        class="h-20 w-20 bg-slate-300 object-cover rounded-full"
                                        src=""
                                        alt
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
                                        placeholder="Charity Name"
                                        required
                                    />
                                </div>
                                <div class="col-span-2">
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
                                        required
                                    />
                                </div>
                                <div class="col-span-2">
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
                                        required
                                    />
                                </div>
                                <div class="col-span-2">
                                    <label
                                        for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >password</label
                                    >
                                    <input
                                        v-model="form.password"
                                        type="password"
                                        id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="password"
                                        required
                                    />
                                </div>
                                <div class="col-span-2">
                                    <label
                                        for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >confirm password</label
                                    >
                                    <input
                                        v-model="form.password_confirmation"
                                        type="password"
                                        id="password_confirmation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="password_confirmation"
                                        required
                                    />
                                </div>

                                <div class="col-span-2">
                                    <label
                                        for="category"
                                        class="block mb-2 text-sm text-center font-medium text-gray-900 dark:text-white"
                                        >role</label
                                    >
                                    <select
                                        v-model="form.role"
                                        id="category"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 w-full focus:border-primary-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    >
                                        <option selected>-</option>
                                        <option value>role 1</option>

                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label
                                        for="category"
                                        class="block mb-2 text-sm text-center font-medium text-gray-900 dark:text-white"
                                        >Status</label
                                    >
                                    <select
                                        id="category"
                                        v-model="form.isAtive"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 w-full focus:border-primary-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    >
                                        <option selected>-</option>
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
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
                                    />
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
import { Head, Link, useForm } from '@inertiajs/vue3';
import charitiesLayout from "@/Layouts/charitesLayout.vue";
defineOptions({ layout: charitiesLayout });

const form = useForm({
    Name: '',
    password  : '',
    description: '',
    image: '',

});
const submit = () => {
    form.post(route("charits.Charityusers.store"), {
        onFinish: () => Swal.fire("Created successfully", "", "success"),
    });
};



</script>

<style lang="scss" scoped></style>
