<template>
     <nav>
        <div class="flex items-center w-[100%] bg-[#EAF0FF] justify-between p-3 border-b border-[#0155A5] ">
            <div class="flex items-center gap-2">
                <div class="h-10 w-10">
                    <img src="@/Images/IMG_1525.svg" alt="" />
                </div>
                <!-- <div class="w-[1px] bg-blue-900 h-10 hidden lg:block"></div> -->
                <div
                    class="hidden font-bold text-2xl leading-4 lg:block"
                >
                    <p>
                        Med
                        <span class="text-[#0155A5]">Share</span>
                    </p>
                </div>
            </div>
            <div class="flex items-center mx-auto">
                <div class="hidden lg:block">
                    <ul
                        class="flex items-center text-xl font-bold justify-center text-[#1C2F41]"
                    >
                        <li
                            class="text-center pt-2 mr-6 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div class="">Home</div>
                            </a>
                        </li>
                        <li
                            class="mr-6 text-center pt-2 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div class="">Navigate</div>
                            </a>
                        </li>
                        <li
                            class="mr-6 text-center pt-2 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div>Stats</div>
                            </a>
                        </li>
                        <li
                            class="mr-6 text-center pt-2 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div>Idea</div>
                            </a>
                        </li>
                        <li
                            class="mr-6 text-center pt-2 iconChange hover:after:bg-[#0155A5] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                        >
                            <a href="#">
                                <div>Career</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="xl:hidden"></div>
            </div>
            <div class="flex items-center">
                <!-- lg:inline-block hidden -->
                <button
                    type="button"
                    class="flex items-center font-bold gap-2 px-10 py-2 mr-2 text-white transition-all duration-500 loginbtn rounded-xl"
                >
                Login

                    <svg
                        class="hidden sm:block"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                    
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <nav id="secondNav" class="text-blue-900 lg:hidden">
        <div class="fixed bottom-0 left-0 right-0 p-2 shadow bg-white">
            <ul class="flex items-center justify-between font-bold text-2xl">
                <!-- <li>
                    <a href="#">
                        <div
                            class="w-9 h-9 mx-auto text-center text-white rounded-full"
                        >
                            <img src="@/Images/IMG_1525.svg" alt="" />
                        </div>
                    </a>
                </li> -->
                <li>
                    <a href="#">
                        <svg
                            class="w-9 h-8 mx-auto text-black"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"
                            />
                        </svg>
                        <div class="text-sm">Home</div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <svg
                            class="w-9 h-8 mx-auto text-black"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"
                            />
                        </svg>
                        <div class="text-sm">Home</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg
                            class="w-9 h-8 mx-auto text-black"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"
                            />
                        </svg>
                        <div class="text-sm">Home</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg
                            class="w-9 h-8 mx-auto text-black"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"
                            />
                        </svg>
                        <div class="text-sm">Home</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg
                            class="w-9 h-8 mx-auto text-black"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"
                            />
                        </svg>
                        <div class="text-sm">Home</div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {

}
</script>

<style>
.loginbtn {
    background-color: #EAF0FF;
    border: 2px solid #0155A5;

    color: #0155A5;
}

.loginbtn:hover {
    color: #fff;
    background-color: #0155A5;

}


</style>
