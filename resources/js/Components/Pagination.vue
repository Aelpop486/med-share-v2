<template>
    <div v-for="link in links"  class="inline-flex px-1 mt-6  font-bold " >
        <Link
        v-if="link.url"
    :href="link.url"
    v-html="link.label"
    class=" active:text-lg">

    </Link>
    <span v-else  v-html=link.label class="text-gray-400" >

    </span>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({ links: Array })

</script>

<style lang="scss" scoped>

</style>

