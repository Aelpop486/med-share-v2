<template>
  <Bar
    id="my-chart-id"
    :options="chartOptions"
    :data="chartData"
  />
</template>

<script>
import { Bar } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
import { Colors } from 'chart.js';
ChartJS.register(Colors);
ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default {
  name: 'BarChart',
  components: { Bar },
  data() {
    return {
      chartData: {
        labels: [ 'Sat', 'Sun', 'Mon','Tue','Wed','Thu','Fri' ],
            datasets: [{ data: [2, 12, 22,29,50,23,12] }],
      },
      chartOptions: {
          responsive: true

      },
    }
  }
}
</script>
