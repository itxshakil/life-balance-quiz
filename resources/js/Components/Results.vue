<template>
    <div class="space-y-6">
      <ChartContainer
        :chartData="chartData"
        class="h-[300px]"
      />
      <div class="text-center">
        <h3 class="text-xl font-semibold mb-2">Your Overall Life Balance Score</h3>
        <p class="text-3xl font-bold">{{ overallBalance }}%</p>
      </div>
      <Button @click="retakeQuiz" class="w-full">Retake Quiz</Button>
    </div>
  </template>
  
  <script lang="ts">
  import { defineComponent } from 'vue';
  import ChartContainer from './ChartContainer.vue';
  import { Button } from '@/components/ui/button';
  
  export default defineComponent({
    props: {
      chartData: {
        type: Array as () => Array<any>,
        required: true,
      },
      overallBalance: {
        type: String,
        required: true,
      },
    },
    components: { ChartContainer, Button },
  });
  </script>
  