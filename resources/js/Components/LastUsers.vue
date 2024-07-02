<template>
      <div class=" max-w-sm m-4 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-10 dark:bg-gray-800 dark:border-gray-700">
                <div class=" mb-4">
                    <h5
                        class="text-xl font-bold leading-none text-gray-900 dark:text-white"
                    >
                        Latest Users
                    </h5>
                    <Link
                    :href="route('admins.users')"
                        class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500"
                    >
                        View all
                    </Link>
                </div>
                <div class="flow-root">
                    <ul
                        role="list"
                        class="divide-y divide-gray-200 dark:divide-gray-700"
                        v-for="(user,index)  in users.slice(0, 5)" :key="index"
                    >
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img
                                        class="w-8 h-8 rounded-full"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfhk7r0ysYUeoklEp9XpCCCvf346u8U2dBow&s"
                                        alt=""
                                    />
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p
                                        class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                    >
                                        {{user.name}}
                                    </p>
                                    <p
                                        class="text-sm text-gray-500 truncate dark:text-gray-400"
                                    >
                                        {{user.email}}
                                    </p>
                                </div>
                                <div
                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white"
                                >
                                ***
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps ({users:Object});

</script>

<style lang="scss" scoped>

</style>
