<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PostCard from "@/Components/PostCard.vue";
import QuizFloatingButton from "@/Components/QuizFloatingButton.vue";
import BlogLayout from "@/Layouts/BlogLayout.vue";

const title = "How to Improve Your Mental Health: 7 Actionable Steps to Boost Your Mind";
const description = "Feeling overwhelmed or stressed? Don't let mental health hold you back! Discover 7 practical tips to manage anxiety, boost mood, and feel your best.";
const url = "https://life-balance-quiz.shakiltech.com/blogs/mental-health-tips";
const image = "https://ui-avatars.com/api/?name=How+to+Improve+Your+Mental+Health:+7+Actionable+Steps+to+Boost+Your+Mind&background=007bff&color=ffffff&size=512";
const keywords = "mental health, improve mental health, stress management, mindfulness, self-care, mental wellness, mental health tips";

const relatedPosts = [
  {
    title: "Personal Growth Hacks: Simple Changes for Big Results",
    description: "Learn easy-to-implement growth hacks that can have a huge impact on your personal development journey.",
    link: "/blogs/personal-growth-hacks",
  },
  {
    title: "Financial Freedom Tips: Achieving a Debt-Free Life",
    description: "Discover practical tips for managing finances, getting out of debt, and building wealth for the future.",
    link: "/blogs/financial-freedom-tips",
  },
  {
    title: "Building Stronger Relationships: Tips to Improve Friendships & Family Bonds",
    description: "Strengthen your personal connections with actionable tips for building trust, empathy, and communication skills.",
    link: "/blogs/building-stronger-relationships",
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

    <header class="bg-blue-500 dark:bg-blue-600 text-white py-12">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-3xl md:text-5xl font-semibold">How to Improve Your Mental Health: 7 Actionable Steps to Boost Your Mind</h1>
        <p class="mt-4 text-lg md:text-2xl">Small steps can lead to big changes for your mental well-being</p>
      </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto py-12 px-4 dark:bg-gray-900 dark:text-white">

      <!-- Introduction -->
      <section class="mb-8">
        <p class="text-lg mb-4">Let’s be honest for a second—life can be overwhelming. We all hit those moments where we feel like we’re carrying the weight of the world on our shoulders. And it’s easy to think, *"Why is this happening to me?"* or worse, *"Why can’t I handle this?"*</p>
        <p class="text-lg">Here’s the thing: you’re not weak for struggling with your mental health. You’re human. Mental health isn’t about being perfect or having it all together—it's about how we handle life's challenges. So, if you’re feeling stressed, anxious, or just plain burnt out, take a deep breath. You’re not alone, and today we’re going to walk through 7 simple, actionable steps that will help you take back control and boost your mind.</p>
      </section>

      <!-- Step 1: Start Small -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Step 1: Start Small—It’s Okay to Take Baby Steps</h2>
        <p class="text-lg mb-4">Alright, let’s not kid ourselves. The thought of “improving your mental health” can sound pretty daunting. It’s like standing at the bottom of a mountain and wondering how on earth you’re going to climb it.</p>
        <p class="text-lg mb-4">But here’s the deal: You don’t have to summit Everest in one day. Start small. It’s the little things that add up to make a big difference. Maybe it’s taking a 5-minute break during your hectic day, drinking a glass of water, or stepping outside for a quick walk.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Commit to one small action today—just one. Whether it’s stepping outside for a breath of fresh air or simply sitting down to drink your favorite tea without checking your phone. It’s about momentum, not perfection.</p>
      </section>

      <!-- Step 2: Practice Mindfulness -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Step 2: Practice Mindfulness—Stop and Be Present in the Moment</h2>
        <p class="text-lg mb-4">Have you ever felt like your mind is running a marathon while your body’s still sitting on the couch? Same. And no, it’s not just you—it’s called *overthinking*.</p>
        <p class="text-lg mb-4">Mindfulness is your ticket out of that spiral. It’s all about being present in the moment, without the constant buzz of your thoughts pulling you in every direction. You don’t need to meditate for an hour (unless you’re into that, no judgment), but just focusing on your breath for a few minutes can reset your mind.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Next time you feel your thoughts racing, stop for 3 minutes. Focus on your breath. In through the nose, out through the mouth. Let your mind calm down—just for a few minutes.</p>
      </section>

      <!-- Step 3: Get Active -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Step 3: Get Active—Exercise is a Game-Changer for Your Mind</h2>
        <p class="text-lg mb-4">Here’s a little secret: moving your body is like hitting the "reset" button for your brain. You don’t have to run a marathon (unless that’s your thing), but moving, even just a little bit, helps release endorphins—the feel-good chemicals that make you feel like you’re on top of the world.</p>
        <p class="text-lg mb-4">So, let’s get physical. Stretch, walk, dance around your living room—just move.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Pick one form of exercise you enjoy and commit to doing it for 10 minutes tomorrow. It doesn’t have to be fancy—just move, and you’ll feel better.</p>
      </section>

      <!-- Step 4: Talk to Someone -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Step 4: Talk to Someone—Open Up, It’s Okay to Ask for Help</h2>
        <p class="text-lg mb-4">There’s a myth that asking for help makes you weak. Newsflash: it’s actually the opposite. Sharing your struggles with someone else not only lightens your load but also connects you to others who might be going through the same thing.</p>
        <p class="text-lg mb-4">Whether it’s a friend, family member, or even a professional, talking it out can be incredibly freeing.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Today, reach out to one person. Share how you’re feeling—whether it's a quick text to a friend or a call to a family member. Just opening up can make a world of difference.</p>
      </section>

      <!-- Step 5: Prioritize Rest -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Step 5: Prioritize Rest—Sleep and Recovery Are Essential for Mental Health</h2>
        <p class="text-lg mb-4">Okay, I get it—you’re busy. But here’s the thing: no matter how many tasks you tackle, if you’re not getting enough sleep, your mental health will take a hit. It’s like running a car without oil—it just doesn’t work in the long run.</p>
        <p class="text-lg mb-4">Rest is essential for your brain to recharge. So let’s get serious about sleep.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Aim for 7-8 hours of sleep tonight (yes, really). And before you hit the pillow, create a calming bedtime routine—no screens, just relaxation. Your brain will thank you.</p>
      </section>

      <!-- Step 6: Set Boundaries -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Step 6: Set Boundaries—Learn to Say ‘No’ and Protect Your Energy</h2>
        <p class="text-lg mb-4">We all want to please people, but sometimes saying "yes" to everything leaves us drained. Guess what? It’s okay to say “no.” In fact, it’s necessary.</p>
        <p class="text-lg mb-4">Setting boundaries isn’t about being rude; it’s about protecting your energy and making sure you have time for yourself.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Look at your schedule this week. Identify one thing you can say “no” to in order to protect your mental well-being. Your time is precious—don’t give it away freely.</p>
      </section>

      <!-- Step 7: Practice Gratitude -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Step 7: Practice Gratitude—Focus on the Positive, Even on Tough Days</h2>
        <p class="text-lg mb-4">Let’s face it: life can throw some curveballs. But instead of dwelling on what’s going wrong, try shifting your focus to what’s going *right*. Even on your toughest days, there’s always something to be grateful for.</p>
        <p class="text-lg mb-4">Gratitude isn’t just about writing things down—it’s about training your mind to see the good, even when life gets hard.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Tonight, take a moment and jot down three things you’re grateful for. They can be big or small—just focus on the positive and let it sink in.</p>
      </section>

      <!-- Conclusion -->
      <section class="mb-8">
        <p class="text-lg mb-4">Mental health isn’t about one big leap; it’s about consistent, small actions that add up over time. Don’t wait for the “perfect” moment to start improving your mental health—take that first step now.</p>
        <p class="text-lg mb-4">Remember, it’s okay to have tough days. What matters is that you keep moving forward, no matter how small the step may seem. You’ve got this.</p>
      </section>

      <!-- Call to Action -->
      <section class="text-center">
        <p class="text-lg mb-4">Feel inspired? Share this post with a friend who might need a little encouragement today. And if you’re looking for even more ways to improve your life balance, take our <a href="/" class="text-blue-600 underline">Life Balance Quiz</a> and get personalized tips tailored just for you!</p>
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
