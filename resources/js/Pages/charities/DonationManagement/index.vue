<template>
   <ManagementTable/>

</template>

<script setup>
import DonationTable from "@/Components/DonationTable.vue";
import ManagementTable from "@/Components/ManagementTable.vue";
import charitiesLayout from "@/Layouts/charitesLayout.vue";
defineOptions({ layout: charitiesLayout });
</script>

<style lang="scss" scoped></style>
