<template>
  <div class="w-full flex flex-col items-center justify-center">
    <canvas ref="chartRef" class="w-96 h-96"></canvas>
    <div class="mt-4 flex space-x-4">
      <button class="px-4 py-2 bg-blue-500 text-white rounded inline-flex items-center gap-2" @click="saveAsPng">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
             stroke-width="2" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0h24v24H0z" fill="none" stroke="none"/>
          <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"/>
          <path d="M7 11l5 5l5 -5"/>
          <path d="M12 4l0 12"/>
        </svg>
        <span>Save as PNG</span>
      </button>
      <button class="px-4 py-2 bg-green-500 text-white rounded flex items-center gap-2 justify-center dark:text-white"
              @click="shareResult">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
             stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0h24v24H0z" fill="none" stroke="none"/>
          <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
          <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
          <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
          <path d="M8.7 10.7l6.6 -3.4"/>
          <path d="M8.7 13.3l6.6 3.4"/>
        </svg>
        <span>Share Result</span>
      </button>
    </div>
  </div>
</template>

<script lang="ts">
import {defineComponent, onMounted, PropType, ref, watch} from "vue";
import {ArcElement, Chart, ChartConfiguration, Legend, PolarAreaController, RadialLinearScale, Tooltip} from "chart.js";

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
                  },
                  grid: {
                    color: "rgba(200, 200, 200, 0.2)",
                  },
                },
              },
            },
          };

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
        {deep: true}
    );

    const saveAsPng = () => {
      const link = document.createElement('a');

      if (polarChart) {
        link.href = polarChart.toBase64Image();
      }
      const date = new Date().toISOString().slice(0, 10);
      link.download = 'life-balance-scores' + date + '.png';
      link.click();
    }

    const shareResult = async () => {
      if (polarChart) {
        const imageUrl = polarChart.toBase64Image();
        try {
          await navigator.share({
            title: 'Life Balance Scores',
            text: '✨ Take the Life Balance Quiz and unlock secrets to a happier, healthier you! 🚀 I don’t want to keep this awesome website to myself. I think you’ll love it too! Let’s take it together and see how we compare 🚀💡.',
            files: [new File([await (await fetch(imageUrl)).blob()], 'polar-chart.png', {type: 'image/png'})],
          });

        } catch (error) {
          console.error('Error sharing chart:', error);
        }
      }
    };

    return {chartRef, saveAsPng, shareResult};
  },
});
</script>