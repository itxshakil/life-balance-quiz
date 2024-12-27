<template>
    <div class="space-y-4">
      <h3 class="text-lg font-semibold">{{ question }}</h3>
      <RadioGroup @value-change="onAnswer">
        <div v-for="value in [1, 2, 3, 4, 5]" :key="value" class="flex items-center space-x-2">
          <RadioGroupItem :value="value.toString()" :id="'answer-' + value />
          <Label :for="'answer-' + value>{{ value }}</Label>
        </div>
      </RadioGroup>
    </div>
  </template>
  
  <script lang="ts">
  import { defineComponent } from 'vue';
  import { RadioGroup, RadioGroupItem } from "@/components/ui/radio-group";
  import { Label } from "@/components/ui/label";
  
  export default defineComponent({
    props: {
      question: {
        type: String,
        required: true,
      },
      onAnswer: {
        type: Function,
        required: true,
      },
      questionNumber: {
        type: Number,
        required: true,
      },
      totalQuestions: {
        type: Number,
        required: true,
      },
    },
    components: { RadioGroup, RadioGroupItem, Label },
  });
  </script>
  