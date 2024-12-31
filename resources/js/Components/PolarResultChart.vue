<template>
    <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800 max-w-3xl mx-auto">
      <h2 class="text-2xl font-semibold text-center text-green-700 dark:text-green-400 mb-6">
        Your Life Balance Results
      </h2>
      <div class="w-full max-w-md md:max-w-lg lg:max-w-xl">
        <canvas ref="chartRef"></canvas>
      </div>
    </div>
  </template>

  <script lang="ts">
  import { defineComponent, ref, onMounted, watch, PropType } from "vue";
  import { Chart } from "chart.js/auto";

  export default {
    name: "PolarResultChart",
    props: {
      scores: {
        type: Object as PropType<Record<string, number>>,
        required: true,
      },
    },
    setup(props) {
      const chartRef = ref<HTMLCanvasElement | null>(null);
      let radarChart: Chart | null = null;

      const initializeChart = () => {
        if (chartRef.value) {
          const ctx = chartRef.value.getContext("2d");
          if (ctx) {
            radarChart?.destroy(); // Cleanup any existing chart
            radarChart = new Chart(ctx, {
              type: "radar",
              data: {
                labels: Object.keys(props.scores),
                datasets: [
                  {
                    label: "Life Balance Scores",
                    data: Object.values(props.scores),
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 2,
                    pointBackgroundColor: "rgba(54, 162, 235, 1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(54, 162, 235, 1)",
                  },
                ],
              },
              options: {
                responsive: true,
                maintainAspectRatio: false,
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
                scales: {
                  r: {
                    suggestedMin: 0,
                    suggestedMax: 100,
                    ticks: {
                      stepSize: 20,
                      backdropColor: "transparent",
                      callback: (value) => `${value}%`,
                    },
                    grid: {
                      color: "rgba(200, 200, 200, 0.2)",
                    },
                    angleLines: {
                      color: "rgba(200, 200, 200, 0.3)",
                    },
                  },
                },
                animation: {
                  duration: 1500,
                  easing: "easeOutQuart",
                  animateRotate: true,
                  animateScale: true,
                },
              },
            });
          }
        }
      };

      onMounted(() => {
        initializeChart();
      });

      watch(() => props.scores, initializeChart, { deep: true });

      return { chartRef };
    },
  }
  </script>

  <style scoped>
  /* No additional styles are needed since we are using TailwindCSS */
  </style>
