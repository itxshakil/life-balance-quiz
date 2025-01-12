<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PostCard from "@/Components/PostCard.vue";
import BlogLayout from "@/Layouts/BlogLayout.vue";

const title = "How to Improve Your Mental Health: 7 Actionable Steps to Boost Your Mind";
const description = "Feeling overwhelmed or stressed? Don't let mental health hold you back! Discover 7 practical tips to manage anxiety, boost mood, and feel your best.";
const url = "https://life-balance-quiz.shakiltech.com/blogs/";
const image = "https://ui-avatars.com/api/?name=Recent+Blog+Posts&background=007bff&color=ffffff&size=512";
const keywords = "mental health, improve mental health, stress management, mindfulness, self-care, mental wellness, mental health tips";

const blogs = [
  {
    title: "How to Improve Your Mental Health: 7 Actionable Steps to Boost Your Mind",
    description:
        "Feeling overwhelmed or stressed? Discover 7 practical tips to manage anxiety, boost mood, and feel your best.",
    link: "/blogs/mental-health-tips",
    meta: {
      title: "7 Actionable Steps to Improve Mental Health | Life Balance Blog",
      description:
          "Transform your mental well-being with 7 actionable tips to manage stress, reduce anxiety, and elevate your mood today. Your mental health matters!",
    },
  },
  {
    title: "Personal Growth Hacks: Simple Changes for Big Results",
    description:
        "Learn easy-to-implement growth hacks that can have a huge impact on your personal development journey.",
    link: "/blogs/personal-growth-hacks",
    meta: {
      title: "Personal Growth Hacks for Big Results | Life Balance Blog",
      description:
          "Unlock your potential with practical growth hacks. Discover simple, impactful changes that will transform your life and boost personal success.",
    },
  },
  {
    title: "Boost Your Career Strategies",
    description:
        "Unleash your professional potential with actionable strategies that can skyrocket your career success.",
    link: "/blogs/boost-your-career-strategies",
    meta: {
      title: "Boost Your Career with Proven Strategies | Life Balance Blog",
      description:
          "Level up your career with expert tips and actionable strategies to achieve professional growth and success. Take charge of your future today.",
    },
  },
  {
    title: "Mind-Body Connection: Steps to Better Health",
    description:
        "Discover how a strong mind-body connection can improve your health and well-being.",
    link: "/blogs/mind-body-connection-steps-to-health",
    meta: {
      title: "Strengthen Your Mind-Body Connection | Life Balance Blog",
      description:
          "Improve your health by harnessing the power of the mind-body connection. Explore practical steps for holistic well-being.",
    },
  },
  {
    title: "Financial Freedom: 7 Steps to Take Control of Your Money",
    description:
        "Feeling stuck in a paycheck-to-paycheck cycle? Take charge of your finances with 7 actionable steps. Get out of debt, save for the future, and achieve financial freedom!",
    link: "/blogs/financial-freedom-tips",
  },
  {
    title: "Feeling Disconnected? Rebuild Stronger Relationships with These 5 Tips",
    description:
        "Is life feeling busy and lonely? Learn 5 actionable tips to strengthen your friendships and family bonds. Reconnect, rebuild trust, and feel the joy of strong relationships again!",
    link: "/blogs/building-stronger-relationships"
  },
  {
    title: "Finding Your Purpose: 6 Steps to Align Your Life with Your Core Values",
    description:
        "Feeling lost and unfulfilled? Discover a proven method to find your life purpose and create a life that feels meaningful and aligned.",
    link: "/blogs/finding-your-life-purpose",
    meta: {
      title: "How to Overcome Procrastination | Life Balance Blog",
      description:
          "Stop procrastinating and start achieving. Learn proven tips to improve focus, beat distractions, and accomplish your goals with ease.",
    },
  },
  {
    title: "How to Create Lasting Happiness: 5 Key Actions to Cultivate Joy Every Day",
    description:
        "Feeling stuck in a rut? Discover 5 key actions you can take every day to cultivate lasting happiness and bring more joy into your life.",
    link: "/blogs/create-lasting-happiness",
    meta: {
      title: "Transform Your Life with Gratitude | Life Balance Blog",
      description:
          "Unlock the life-changing power of gratitude. Learn how daily gratitude practices can bring joy, fulfillment, and positivity.",
    },
  },
  {
    title: "How to Stay Fit & Healthy: 10 Simple Tips for a Balanced Life",
    description:
        "Feeling sluggish and out of shape? Discover 10 easy-to-implement tips to boost your energy, improve your health, and feel your best!",
    link: "/blogs/how-to-stay-fit-and-healthy"
  },
  {
    title: "How to Balance Work and Life: 7 Practical Tips for Achieving Harmony",
    description:
        "Feeling overwhelmed? Juggling work and life can be tough. Discover 7 practical tips to achieve work-life balance and reclaim your sanity (and free time)!",
    link: "/blogs/work-life-balance-tips"
  },
  {
    title: "Achieving Spiritual Well-Being: 5 Actionable Practices for Connecting with Your Soul",
    description:
        "Feeling lost or disconnected? Discover 5 practical steps to reconnect with your inner self and cultivate a sense of peace and purpose.",
    link: "/blogs/achieving-spiritual-well-being"
  },
  {
    title: "How to Build a Morning Routine for Success: 6 Simple Steps to Start Your Day Right",
    description:
        "Ditch the snooze button and conquer your day!  This guide unveils 6 easy-to-follow steps to craft a powerful morning routine that sets you up for success and leaves you feeling energized.",
    link: "/blogs/how-to-build-a-morning-routine-for-success"
  },
  {
    title: "How to Manage Stress: 8 Practical Strategies for Finding Calm in the Chaos",
    description:
        "Feeling overwhelmed?   Learn 8 practical strategies to manage stress, find calm amidst the chaos, and boost your overall well-being. Take control and reclaim your peace today!",
    link: "/blogs/how-to-manage-stress"
  },
  {
    title: "How to Build Confidence: 7 Actionable Steps to Unleash Your Inner Power",
    description:
        "Feeling unsure of yourself? Discover 7 actionable steps to build unshakeable confidence and unlock your full potential. Stop holding yourself back and start thriving!",
    link: "/blogs/how-to-build-confidence"
  },
  {
    title: "Unlock Your Potential: 5 Simple Steps to Cultivate a Growth Mindset",
    description:
        "Feeling stuck? Discover how a growth mindset can transform challenges into opportunities. Learn 5 easy steps to embrace obstacles and achieve success!",
    link: "/blogs/how-to-cultivate-a-growth-mindset"
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
        <h1 class="text-3xl md:text-5xl font-semibold">Recent Blog Posts</h1>
        <p class="mt-4 text-lg md:text-2xl">Explore actionable tips and insights to transform your life.</p>
      </div>
    </header>

    <main class="max-w-4xl mx-auto py-12 px-4 dark:bg-gray-900 dark:text-white">
      <section>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <PostCard
              v-for="(blog, index) in blogs"
              :key="index"
              :title="blog.title"
              :description="blog.description"
              :link="blog.link"
          />
        </div>
      </section>
    </main>

  </BlogLayout>

</template>
