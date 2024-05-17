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
        data: [12, 19, 3, 5, 2, 3, 7, 8, 9, 10, 11, 12],
      }],
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      },
    };

    chart.value = new ApexCharts(document.getElementById('chart'), options);
    chart.value.render();
  });
  </script>
