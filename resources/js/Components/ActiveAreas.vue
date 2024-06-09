<template>
    <div class=" max-w-sm m-auto p-10 bg-white dark:bg-gray-800 dark:border-gray-700 rounded-2xl">
              <div class=" items-center ">
                  <h6
                      class="text-xl font-bold leading-none text-gray-900 dark:text-white"
                  >
                     Most Interactive Areas
                  </h6>
                  <Link
                      href="#"
                      class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500"
                  >
                      View all
                  </Link>
              </div>
              <div class="flow-root">
                  <ul
                      role="list"
                      class="divide-y divide-gray-200 dark:divide-gray-700"
                  >
                      <li class="py-3 sm:py-4">
                          <div class="flex items-center">
                              <div class="flex-shrink-0">
                                  <img
                                      class="w-8 h-8 rounded-full"
                                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyLspyhuuRjIFFSFaCSOinGkYxEHFf2OECEQ&s"
                                      alt=""
                                  />
                              </div>
                              <div class="flex-1 min-w-0 ms-4">
                                  <p
                                      class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                  >
                                      Area 1
                                  </p>
                                  <p
                                      class="text-sm text-gray-500 truncate dark:text-gray-400"
                                  >
                                      High
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

</script>

<style lang="scss" scoped>

</style>
