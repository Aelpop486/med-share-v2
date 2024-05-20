<template>
    <div class="h-96 w-full">
      <div id="chart" class="h-full w-full"></div>
    </div>
  </template>

  <script setup>
  import { ref, onMounted } from 'vue';
  import ApexCharts from 'apexcharts';

  const chart = ref(null);

  onMounted(() => {
    const options = {
      chart: {
        type: 'line',
        height: 350,
      },
      series: [{
        name: 'series1',
        data: [2, 12, 22,29,50,23,12],
      }],
      xaxis: {
        categories: [ 'Sat', 'Sun', 'Mon','Tue','Wed','Thu','Fri'],
      },
    };

    chart.value = new ApexCharts(document.getElementById('chart'), options);
    chart.value.render();
  });
  </script>
