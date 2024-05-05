
<script>

import en from "./en.js";
import ar from "./ar.js";
export default {
    mixins: [en, ar],
    data() {
        return {
            lang: "en",
            isOpen:false,
        };
    },
    methods: {
        translate(prop) {
            return this[this.lang][prop];
        },
    },
};

</script>
<template>
    <Head title="Welcome" />

    <!-- <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Dashboard</Link> -->
    <!--
            <template v-else>
                <Link :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Log in</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Register</Link>
            </template>
</div> -->

    <!-- hero - start -->
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
        <!-- src/app.html -->
     <header class="bg-slate-100">
    <div class="flex items-center justify-between px-9  py-3">
       <a
                    href="/"
                    class="inline-flex items-center gap-2.5 text-2xl font-bold text-black md:text-3xl"
                    aria-label="logo"
                >
                    <img
                        src="../Images/IMG_1525.svg"
                        class="h-15 w-10"
                        alt=""
                    />

                    MedShare
                </a>
      <div>
        <button @click="isOpen = !isOpen" type="button" class="block text-black hover:text-gray-200 focus:text-black focus:outline-none">
          <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>
      </div>
    </div>
    <div :class="isOpen ? 'block' : 'hidden'" class="px-2 pt-2 pb-4 text-center">
      <a href="#" class="block px-2 py-1 text-black font-semibold rounded hover:bg-gray-200">{{
                        translate("services")
                    }}</a>
      <a href="#" class="mt-1 block px-2 py-1 text-black font-semibold rounded hover:bg-gray-200">{{ translate("explore") }}</a>
      <a href="#" class="mt-1 block px-2 py-1 text-black font-semibold rounded hover:bg-gray-200">{{ translate("learn") }}</a>
      <a href="#" class="mt-1 block px-2 py-1 text-black font-semibold rounded hover:bg-gray-200">{{ translate("more") }}</a>
      <div class="flex justify-center">
          <select
          name="lang"
          v-model="lang"
          class="my-6 flex px-2 py-1 text-black font-semibold rounded item-center "
          >
          <option  value="en">English</option>
          <option value="ar">عربي</option>
        </select>
    </div>
    <button><a href="/login" class="mt-1 mx-1 block px-2 py-1 text-black font-semibold rounded hover:bg-gray-200">Login</a></button>
    <button><a href="/register" class="mt-1 mx-1 block px-2 py-1 text-black font-semibold rounded hover:bg-gray-200">Register</a></button>

        <hr>

    </div>

  </header>

        <section class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-8 flex flex-wrap justify-between md:mb-16">
                <div
                    class="mb-6 flex w-full flex-col justify-center sm:mb-12 lg:mb-0 lg:w-1/3 lg:pb-24 lg:pt-48"
                >
                    <h1
                        class="mb-4 text-4xl font-bold text-black sm:text-5xl md:mb-8 md:text-4xl"
                    >
                        {{ translate("sectionOne") }}
                    </h1>

                    <p
                        class="max-w-md leading-relaxed text-gray-500 xl:text-lg"
                    >
                        {{ translate("sectionOnep") }}
                    </p>
                </div>

                <div class="mb-12 flex w-full md:mb-16 lg:w-2/3">
                    <div
                        class="relative left-12 top-12 z-10 -ml-12 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:left-16 md:top-16 lg:ml-0"
                    >
                        <img
                            src="https://images.rawpixel.com/image_social_square/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvay0xOTktY2hpbS0wMDYzXzEuanBn.jpg?s=Q7kDIY2z5WLw3WDruIfonSAzOFjB4cr9hQ2Q92gl4co"
                        />
                    </div>
                    <div
                        class="overflow-hidden rounded-lg bg-gray-100 shadow-lg"
                    >
                        <img
                            src="../Images/WhatsApp Image 2024-04-23 at 12.26.35 AM.jpeg"
                        />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- hero - end -->

    <!-- div-grid - start -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2
                    class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-2xl"
                >
                    {{ translate("sectionTwo") }}
                </h2>

                <p
                    class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg"
                >
                    {{ translate("sectionTwop") }}
                </p>
            </div>
            <!-- text - end -->

            <div
                class="grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4"
            >
                <!-- div - start -->
                <div>
                    <a
                        href="#"
                        class="group relative mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3"
                    >
                        <img
                            src="https://images.wuzzuf-data.net/files/company_logo/Resala-Charity-Organization-Egypt-14675-og.png"
                            loading="lazy"
                            alt="Photo by Austin Wade"
                            class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                        />

                        <div class="absolute bottom-2 left-0 flex gap-2">
                            <span
                                class="rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white"
                                >{{ translate("sectionTwoIconP") }}</span
                            >
                        </div>
                    </a>

                    <div class="flex items-end justify-between gap-2 px-2">
                        <div class="flex flex-col">
                            <a
                                href="#"
                                class="text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl"
                                >-----</a
                            >
                        </div>
                    </div>
                </div>
                <!-- div - end -->

                <!-- div - start -->
                <div>
                    <a
                        href="#"
                        class="group relative mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3"
                    >
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVqfvf6a1UMP7BioYX_Xnhl3_WBaU-VxNiGjug9vyCkXsScSMyWLUwETOhLPB_76JBWsU&usqp=CAU"
                            loading="lazy"
                            alt="Photo by Nick Karvounis"
                            class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                        />
                    </a>

                    <div class="flex items-end justify-between gap-2 px-2">
                        <div class="flex flex-col">
                            <a
                                href="#"
                                class="text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl"
                                >-----</a
                            >
                        </div>
                    </div>
                </div>
                <!-- div - end -->

                <!-- div - start -->
                <div>
                    <a
                        href="#"
                        class="group relative mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3"
                    >
                        <img
                            src="https://s3-eu-west-1.amazonaws.com/wuzzuf/files/company_logo/Misr-Elkheir-Foundation-Egypt-7932-1489657887-og.jpg"
                            loading="lazy"
                            alt="Photo by Austin Wade"
                            class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                        />
                        <div class="absolute bottom-2 left-0 flex gap-2">
                            <span
                                class="rounded-r-lg bg-green-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white"
                                >{{ translate("sectionTwoIconN") }}</span
                            >
                        </div>
                    </a>

                    <div class="flex items-end justify-between gap-2 px-2">
                        <div class="flex flex-col">
                            <a
                                href="#"
                                class="text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl"
                                >-----</a
                            >
                        </div>
                    </div>
                </div>
                <!-- div - end -->

                <!-- div - start -->
                <div>
                    <a
                        href="#"
                        class="group relative mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3"
                    >
                        <img
                            src="https://th.bing.com/th/id/R.14da25661b50fd2390c66468e9f7ddc2?rik=CcjmTFEW0%2FbTYw&pid=ImgRaw&r=0"
                            loading="lazy"
                            alt="Photo by Vladimir Fedotov"
                            class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                        />
                    </a>
                    <div class="flex items-end justify-between gap-2 px-2">
                        <div class="flex flex-col">
                            <a
                                href="#"
                                class="text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl"
                                >-----</a
                            >
                        </div>
                    </div>
                </div>
                <!-- div - end -->
            </div>
        </div>
    </div>
    <!-- div-grid - end -->

    <!-- call to action - start -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div
                class="flex flex-col overflow-hidden rounded-lg bg-blue-500 sm:flex-row md:h-80"
            >
                <!-- content - start -->
                <div class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-2/5">
                    <h2
                        class="mb-4 text-xl font-bold text-white md:text-2xl lg:text-4xl"
                    >
                        {{ translate("sectionThree") }}
                    </h2>

                    <p class="mb-8 max-w-md text-white">
                        {{ translate("sectionThreep") }}
                    </p>

                    <div class="mt-auto">
                        <a
                            href="#"
                            class="inline-block rounded-lg bg-white px-8 py-3 text-center text-sm font-semibold text-gray-800 outline-none ring-blue-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base"
                        >
                            {{ translate("sectionThreeBtn") }}</a
                        >
                    </div>
                </div>
                <!-- content - end -->

                <!-- image - start -->
                <div
                    class="order-first h-48 w-full sm:order-none sm:h-auto sm:w-1/2 lg:w-3/5"
                >
                    <video class="w-full h-full" autoplay muted
                    >
                        <source
                            src="../Images/WhatsApp Video 2024-04-23 at 12.26.03 AM.mp4"
                            type="video/mp4"
                        />
                    </video>
                </div>
                <!-- image - end -->
            </div>
        </div>
    </div>
    <!-- call to action - end -->

    <!-- collections - start -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <h2
                class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12"
            >
                {{ translate("sectionFour") }}
            </h2>

            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-6">
                <!-- review - start -->
                <div class="flex flex-col gap-3 rounded-lg border p-4 md:p-6">
                    <div>
                        <span class="block text-sm font-bold md:text-base"
                            >John McCulling</span
                        >
                        <span class="block text-sm text-gray-500"
                            >August 28, 2021</span
                        >
                    </div>

                    <!-- stars - start -->
                    <div class="-ml-1 flex gap-0.5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                    </div>
                    <!-- stars - end -->

                    <p class="text-gray-600">
                        This is a section of some simple filler text, also known
                        as placeholder text. It shares some characteristics of a
                        real written text but is random or otherwise generated.
                        It may be used to display a sample of fonts or generate
                        text for testing.
                    </p>
                </div>
                <!-- review - end -->

                <!-- review - start -->
                <div class="flex flex-col gap-3 rounded-lg border p-4 md:p-6">
                    <div>
                        <span class="block text-sm font-bold md:text-base"
                            >Kate Berg</span
                        >
                        <span class="block text-sm text-gray-500"
                            >July 21, 2021</span
                        >
                    </div>

                    <!-- stars - start -->
                    <div class="-ml-1 flex gap-0.5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                    </div>
                    <!-- stars - end -->

                    <p class="text-gray-600">
                        This is a section of some simple filler text, also known
                        as placeholder text. It shares some characteristics of a
                        real written text but is random or otherwise generated.
                        It may be used to display a sample of fonts or generate
                        text for testing.
                    </p>
                </div>
                <!-- review - end -->

                <!-- review - start -->
                <div class="flex flex-col gap-3 rounded-lg border p-4 md:p-6">
                    <div>
                        <span class="block text-sm font-bold md:text-base"
                            >Greg Jackson</span
                        >
                        <span class="block text-sm text-gray-500"
                            >March 16, 2021</span
                        >
                    </div>

                    <!-- stars - start -->
                    <div class="-ml-1 flex gap-0.5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-300"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-300"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                    </div>
                    <!-- stars - end -->

                    <p class="text-gray-600">
                        This is a section of some simple filler text, also known
                        as placeholder text. It shares some characteristics of a
                        real written text but is random or otherwise generated.
                        It may be used to display a sample of fonts or generate
                        text for testing.
                    </p>
                </div>
                <!-- review - end -->
            </div>
        </div>
    </div>
    <!-- collections - end -->
    <!-- ====== FAQ Section Start -->
    <div
        x-data="
   {
   openFaq1: false,
   openFaq2: false,
   openFaq3: false,
   openFaq4: false,
   openFaq5: false,
   openFaq6: false
   }
   "
        class="relative z-20 overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
    >
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div
                        class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20"
                    >
                        <span
                            class="block mb-2 text-lg font-semibold text-primary"
                        >
                            -
                        </span>
                        <h2
                            class="text-dark dark:text-white mb-4 text-3xl font-bold sm:text-[40px]/[48px]"
                        >
                            {{ translate("sectionFifth") }}
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            -
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq1 = !openFaq1"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq1 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    {{ translate("questionOne") }}
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                {{ translate("answerOne") }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq2 = !openFaq2"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq2 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    {{ translate("questionTwo") }}
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                {{ translate("answerTwo") }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq3 = !openFaq3"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq4 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    {{ translate("questionthree") }}
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                {{ translate("answerthree") }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq4 = !openFaq4"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq4 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    {{ translate("questionFour") }}
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                {{ translate("answerFour") }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq5 = !openFaq5"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq5 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    {{ translate("questionFifth") }}
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq5" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                {{ translate("answerFifth") }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq6 = !openFaq6"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq6 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    {{ translate("questionSixthly") }}
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq6" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                {{ translate("answerSixthly") }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg
                width="1440"
                height="886"
                viewBox="0 0 1440 886"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)"
                />
                <defs>
                    <linearGradient
                        id="paint0_linear"
                        x1="1308.65"
                        y1="1142.58"
                        x2="602.827"
                        y2="-418.681"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop
                            offset="1"
                            stop-color="#F5F2FD"
                            stop-opacity="0"
                        />
                        <stop
                            offset="1"
                            stop-color="#F5F2FD"
                            stop-opacity="0.096144"
                        />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>
    <!-- ====== FAQ Section End -->
    <!--contact - start-->
    <div class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1
                    class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
                >
                    {{ translate("sectionSixthly") }}
                </h1>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label
                                for="name"
                                class="leading-7 text-sm text-gray-600"
                                >Name</label
                            >
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            />
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label
                                for="email"
                                class="leading-7 text-sm text-gray-600"
                                >Email</label
                            >
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            />
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label
                                for="message"
                                class="leading-7 text-sm text-gray-600"
                                >Message</label
                            >
                            <textarea
                                id="message"
                                name="message"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                            ></textarea>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button
                            class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg"
                        >
                            {{ translate ("sectionSixthlyBtn") }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact - end-->

    <!--footer - start-->
    <footer class="bg-white">
        <div class="bg-blue-500 py-6">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div
                    class="flex flex-col items-center justify-between gap-2 md:flex-row"
                >
                    <div class="mb-3 text-center md:mb-0 md:text-left">
                        <span
                            class="font-bold uppercase tracking-widest text-gray-100"
                            >
                            {{ translate("sectionSeven") }}
                            </span
                        >
                        <p class="text-blue-200">{{ translate("sectionSevenp") }}</p>
                    </div>

                    <form class="flex w-full gap-2 md:max-w-md">
                        <input
                            placeholder=""
                            class="w-full flex-1 rounded border border-white bg-blue-400 px-3 py-2 text-white placeholder-blue-100 outline-none ring-blue-300 transition duration-100 focus:ring"
                        />

                        <button
                            class="inline-block rounded bg-white px-8 py-2 text-center text-sm font-semibold text-blue-500 outline-none ring-blue-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:text-blue-600 md:text-base"
                        >
                            {{ translate("sectionSevenBtn") }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="pt-12 lg:pt-16">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div
                    class="mb-16 grid grid-cols-2 gap-12 md:grid-cols-4 lg:grid-cols-6 lg:gap-8"
                >
                    <div class="col-span-full lg:col-span-2">
                        <!-- logo - start -->
                        <div class="mb-4 lg:-mt-2">
                            <a
                                href="/"
                                class="inline-flex items-center gap-2 text-xl font-bold text-black-500 md:text-2xl"
                                aria-label="logo"
                            >
                                <img
                                    src="../Images/IMG_1525.svg"
                                    class="h-15 w-10"
                                    alt=""
                                />

                                MedShare
                            </a>
                        </div>
                        <!-- logo - end -->

                        <p class="mb-6 text-gray-500 sm:pr-8">
                            Filler text is dummy text which has no meaning
                            however looks very similar to real text
                        </p>

                        <!-- social - start -->
                        <div class="flex gap-4">
                            <a
                                href="#"
                                target="_blank"
                                class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                                    />
                                </svg>
                            </a>

                            <a
                                href="#"
                                target="_blank"
                                class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                                    />
                                </svg>
                            </a>

                            <a
                                href="#"
                                target="_blank"
                                class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                    />
                                </svg>
                            </a>

                            <a
                                href="#"
                                target="_blank"
                                class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                                    />
                                </svg>
                            </a>
                            <!-- component -->
                        </div>
                        <!-- social - end -->
                    </div>



                    <!-- nav - start -->
                    <div>
                        <div
                            class="mb-4 font-bold uppercase tracking-widest text-gray-800"
                        >
                            Support
                        </div>

                        <nav class="flex flex-col gap-4">
                            <div>
                                <a
                                    href="#"
                                    class="text-gray-500 transition duration-100 hover:text-blue-500 active:text-blue-600"
                                    >Contact</a
                                >
                            </div>

                            <div>
                                <a
                                    href="#"
                                    class="text-gray-500 transition duration-100 hover:text-blue-500 active:text-blue-600"
                                    >Documentation</a
                                >
                            </div>

                            <div>
                                <a
                                    href="#"
                                    class="text-gray-500 transition duration-100 hover:text-blue-500 active:text-blue-600"
                                    >Chat</a
                                >
                            </div>

                            <div>
                                <a
                                    href="#"
                                    class="text-gray-500 transition duration-100 hover:text-blue-500 active:text-blue-600"
                                    >FAQ</a
                                >
                            </div>
                        </nav>
                    </div>
                    <!-- nav - end -->

                    <!-- nav - start -->
                    <div>
                        <div
                            class="mb-4 font-bold uppercase tracking-widest text-gray-800"
                        >
                            Legal
                        </div>

                        <nav class="flex flex-col gap-4">
                            <div>
                                <a
                                    href="#"
                                    class="text-gray-500 transition duration-100 hover:text-blue-500 active:text-blue-600"
                                    >Terms of Service</a
                                >
                            </div>

                            <div>
                                <a
                                    href="#"
                                    class="text-gray-500 transition duration-100 hover:text-blue-500 active:text-blue-600"
                                    >Privacy Policy</a
                                >
                            </div>

                            <div>
                                <a
                                    href="#"
                                    class="text-gray-500 transition duration-100 hover:text-blue-500 active:text-blue-600"
                                    >Cookie settings</a
                                >
                            </div>
                        </nav>
                    </div>
                    <!-- nav - end -->
                    <div class="ml-20 flex justify-center">
    <div>
        <!-- https://developer.apple.com/app-store/marketing/guidelines/#section-badges -->
        <div class="flex mt-3 w-48 h-14 bg-black text-white rounded-xl items-center justify-center">
            <div class="mr-3">
                <svg viewBox="0 0 384 512" width="30" >
                    <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                </svg>
            </div>
            <div>
                <div class="text-xs">Download on the</div>
                <div class="text-2xl font-semibold font-sans -mt-1">App Store</div>
            </div>
        </div>




        <!-- https://play.google.com/intl/en_us/badges/ -->
        <div class="flex mt-3 w-48 h-14 bg-black text-white rounded-lg items-center justify-center">
            <div class="mr-3">
                <svg viewBox="30 336.7 120.9 129.2" width="30">
                    <path fill="#FFD400" d="M119.2,421.2c15.3-8.4,27-14.8,28-15.3c3.2-1.7,6.5-6.2,0-9.7  c-2.1-1.1-13.4-7.3-28-15.3l-20.1,20.2L119.2,421.2z"/>
                    <path fill="#FF3333" d="M99.1,401.1l-64.2,64.7c1.5,0.2,3.2-0.2,5.2-1.3  c4.2-2.3,48.8-26.7,79.1-43.3L99.1,401.1L99.1,401.1z"/>
                    <path fill="#48FF48" d="M99.1,401.1l20.1-20.2c0,0-74.6-40.7-79.1-43.1  c-1.7-1-3.6-1.3-5.3-1L99.1,401.1z"/>
                    <path fill="#3BCCFF" d="M99.1,401.1l-64.3-64.3c-2.6,0.6-4.8,2.9-4.8,7.6  c0,7.5,0,107.5,0,113.8c0,4.3,1.7,7.4,4.9,7.7L99.1,401.1z"/>
                </svg>
            </div>
            <div>
                <div class="text-xs">GET IT ON</div>
                <div class="text-xl font-semibold font-sans -mt-1">Google Play</div>
            </div>
        </div>
    </div>
</div>
                </div>

                <div class="border-t py-8 text-center text-sm text-gray-400">
                    © 2024 - Present MedShare. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!--footer - end-->
</template>

<style>
/* .bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
} */
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
