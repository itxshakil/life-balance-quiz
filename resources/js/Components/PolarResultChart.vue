<template>
  <div class="w-full flex flex-col items-center justify-center">
    <canvas ref="chartRef" class="w-96 h-96"></canvas>
    <div class="mt-4 flex space-x-4">
      <button @click="saveAsPng" class="px-4 py-2 bg-blue-500 text-white rounded">Save as PNG</button>
      <button @click="shareResult" class="px-4 py-2 bg-green-500 text-white rounded">Share Result</button>
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
                  ],
                  borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
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
                    color: "rgb(55, 65, 81)", // Tailwind text-gray-700
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