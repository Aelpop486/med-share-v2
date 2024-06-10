<template>
   <ManagementTable :donations="donations" />

</template>

<script setup>
import ManagementTable from "@/Components/ManagementTable.vue";
import charitiesLayout from "@/Layouts/charitesLayout.vue";
defineOptions({ layout: charitiesLayout });
defineProps ({donations:Object})
</script>

<style lang="scss" scoped></style>
