<template>
    <div class="landing-page bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
      <Head title="Welcome" />

      <header class="text-center py-10 bg-blue-600 dark:bg-blue-800 text-white">
        <h1 class="text-4xl font-bold">🌟 Unlock Your Best Life Balance!</h1>
        <p class="mt-4 text-xl">Take this quick quiz to discover how balanced your life is across key areas like joy, health, and relationships.</p>
      </header>

      <main class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
        <section class="text-center my-10">
          <svg class="w-24 h-24 mx-auto mb-6" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
            <circle class="fill-none stroke-gray-200 dark:stroke-gray-700 stroke-[4px]" cx="18" cy="18" r="16"></circle>
            <circle class="progress fill-none stroke-blue-600 dark:stroke-blue-400 stroke-[4px] duration-200 ease-in-out -rotate-90" cx="18" cy="18" r="16" :stroke-dasharray="`85 100`"></circle>
            <text x="18" y="20.5" class="progress-text text-xs font-bold fill-gray-900 dark:fill-gray-100">85%</text>
          </svg>
          <p class="text-lg">Understanding your life balance is crucial for personal growth and well-being. Our quiz is based on scientific principles and helps you identify areas for improvement.</p>
        </section>

        <section class="my-10">
          <h2 class="text-2xl font-semibold text-center">What You'll Gain</h2>
          <ul class="mt-6 space-y-4">
            <li class="text-lg">Personalized insights into your life balance</li>
            <li class="text-lg">Practical tips for improvement</li>
            <li class="text-lg">Actionable steps to enhance your well-being</li>
          </ul>
          <div class="mt-6 text-center">
            <p class="text-green-600 dark:text-green-400 font-semibold">90% of users found actionable insights</p>
          </div>
        </section>

        <section class="text-center my-10">
          <button @click="scrollToQuiz" class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 dark:hover:bg-green-500 transition-all duration-200">
            Start the Quiz Now
          </button>
        </section>
      </main>

      <div class="fixed bottom-4 right-4">
        <button @click="shareQuiz" class="bg-blue-600 dark:bg-blue-800 text-white px-2 py-1 rounded-full shadow-lg hover:bg-blue-700 dark:hover:bg-blue-700 transition-all duration-200 text-sm font-semibold text-pretty">
          Enjoying this? Share with friends to compare your results!
        </button>
      </div>

      <div ref="quizSection" class="p-2 mt-10">
        <LifeBalanceQuiz />
      </div>

        <footer class="text-center py-6 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
            <p class="text-lg">© 2025 Life Balance Quiz. All rights reserved.</p>
            <!-- Create By -->
            <p class="text-lg">Designed with <span class="text-red-900 dark:text-red-600"> &hearts;</span> by <a href="https://shakiltech.com?utm_source=life_quiz" class="text-blue-600 dark:text-blue-400 font-semibold">Shakil Alma</a></p>
        </footer>


    </div>
  </template>

  <script lang="ts">
  import { defineComponent, ref } from 'vue';
  import LifeBalanceQuiz from '@/Components/LifeBalanceQuiz.vue';

  export default defineComponent({
    name: 'Welcome',
    components: {
      LifeBalanceQuiz,
    },
    setup() {
      const quizSection = ref<HTMLElement | null>(null);

      const scrollToQuiz = () => {
        if (quizSection.value) {
          quizSection.value.scrollIntoView({ behavior: 'smooth' });
        }
      };

      const shareQuiz = () => {
        if (navigator.share) {
          navigator.share({
            title: 'Life Balance Quiz',
            text: 'Check out this Life Balance Quiz!',
            url: window.location.href,
          }).catch(console.error);
        } else {
          alert('Sharing is not supported in this browser.');
        }
      };

      return {
        quizSection,
        scrollToQuiz,
        shareQuiz,
      };
    },
  });
  </script>

  <style scoped>
  .progress {
    stroke-linecap: round;
    transform-origin: center;
    transition: stroke-dasharray 0.5s;
  }

  .progress-text {
    text-anchor: middle;
  }
  </style>