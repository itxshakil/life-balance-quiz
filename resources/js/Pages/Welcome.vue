<template>
  <Head>
    <title>{{ title }}</title>

    <meta head-key="description" name="description" :content="description" />
    <meta head-key="keywords" name="keywords" :content="keywords" />
    <meta head-key="autor" name="author" content="Shakil Alam" />
    <meta head-key="robots" name="robots" content="index, follow" />

    <meta head-key="og:title" property="og:title" :content="title" />
    <meta head-key="og:description" property="og:description" :content="description" />
    <meta head-key="og:url" property="og:url" :content="url" />
    <meta head-key="og:type" property="og:type" content="website" />
    <meta head-key="og:image" property="og:image" :content="image" />

    <meta head-key="twitter:card" name="twitter:card" content="summary_large_image" />
    <meta head-key="twitter:title" name="twitter:title" :content="title" />
    <meta head-key="twitter:description" name="twitter:description" :content="description" />
    <meta head-key="twitter:image" name="twitter:image" :content="image" />
    <meta head-key="twitter:creator" name="twitter:creator" content="@itxshakil" />
  </Head>

  <div class="landing-page bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <header class="relative isolate px-6 pt-14 lg:px-8 dark:bg-gray-900 dark:text-white">
      <div class="mx-auto max-w-7xl py-32 sm:py-48 lg:py-56">
        <div class="text-center">
          <h1 class="text-4xl font-extrabold dark:text-white sm:text-5xl">
            🌟 Find Your Life Balance and Thrive
          </h1>
          <h2 class="mt-6 sm:text-lg leading-8 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
            Unlock the <strong>secrets to a more fulfilling life with personalized insights</strong>. Discover what’s holding you back and take the <strong>first step toward a brighter tomorrow!</strong>
          </h2>

          <div class="mt-10 flex items-center justify-center gap-x-6">
            <button
                class="px-10 py-5 mt-8 bg-gradient-to-r from-teal-400 to-green-600 text-white font-semibold text-lg rounded-lg shadow-xl hover:bg-green-700 dark:hover:bg-green-500 transition-all duration-300 transform hover:scale-105 animate-shake"
                @click="scrollToQuiz">
              Take the Quiz Now
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block ml-3 w-6 h-6 text-white animate-bounce" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 4v16m8-8l-8 8-8-8"></path>
              </svg>
            </button>
          </div>

          <div class="mt-8 text-lg text-gray-600 dark:text-gray-400">
            <p>Already know where you stand? Start your journey with just a click!</p>
          </div>
        </div>
      </div>
    </header>

    <main>
      <div ref="quizSection" class="p-2 mt-10">
        <LifeBalanceQuiz class="max-w-5xl mx-auto"/>
      </div>

      <section class="max-w-4xl md:mx-auto p-6 mx-2 rounded-lg text-center my-10">
        <h2 class="text-2xl font-semibold">🛠️ How It Works</h2>
        <p class="mt-4 text-lg text-pretty">Our Life Balance Quiz takes just a few minutes to complete. You’ll answer simple,
          thoughtful questions about different areas of your life. Based on your answers, we provide clear, actionable
          feedback to help you create a more fulfilling and balanced life.</p>
      </section>

      <section class="max-w-4xl md:mx-auto p-6 mx-2 rounded-lg text-center my-10">
        <h2 class="text-2xl font-semibold">💡 Why It Matters</h2>
        <p class="mt-4 text-lg text-pretty">Feeling overwhelmed or stuck in a routine? This quiz helps you reflect on what’s going
          well and what could use some love and attention. With this insight, you’ll be empowered to take small,
          meaningful steps toward a happier and healthier you.</p>
      </section>

      <section class="max-w-4xl md:mx-auto p-6 mx-2  rounded-lg text-center my-10">
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

      <section class="max-w-4xl md:mx-auto p-6 mx-2 rounded-lg text-center my-10">
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

    <section
        class="max-w-4xl md:mx-auto p-6 mx-2 rounded-lg text-center my-10 py-10">
      <div class="max-w-4xl mx-auto px-2">
        <h2 class="text-2xl font-semibold text-center">📣 What Others Are Saying</h2>
        <p class="mt-4 text-lg text-center">"This quiz helped me understand areas of my life I’d been ignoring. The tips
          were easy to follow, and I feel more balanced than ever!" - Sarah, 34</p>
        <p class="mt-4 text-lg text-center">"A fun and quick way to gain insight into my daily habits. Highly
          recommend!" - James, 27</p>
      </div>
    </section>

    <section class="max-w-6xl mx-auto py-16 px-4">
      <h2 class="text-3xl font-bold text-center mb-8">Featured Blog Posts</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <PostCard
            v-for="(post, index) in featuredPosts"
            :title="post.title"
            :description="post.description"
            :link="post.link"
            :key="index"
            />
      </div>
    </section>

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

    <Footer />
  </div>
</template>

<script lang="ts">
import {defineComponent, ref} from 'vue';
import {Head, Link} from '@inertiajs/vue3';
import LifeBalanceQuiz from '@/Components/LifeBalanceQuiz.vue';
import PostCard from "@/Components/PostCard.vue";
import Footer from "@/Layouts/Footer.vue";

export default defineComponent({
  name: 'Welcome',
  components: {
    Footer,
    Link,
    LifeBalanceQuiz,
    Head,
    PostCard
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

    const featuredPosts = ref([
      {
        title: 'Achieve Perfect Life Balance: Your Ultimate Step-by-Step Guide',
        description: 'Struggling to find life balance? Discover practical steps and tips to juggle your career, relationships, and personal growth with ease.',
        link: '/blogs/work-life-balance-tips',
      },
      {
        title: 'Boost Your Mental Clarity & Focus with These Simple Tips',
        description: 'Unlock your mental clarity with actionable mental health tips that enhance focus and reduce stress—your path to a sharper, more productive mind.',
        link: '/blogs/mental-health-tips',
      },
      {
        title: 'Balance Career Success and Personal Life: Your Guide to Harmony',
        description: 'Learn how to thrive in your career while maintaining a fulfilling personal life. Achieve career success without burnout with these strategies.',
        link: '/blogs/boost-your-career-strategies',
      }
    ]);

    const title = "Ready for a Happier You? Take the Life Balance Quiz Now!";
    const description = "Take the Life Balance Quiz to discover how balanced your life is across key areas like joy, health, and relationships. Get personalized insights and actionable steps to enhance your well-being.";
    const url = "https://life-balance-quiz.shakiltech.com";
    const image = "https://ui-avatars.com/api/?name=Life+Balance_Quiz&background=007bff&color=ffffff&size=512";
    const keywords = "mental health, improve mental health, stress management, mindfulness, self-care, mental wellness, mental health tips";

    return {
      quizSection,
      scrollToQuiz,
      shareQuiz,
      featuredPosts,
      title,
      description,
      url,
      image,
      keywords,
    };
  },
});
</script>

<style>
/* Shake Animation */
@keyframes shake {
  0% { transform: translateX(0); }
  25% { transform: translateX(-6px); }
  50% { transform: translateX(6px); }
  75% { transform: translateX(-6px); }
  100% { transform: translateX(0); }
}

.animate-shake {
  animation: shake 0.7s ease-in-out;
}
</style>
