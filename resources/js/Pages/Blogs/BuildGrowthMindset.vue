<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PostCard from "@/Components/PostCard.vue";
import QuizFloatingButton from "@/Components/QuizFloatingButton.vue";
import BlogLayout from "@/Layouts/BlogLayout.vue";

const title = "Unlock Your Potential: 5 Simple Steps to Cultivate a Growth Mindset";
const description = "Feeling stuck? Discover how a growth mindset can transform challenges into opportunities. Learn 5 easy steps to embrace obstacles and achieve success!";
const url = "https://life-balance-quiz.shakiltech.com/blogs/how-to-cultivate-a-growth-mindset";
const image = "https://ui-avatars.com/api/?name=Unlock+Your+Potential:+5+Simple+Steps+to+Cultivate+a+Growth+Mindset&background=007bff&color=ffffff&size=512";
const keywords = "growth mindset, personal development, overcoming challenges, embracing obstacles, success strategies";

const relatedPosts = [
  {
    title: "Mental Health Tips: 7 Actionable Steps to Boost Your Mind",
    description: "Feeling overwhelmed? Learn simple techniques to manage stress, anxiety, and improve your overall well-being. Discover 7 actionable steps for better mental health!",
    link: "/blogs/mental-health-tips",
  },
  {
    title: "Personal Growth Hacks: Simple Changes for Big Results",
    description: "Learn easy-to-implement growth hacks that can have a huge impact on your personal development journey.",
    link: "/blogs/personal-growth-hacks",
  },
  {
    title: "Finding Your Life Purpose: Uncover Your Passions and Create a Fulfilling Life",
    description: "Feeling lost? Discover a step-by-step guide to find your life purpose and create a meaningful path for yourself.",
    link: "/blogs/finding-your-life-purpose", // Adjust link based on actual route name
  },
];
</script>

<template>
  <BlogLayout>
    <Head>
      <title>{{ title }}</title>
      <!-- Meta Tags -->
      <meta head-key="description" name="description" :content="description" />
      <meta head-key="keywords" name="keywords" :content="keywords" />
      <meta head-key="autor" name="author" content="Shakil Alam" />
      <meta head-key="robots" name="robots" content="index, follow" />

      <!-- Open Graph Tags -->
      <meta head-key="og:title" property="og:title" :content="title" />
      <meta head-key="og:description" property="og:description" :content="description" />
      <meta head-key="og:url" property="og:url" :content="url" />
      <meta head-key="og:type" property="og:type" content="article" />
      <meta head-key="og:image" property="og:image" :content="image" />

      <!-- Twitter Card Tags -->
      <meta head-key="twitter:card" name="twitter:card" content="summary_large_image" />
      <meta head-key="twitter:title" name="twitter:title" :content="title" />
      <meta head-key="twitter:description" name="twitter:description" :content="description" />
      <meta head-key="twitter:image" name="twitter:image" :content="image" />
      <meta head-key="twitter:creator" name="twitter:creator" content="@itxshakil" />
    </Head>

    <header class="bg-green-500 dark:bg-green-600 text-white py-12">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-3xl md:text-5xl font-semibold">How to Cultivate a Growth Mindset: 5 Simple Steps to Embrace Challenges</h1>
        <p class="mt-4 text-lg md:text-2xl">Turn obstacles into opportunities with the power of a growth mindset.</p>
      </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto py-12 px-4 dark:bg-gray-900 dark:text-white">

      <!-- Introduction -->
      <section class="mb-8">
        <p class="text-lg mb-4">Have you ever faced a challenge and thought, “I’m just not good at this” or “I’ll never figure this out”? You’re not alone. Many of us have moments where self-doubt creeps in. But what if you could flip that narrative and see challenges as opportunities to learn and grow?</p>
        <p class="text-lg">That’s the power of a growth mindset. Unlike a fixed mindset, which sees abilities as unchangeable, a growth mindset embraces the idea that we can improve with effort and learning. Ready to cultivate a mindset that thrives on challenges? Let’s explore 5 simple steps to get started.</p>
      </section>

      <!-- Step 1: Embrace Challenges -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 1: Embrace Challenges</h2>
        <p class="text-lg mb-4">Challenges are often seen as obstacles, but in reality, they’re opportunities in disguise. When you face a difficult task or situation, it’s a chance to push your boundaries and learn something new.</p>
        <p class="text-lg mb-4">Instead of shying away from challenges, approach them with curiosity and determination. Remember, growth happens outside of your comfort zone.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Identify one challenge you’re currently avoiding. Take the first step toward tackling it, even if it’s small. Celebrate the fact that you’re stepping out of your comfort zone.</p>
      </section>

      <!-- Step 2: Learn from Failure -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 2: Learn from Failure</h2>
        <p class="text-lg mb-4">Failure isn’t the end—it’s a stepping stone to success. Each failure provides valuable lessons and insights that can help you improve. By shifting your perspective on failure, you can turn setbacks into setups for growth.</p>
        <p class="text-lg mb-4">The key is to focus on what you can learn rather than what went wrong.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Reflect on a recent failure. Write down three lessons you learned from the experience and how you can apply them moving forward.</p>
      </section>

      <!-- Step 3: Cultivate a Love for Learning -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 3: Cultivate a Love for Learning</h2>
        <p class="text-lg mb-4">People with a growth mindset see learning as a lifelong journey. Instead of focusing solely on outcomes, they value the process of gaining knowledge and skills.</p>
        <p class="text-lg mb-4">When you prioritize learning over perfection, you’ll find joy in the process and develop resilience in the face of challenges.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Choose a new skill or topic you’ve always wanted to learn. Dedicate 15 minutes a day to studying or practicing it. Celebrate your progress, no matter how small.</p>
      </section>

      <!-- Step 4: Use the Power of “Yet” -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 4: Use the Power of “Yet”</h2>
        <p class="text-lg mb-4">The word “yet” is a game-changer when it comes to mindset. Instead of saying, “I can’t do this,” try saying, “I can’t do this *yet*.” This small shift in language reinforces the belief that your abilities can grow with time and effort.</p>
        <p class="text-lg mb-4">The next time you face a challenge, remind yourself that you’re on a learning journey—it’s not about where you are now, but where you’re headed.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Write down one thing you’re struggling with. Add the word “yet” to your statement and reflect on the steps you can take to improve over time.</p>
      </section>

      <!-- Step 5: Surround Yourself with Growth-Minded People -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 5: Surround Yourself with Growth-Minded People</h2>
        <p class="text-lg mb-4">The people you spend time with can greatly influence your mindset. When you surround yourself with individuals who value growth, embrace challenges, and support your journey, you’re more likely to adopt those traits yourself.</p>
        <p class="text-lg mb-4">Find a community of like-minded individuals who inspire and challenge you to be your best self.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Join a group, club, or online community focused on personal growth. Share your journey and learn from others who are pursuing a growth mindset.</p>
      </section>

      <!-- Conclusion -->
      <section>
        <p class="text-lg mb-4">Cultivating a growth mindset takes time and effort, but the rewards are worth it. By embracing challenges, learning from failure, and focusing on continuous growth, you’ll unlock your full potential and approach life with newfound confidence and resilience.</p>
        <p class="text-lg">Start small, stay consistent, and remember: growth is a journey, not a destination. You’ve got this!</p>
      </section>

      <!-- Related Posts -->
      <section class="mt-12">
        <h3 class="text-2xl font-semibold mb-4">Related Posts</h3>
        <ul class="space-y-4">
          <li>
            <a href="/post/1" class="text-blue-600 dark:text-blue-400 hover:underline">
              7 Tips to Improve Communication with Loved Ones
            </a>
          </li>
          <li>
            <a href="/post/2" class="text-blue-600 dark:text-blue-400 hover:underline">
              How to Build Trust in Relationships
            </a>
          </li>
          <li>
            <a href="/post/3" class="text-blue-600 dark:text-blue-400 hover:underline">
              10 Activities to Strengthen Family Bonds
            </a>
          </li>
        </ul>
      </section>

      <!-- Related Blogs -->
      <section class="mt-16">
        <h2 class="text-3xl font-semibold text-center text-blue-500 dark:text-blue-400 mb-8">Related Blog Posts</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <PostCard
              v-for="(post, index) in relatedPosts"
              :key="index"
              :title="post.title"
              :description="post.description"
              :link="post.link"
              :class="{  'last:lg:col-span-2' :  relatedPosts.length % 2 !== 0}"
          />
        </div>
      </section>
    </main>

  </BlogLayout>
</template>
