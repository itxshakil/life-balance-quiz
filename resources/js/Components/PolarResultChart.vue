<template>
  <div class="w-full flex flex-col items-center justify-center">
    <canvas ref="chartRef" class="w-96 h-96"></canvas>
    <div class="mt-4 flex space-x-4">
      <button @click="saveAsPng" class="px-4 py-2 bg-blue-500 text-white rounded">Save as PNG</button>
      <button @click="shareResult" class="px-4 py-2 bg-green-500 text-white rounded flex items-center justify-center dark:text-white">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
        </svg>
        Share Result
      </button>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted, watch, PropType } from "vue";
import { Chart, ChartConfiguration, PolarAreaController, Tooltip, Legend, ArcElement, RadialLinearScale } from "chart.js";

// Register required components
Chart.register(PolarAreaController, Tooltip, Legend, ArcElement, RadialLinearScale);

export default defineComponent({
  name: "PolarResultChart",
  props: {
    scores: {
      type: Object as PropType<Record<string, number>>,
      required: true,
    },
  },
  setup(props) {
    const chartRef = ref<HTMLCanvasElement | null>(null);
    let polarChart: Chart | null = null;

    const initializeChart = () => {
      console.log("Initialize")
      if (chartRef.value) {
        const ctx = chartRef.value.getContext("2d");
        if (ctx) {
          polarChart?.destroy(); // Clean up existing chart instance

          const chartConfig: ChartConfiguration<"polarArea"> = {
            type: "polarArea",
            data: {
              labels: Object.keys(props.scores),
              datasets: [
                {
                  label: "Life Balance Scores",
                  data: Object.values(props.scores),
                  backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(255, 206, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(199, 199, 199, 0.2)",
                    "rgba(83, 102, 255, 0.2)",
                    "rgba(255, 99, 71, 0.2)",
                    "rgba(60, 179, 113, 0.2)",
                    "rgba(123, 104, 238, 0.2)",
                    "rgba(255, 140, 0, 0.2)",
                    "rgba(70, 130, 180, 0.2)",
                    "rgba(244, 164, 96, 0.2)",
                    "rgba(32, 178, 170, 0.2)"
                  ],
                  borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                    "rgba(255, 159, 64, 1)",
                    "rgba(199, 199, 199, 1)",
                    "rgba(83, 102, 255, 1)",
                    "rgba(255, 99, 71, 1)",
                    "rgba(60, 179, 113, 1)",
                    "rgba(123, 104, 238, 1)",
                    "rgba(255, 140, 0, 1)",
                    "rgba(70, 130, 180, 1)",
                    "rgba(244, 164, 96, 1)",
                    "rgba(32, 178, 170, 1)"
                  ],
                  borderWidth: 1,
                },
              ],
            },
            options: {
              responsive: true,
              maintainAspectRatio: true,
              plugins: {
                tooltip: {
                  enabled: true,
                },
                legend: {
                  display: true,
                  labels: {
                    color: (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) ? 'white' : 'black'
                  },
                },
              },
              animation: {
                duration: 1500,
                easing: "easeOutQuart",
                animateRotate: true,
                animateScale: true,
              },
              scales: {
                r: {
                  ticks: {
                    stepSize: 25,
                    backdropColor: "transparent",
                    callback: (value) => `${value}%`,
                  },
                  grid: {
                    color: "rgba(200, 200, 200, 0.2)",
                  },
                },
              },
            },
          };

          console.log(chartConfig);

          polarChart = new Chart(ctx, chartConfig);
        }
      }
    };

    onMounted(() => {
      initializeChart();
    });

    watch(
      () => props.scores,
      () => initializeChart(),
      { deep: true }
    );

    const saveAsPng = () => {
      const link = document.createElement('a');
      console.log(polarChart);
      if (polarChart) {
        link.href = polarChart.toBase64Image();
      }
      link.download = 'polar-chart.png';
      console.log('Chart saved as polar-chart.png');
      link.click();
    }

    const shareResult = async () => {
      if (polarChart) {
        const imageUrl = polarChart.toBase64Image();
        try {
          await navigator.share({
            title: 'Life Balance Scores',
            text: 'Check out my life balance scores!',
            files: [new File([await (await fetch(imageUrl)).blob()], 'polar-chart.png', { type: 'image/png' })],
          });
          console.log('Chart shared successfully');
        } catch (error) {
          console.error('Error sharing chart:', error);
        }
      }
    };

    return { chartRef, saveAsPng, shareResult };
  },
});
</script>