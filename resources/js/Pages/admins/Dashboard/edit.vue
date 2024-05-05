<template>  <!-- NOT ROUTED YET-->
    <section class="text-gray-200 bg-gray-800 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div id="gallery" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div
                        class="relative h-44 overflow-hidden rounded-lg md:h-96 bg-gray-200"
                    >
                        <!-- Item 1 -->
                        <div
                            class="hidden duration-1000 ease-in-out"
                            data-carousel-item
                        >
                            <img
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt=""
                            />
                        </div>
                        <!-- Item 2 -->
                        <div
                            class="hidden duration-1000 ease-in-out"
                            data-carousel-item="active"
                        >
                            <img
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt=""
                            />
                        </div>
                        <!-- Item 3 -->
                        <div
                            class="hidden duration-1000 ease-in-out"
                            data-carousel-item
                        >
                            <img
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt=""
                            />
                        </div>
                        <!-- Item 4 -->
                        <div
                            class="hidden duration-1000 ease-in-out"
                            data-carousel-item
                        >
                            <img
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt=""
                            />
                        </div>
                        <!-- Item 5 -->
                        <div
                            class="hidden duration-1000 ease-in-out"
                            data-carousel-item
                        >
                            <img
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button
                        type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev
                    >
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
                        >
                            <svg
                                class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
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
                                    d="M5 1 1 5l4 4"
                                />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button
                        type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next
                    >
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
                        >
                            <svg
                                class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
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
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div
                    class="flex flex-col justify-center sm:flex-row mt-10 bg-gray-200 rounded-xl"
                >
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-800 text-gray-600"
                        >
                            <img
                                class="w-20 h-20 rounded-full"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfhk7r0ysYUeoklEp9XpCCCvf346u8U2dBow&s "
                                alt="user photo"
                            />
                        </div>


                           <a href=""  class="flex items-center text-center justify-center mb-10">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-2" fill="#075985"  viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                            <h2
                                class="font-medium title-font mx-4 text-cyan-900 text-lg"
                            >
                                View Location
                            </h2>
                           </a>


                        <form class="w-full max-w-lg bg-">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                      <label
                                        class="block uppercase tracking-wide text-cyan-700 text-s font-bold mb-2"
                                        for="grid-first-name"
                                    >
                                        Last Name
                                    </label>
                                    <label
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        for="grid-first-name"
                                    >
                                        --
                                    </label>
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label
                                        class="block uppercase tracking-wide text-cyan-700 text-s font-bold mb-2"
                                        for="grid-first-name"
                                    >
                                        Last Name
                                    </label>
                                    <label
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        for="grid-first-name"
                                    >
                                        --
                                    </label>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label
                                        class="block uppercase tracking-wide text-cyan-700 text-s font-bold mb-2"
                                        for="grid-password"
                                    >
                                        Password
                                    </label>
                                    <label
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        for="grid-password"
                                    >
                                        --
                                    </label>
                                    <label
                                        class="block uppercase tracking-wide text-cyan-700 text-s font-bold my-2"
                                        for="grid-password"
                                    >
                                        Email
                                    </label>
                                    <label
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        for="grid-password"
                                    >
                                        --
                                    </label>
                                    <label
                                        class="block uppercase tracking-wide text-cyan-700 text-s font-bold my-2"
                                        for="grid-password"
                                    >
                                        Phone
                                    </label>
                                    <label
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        for="grid-password"
                                    >
                                        --
                                    </label>
                                    <label
                                        class="block uppercase tracking-wide text-cyan-700 text-s font-bold my-2"
                                        for="grid-password"
                                    >
                                        Address
                                    </label>
                                    <label
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        for="grid-password"
                                    >
                                        --
                                    </label>

                                    <label
                                        for="message"
                                        class="block uppercase tracking-wide text-cyan-700 text-s font-bold my-2"
                                        >Comment</label
                                    >
                                    <textarea
                                        id="message"
                                        rows="4"
                                        col="10"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border-2 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder=" loremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem "
                                    ></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<style lang="scss" scoped></style>
