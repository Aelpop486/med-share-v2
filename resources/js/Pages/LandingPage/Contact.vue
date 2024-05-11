<template>
    <NavbarVue />
    <section class="w-full xl:py-24 lg:py-20 py-12 bg-slate-50 border-b border-gray-300">
        <div class="w-full max-w-7xl px-6 lg:px-8 mx-auto">
            <div
                class="grid lg:grid-cols-2 grid-cols-1 gap-x-16 xl:gap-x-24 gap-y-14 max-w-lg md:max-w-3xl lg:max-w-full mx-auto">
                <div>
                    <h1
                        class="font-manrope text-gray-900 md:text-5xl text-4xl font-bold leading-tight mb-8 lg:text-left text-center">
                        Contact Us</h1>
                    <p class="text-gray-900 text-lg font-normal leading-7 lg:text-left text-center">We're here to assist
                        you! Whether you have questions, feedback, or inquiries, our team is ready to help.</p>
                    <div class="my-12 grid md:grid-cols-2 grid-cols-1 md:gap-x-8 gap-y-8">
                        <div
                            class="rounded-2xl border border-gray-200 bg-white p-7 group transition-all duration-500 hover:bg-indigo-600">
                            <a href="javascript:;"
                                class="w-14 h-14 bg-indigo-600 rounded-full flex items-center justify-center mb-5 transition-all duration-500 group-hover:bg-white cursor-pointer">
                                <svg class="fill-white transition-all duration-500 group-hover:fill-indigo-600"
                                    width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.84758 7.58462L4.63863 7.46524L4.63855 7.46473L3.84758 7.58462ZM23.693 27.4085L23.5227 28.1902L23.5232 28.1903L23.693 27.4085ZM24.3879 20.598L24.6727 19.8504L24.3879 20.598ZM10.8408 7.07147L10.0919 7.35301V7.35301L10.8408 7.07147ZM11.6654 10.4021L10.879 10.2555L11.6654 10.4021ZM11.535 8.91814L12.2839 8.6366L11.535 8.91814ZM11.2622 15.0393L11.9827 14.6915L11.2622 15.0393ZM11.0857 13.5119L11.8721 13.6585L11.0857 13.5119ZM18.0722 20.3301L17.92 19.5447L18.0722 20.3301ZM16.3099 20.069L15.9211 20.7682L16.3099 20.069ZM21.0165 19.7596L21.1687 20.545L21.0165 19.7596ZM22.5311 19.8906L22.2463 20.6382L22.5311 19.8906ZM18.8963 2.79564C18.4577 2.74255 18.0591 3.05509 18.006 3.49372C17.9529 3.93234 18.2654 4.33096 18.7041 4.38405L18.8963 2.79564ZM26.5498 12.1082C26.6098 12.546 27.0132 12.8523 27.4509 12.7923C27.8887 12.7324 28.195 12.329 28.135 11.8912L26.5498 12.1082ZM18.5736 7.39616C18.1349 7.34387 17.7369 7.65713 17.6846 8.09585C17.6323 8.53457 17.9455 8.93262 18.3843 8.98491L18.5736 7.39616ZM21.9524 12.4978C22.0116 12.9356 22.4144 13.2426 22.8523 13.1835C23.2901 13.1244 23.5972 12.7215 23.538 12.2836L21.9524 12.4978ZM20.8643 18.9742L17.92 19.5447L18.2244 21.1155L21.1687 20.545L20.8643 18.9742ZM16.6987 19.3699C14.4144 18.0995 12.9397 16.6739 11.9827 14.6915L10.5418 15.387C11.6752 17.7349 13.423 19.3789 15.9211 20.7682L16.6987 19.3699ZM11.8721 13.6585L12.4519 10.5487L10.879 10.2555L10.2992 13.3652L11.8721 13.6585ZM12.2839 8.6366L11.5896 6.78994L10.0919 7.35301L10.7862 9.19967L12.2839 8.6366ZM8.24537 4.4745H5.932V6.0745H8.24537V4.4745ZM5.932 4.4745C4.22338 4.4745 2.78466 5.91024 3.05662 7.70451L4.63855 7.46473C4.52906 6.74236 5.09463 6.0745 5.932 6.0745V4.4745ZM3.05654 7.704C3.53868 10.8987 4.97217 16.8037 9.24397 21.0755L10.3753 19.9441C6.46975 16.0385 5.10446 10.552 4.63863 7.46524L3.05654 7.704ZM9.24397 21.0755C13.7053 25.5368 20.0794 27.4401 23.5227 28.1902L23.8632 26.6269C20.4991 25.894 14.5022 24.0709 10.3753 19.9441L9.24397 21.0755ZM23.5232 28.1903C25.3821 28.594 26.9735 27.1319 26.9735 25.323H25.3735C25.3735 26.2068 24.6333 26.7941 23.8627 26.6268L23.5232 28.1903ZM26.9735 25.323V23.1891H25.3735V25.323H26.9735ZM24.6727 19.8504L22.816 19.143L22.2463 20.6382L24.1031 21.3456L24.6727 19.8504ZM26.9735 23.1891C26.9735 22.7447 26.9746 22.3461 26.938 22.0163C26.8991 21.6666 26.8117 21.3186 26.5874 20.9931L25.2699 21.901C25.2904 21.9307 25.3254 21.9915 25.3478 22.1929C25.3723 22.4141 25.3735 22.709 25.3735 23.1891H26.9735ZM24.1031 21.3456C24.5517 21.5165 24.8269 21.6226 25.0249 21.7243C25.2051 21.8169 25.2494 21.8712 25.2699 21.901L26.5874 20.9931C26.3631 20.6676 26.069 20.462 25.7561 20.3012C25.4609 20.1495 25.088 20.0087 24.6727 19.8504L24.1031 21.3456ZM11.5896 6.78994C11.4325 6.37206 11.2927 5.99701 11.1416 5.70004C10.9815 5.38519 10.7761 5.08922 10.4498 4.86331L9.53905 6.17878C9.56885 6.19941 9.62325 6.24403 9.71552 6.42544C9.81689 6.62473 9.92222 6.90162 10.0919 7.35301L11.5896 6.78994ZM8.24537 6.0745C8.7276 6.0745 9.02385 6.07565 9.24606 6.1004C9.44834 6.12293 9.50925 6.15814 9.53905 6.17878L10.4498 4.86331C10.1236 4.6374 9.77426 4.54934 9.42319 4.51023C9.09205 4.47335 8.6918 4.4745 8.24537 4.4745V6.0745ZM12.4519 10.5487C12.5145 10.2131 12.5798 9.89958 12.5514 9.57655L10.9575 9.71661C10.9624 9.77151 10.9573 9.83573 10.879 10.2555L12.4519 10.5487ZM10.7862 9.19967C10.9365 9.59936 10.9527 9.6617 10.9575 9.71661L12.5514 9.57655C12.523 9.25351 12.404 8.95621 12.2839 8.6366L10.7862 9.19967ZM11.9827 14.6915C11.8158 14.3457 11.8038 14.304 11.7945 14.2344L10.2085 14.4461C10.2579 14.8157 10.4002 15.0936 10.5418 15.387L11.9827 14.6915ZM10.2992 13.3652C10.2314 13.7288 10.1587 14.0724 10.2085 14.4461L11.7945 14.2344C11.7857 14.1687 11.7886 14.1065 11.8721 13.6585L10.2992 13.3652ZM17.92 19.5447C17.4 19.6455 17.3246 19.6491 17.2535 19.6378L17.0016 21.2179C17.414 21.2836 17.8072 21.1964 18.2244 21.1155L17.92 19.5447ZM15.9211 20.7682C16.2665 20.9602 16.5915 21.1525 17.0016 21.2179L17.2535 19.6378C17.1803 19.6261 17.1213 19.6048 16.6987 19.3699L15.9211 20.7682ZM21.1687 20.545C21.5971 20.4619 21.6627 20.4564 21.7188 20.4613L21.8567 18.8672C21.5267 18.8387 21.2068 18.9078 20.8643 18.9742L21.1687 20.545ZM22.816 19.143C22.49 19.0188 22.1867 18.8958 21.8567 18.8672L21.7188 20.4613C21.7748 20.4661 21.8385 20.4828 22.2463 20.6382L22.816 19.143ZM18.7041 4.38405C22.8983 4.8917 25.9767 7.92241 26.5498 12.1082L28.135 11.8912C27.4633 6.98479 23.8126 3.39069 18.8963 2.79564L18.7041 4.38405ZM18.3843 8.98491C20.2949 9.21265 21.6949 10.5909 21.9524 12.4978L23.538 12.2836C23.1828 9.65387 21.2086 7.71023 18.5736 7.39616L18.3843 8.98491Z"
                                        fill="" />
                                </svg>
                            </a>
                            <h5
                                class="text-gray-900 text-xl font-semibold leading-8 mb-3 transition-all duration-500 group-hover:text-white">
                                Support</h5>
                            <p
                                class="text-gray-500 text-sm font-normal leading-5 transition-all duration-500 group-hover:text-white">
                                We Provide Various Methods For You To Carry Out All Transactions Related To Your
                                Finances</p>
                        </div>
                        <div
                            class="rounded-2xl border border-gray-200 bg-white p-7 group transition-all duration-500 hover:bg-indigo-600">
                            <a href="javascript:;"
                                class="w-14 h-14 bg-indigo-600 rounded-full flex items-center justify-center mb-5 transition-all duration-500 group-hover:bg-white cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                                </svg>

                            </a>
                            <h5
                                class="text-gray-900 text-xl font-semibold leading-8 mb-3 transition-all duration-500 group-hover:text-white">
                                Pagedone Blog</h5>
                            <p
                                class="text-gray-500 text-sm font-normal leading-5 transition-all duration-500 group-hover:text-white">
                                We have the most up-to-date security to support the security of all our customers in
                                carrying out all transactions. </p>
                        </div>
                    </div>
                 
                </div>
                <form action=""
                    class="h-fit bg-white border border-slate-200 rounded-2xl lg:p-12 p-8 w-full max-w-lg md:max-w-3xl lg:max-w-full mx-auto">
                    <div class="relative mb-8">
                        <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Name
                        </label>
                        <div class="relative text-gray-500 focus-within:text-gray-900">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 21C20 18.1716 20 16.7574 19.1213 15.8787C18.2426 15 16.8284 15 14 15H10C7.17157 15 5.75736 15 4.87868 15.8787C4 16.7574 4 18.1716 4 21M12.1441 11C12.0541 10.991 11.9459 10.991 11.8468 11C9.7027 10.9278 8 9.16911 8 7.00451C8 4.79481 9.78378 3 12 3C14.2072 3 16 4.79481 16 7.00451C15.991 9.16911 14.2883 10.9278 12.1441 11Z"
                                        stroke="#111827" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="text" id="default-search"
                                class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                placeholder="Full Name">
                        </div>
                    </div>
                    <div class="relative mb-8">
                        <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Email
                        </label>
                        <div class="relative text-gray-500 focus-within:text-gray-900">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.25201 7L8.15881 10.8953C10.2686 12.1612 11.3235 12.7941 12.4825 12.7665C13.6416 12.739 14.6652 12.0566 16.7124 10.6917L21.748 7M10 20H14C17.7712 20 19.6569 20 20.8284 18.8284C22 17.6569 22 15.7712 22 12C22 8.22876 22 6.34315 20.8284 5.17157C19.6569 4 17.7712 4 14 4H10C6.22876 4 4.34315 4 3.17157 5.17157C2 6.34315 2 8.22876 2 12C2 15.7712 2 17.6569 3.17157 18.8284C4.34315 20 6.22876 20 10 20Z"
                                        stroke="#6B7280" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <input type="text" id="default-search"
                                class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                placeholder="Enter Your Email">
                        </div>
                    </div>

                    <div class="relative mb-8">
                        <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">Phone
                        </label>
                        <div class="relative text-gray-500 focus-within:text-gray-900">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>


                            </div>
                            <input type="text" id="default-search"
                                class="w-full block h-12 pr-5 pl-12 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                placeholder="Enter Your Phone">
                        </div>
                    </div>

                    <div class="relative mb-8">
                        <label class="flex  items-center mb-2 text-gray-600 text-base leading-6 font-medium">How can we
                            help you
                        </label>
                        <div class="relative ">
                            <textarea
                                class="block w-full h-40 px-4 py-2.5 text-lg leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-2xl placeholder-gray-400 focus:outline-none resize-none"
                                placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <button
                        class="w-full h-12 rounded-full bg-indigo-600 hover:bg-indigo-900 transition-all duration-700 shadow-sm text-white text-base font-semibold leading-6 flex items-center justify-center">Send
                        message <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.5 15L11.0858 11.4142C11.7525 10.7475 12.0858 10.4142 12.0858 10C12.0858 9.58579 11.7525 9.25245 11.0858 8.58579L7.5 5"
                                stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>


    <Footer />
</template>

<script>

import NavbarVue from '../LandingPage/Navbar.vue';
import Footer from '../LandingPage/Footer.vue'
export default {
    components: { Footer, NavbarVue },

}
</script>

<style lang="scss" scoped></style>
