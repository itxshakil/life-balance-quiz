<template>
  <Head title="Ready for a Happier You? Take the Life Balance Quiz Now!"/>
  <div class="landing-page bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">

    <!-- Hero Section -->
    <header class="text-center py-16 bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-500 text-white">
      <h1 class="text-4xl md:text-5xl font-extrabold">🌟 Find Your Life Balance</h1>
      <p class="mt-6 text-xl md:text-2xl text-pretty">Discover what’s holding you back and unlock actionable insights
        for a happier, healthier you.</p>
      <button
          class="px-8 py-4 mt-8 bg-green-600 text-white font-bold rounded-lg shadow-lg hover:bg-green-700 dark:hover:bg-green-500 transition-all duration-200"
          @click="scrollToQuiz">
        Take the Quiz Now
      </button>
    </header>

    <main>
      <!-- How It Works Section -->
      <section class="max-w-4xl md:mx-auto p-6 mx-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center my-10">
        <h2 class="text-2xl font-semibold">🛠️ How It Works</h2>
        <p class="mt-4 text-lg text-pretty">Our Life Balance Quiz takes just a few minutes to complete. You’ll answer simple,
          thoughtful questions about different areas of your life. Based on your answers, we provide clear, actionable
          feedback to help you create a more fulfilling and balanced life.</p>
      </section>

      <!-- Why It Matters Section -->
      <section class="max-w-4xl md:mx-auto p-6 mx-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center my-10">
        <h2 class="text-2xl font-semibold">💡 Why It Matters</h2>
        <p class="mt-4 text-lg text-pretty">Feeling overwhelmed or stuck in a routine? This quiz helps you reflect on what’s going
          well and what could use some love and attention. With this insight, you’ll be empowered to take small,
          meaningful steps toward a happier and healthier you.</p>
      </section>

      <!-- What You'll Gain Section -->
      <section class="max-w-4xl md:mx-auto p-6 mx-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center my-10">
        <h2 class="text-2xl font-semibold text-center">🎁 What You'll Gain</h2>
        <ul class="mt-6 space-y-4">
          <li class="text-lg">✨ A clear snapshot of your current life balance</li>
          <li class="text-lg">📝 Personalized tips to improve specific areas</li>
          <li class="text-lg">💪 Motivation to make positive changes</li>
        </ul>
        <div class="mt-6 text-center">
          <p class="text-green-600 dark:text-green-400 font-semibold">✅ 90% of our users feel inspired to take action
            after completing the quiz!</p>
        </div>
      </section>

      <!-- Start Your Journey Section -->
      <section class="max-w-4xl md:mx-auto p-6 mx-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center my-10">
        <h2 class="text-2xl font-semibold">🚀 Start Your Journey Today</h2>
        <p class="mt-4 text-lg">Your best life starts with understanding where you are right now. Let’s uncover your
          potential and create a roadmap for a more joyful and balanced life!</p>
        <button
            class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 dark:hover:bg-green-500 transition-all duration-200 mt-6"
            @click="scrollToQuiz">
          Take the Quiz Now
        </button>
      </section>

    </main>

    <!-- Testimonials Section -->
    <section
        class="max-w-4xl md:mx-auto p-6 mx-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center my-10 py-10">
      <div class="max-w-4xl mx-auto px-2">
        <h2 class="text-2xl font-semibold text-center">📣 What Others Are Saying</h2>
        <p class="mt-4 text-lg text-center">"This quiz helped me understand areas of my life I’d been ignoring. The tips
          were easy to follow, and I feel more balanced than ever!" - Sarah, 34</p>
        <p class="mt-4 text-lg text-center">"A fun and quick way to gain insight into my daily habits. Highly
          recommend!" - James, 27</p>
      </div>
    </section>

    <!-- Floating Share Button -->
    <div class="fixed bottom-6 right-6">
      <button
          class="inline-flex gap-2 items-center bg-blue-600 dark:bg-blue-800 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-700 dark:hover:bg-blue-700 transition-all duration-200 font-semibold"
          @click="shareQuiz">
        <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
             stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0h24v24H0z" fill="none" stroke="none"/>
          <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
          <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
          <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
          <path d="M8.7 10.7l6.6 -3.4"/>
          <path d="M8.7 13.3l6.6 3.4"/>
        </svg>
        <span>Share & Inspire</span>
      </button>
    </div>

    <!-- Quiz Section -->
    <div ref="quizSection" class="p-2 mt-10">
      <LifeBalanceQuiz/>
    </div>

    <footer class="text-center py-6 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
      <p class="text-lg">© 2025 Life Balance Quiz. All rights reserved.</p>
      <p class="text-lg">Designed with <span class="text-red-900 dark:text-red-600">&hearts;</span> by <a
          class="text-blue-600 dark:text-blue-400 font-semibold" href="https://shakiltech.com?utm_source=life_quiz">Shakil
        Alma</a></p>
    </footer>
  </div>
</template>

<script lang="ts">
import {defineComponent, ref} from 'vue';
import {Head} from '@inertiajs/vue3';
import LifeBalanceQuiz from '@/Components/LifeBalanceQuiz.vue';

export default defineComponent({
  name: 'Welcome',
  components: {
    LifeBalanceQuiz,
    Head
  },
  setup() {
    const quizSection = ref<HTMLElement | null>(null);

    const scrollToQuiz = () => {
      if (quizSection.value) {
        quizSection.value.scrollIntoView({behavior: 'smooth'});
      }
    };

    const shareQuiz = () => {
      if (navigator.share) {
        navigator.share({
          title: 'Life Balance Quiz',
          text: '✨ Take the Life Balance Quiz and unlock secrets to a happier, healthier you! 🚀 I don’t want to keep this awesome website to myself. I think you’ll love it too! Let’s take it together and see how we compare 🚀💡.',
          url: window.location.href,
        }).catch(console.error);
      } else {
        alert('Sharing is not supported in this browser.');
        navigator.clipboard.writeText(window.location.href);

        alert('URL copied to clipboard! Share it with your friends and inspire them to take the quiz 🚀💡.');
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