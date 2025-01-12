<script setup lang="ts">
import {Head} from "@inertiajs/vue3";
import PostCard from "@/Components/PostCard.vue";
import QuizFloatingButton from "@/Components/QuizFloatingButton.vue";
import BlogLayout from "@/Layouts/BlogLayout.vue";

const title = "How to Stay Fit & Healthy: 10 Simple Tips for a Balanced Life";
const description = "Feeling sluggish and out of shape? Discover 10 easy-to-implement tips to boost your energy, improve your health, and feel your best!";
const url = "https://life-balance-quiz.shakiltech.com/blogs/how-to-stay-fit-and-healthy";
const image = "https://ui-avatars.com/api/?name=How+to+Stay+Fit+and+Healthy:+10+Simple+Tips+for+a+Balanced+Life&background=007bff&color=ffffff&size=512";
const keywords = "fitness, health, healthy lifestyle, weight management, energy levels, diet, exercise, well-being";

const relatedPosts = [
  {
    title: "Mind-Body Connection: Steps to Holistic Health",
    description: "Explore the powerful connection between mind and body. Learn how to optimize both for overall well-being.",
    link: "/blogs/mind-body-connection-steps-to-health",
  },
  {
    title: "Work-Life Balance Tips: Regain Control of Your Time",
    description: "Feeling overwhelmed? Discover strategies to achieve a healthy work-life balance and prioritize your well-being.",
    link: "/blogs/work-life-balance-tips",
  },
  {
    title: "How to Manage Stress: Proven Techniques for Inner Calm",
    description: "Feeling stressed and overwhelmed? Learn practical techniques to manage stress, reduce anxiety, and find inner peace.",
    link: "/blogs/how-to-manage-stress",
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
      <h1 class="text-3xl md:text-5xl font-semibold">How to Stay Fit and Healthy: 10 Simple Tips for a Balanced Lifestyle</h1>
      <p class="mt-4 text-lg md:text-2xl">Staying fit and healthy doesn’t have to be complicated. It’s about small, consistent choices that add up!</p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-4xl mx-auto py-12 px-4 dark:bg-gray-900 dark:text-white">

    <!-- Introduction -->
    <section class="mb-8">
      <p class="text-lg mb-4">We all want to feel energized, strong, and healthy. But with busy lives, it’s easy to neglect our health, thinking we don’t have enough time or resources to make a real change. The good news? You don’t need to overhaul your entire life to stay fit and healthy.</p>
      <p class="text-lg">Staying in shape is all about consistency. Small, simple changes to your daily routine can have a huge impact on your overall health. Whether you’re just starting your fitness journey or looking for ways to improve your current habits, these 10 tips will help you lead a more balanced and healthy lifestyle.</p>
    </section>

    <!-- Step 1: Move Your Body Every Day -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 1: Move Your Body Every Day—It Doesn’t Have to Be Intense</h2>
      <p class="text-lg mb-4">When we think about staying fit, the first thing that comes to mind might be grueling workouts at the gym. But the truth is, staying active doesn’t always mean intense exercise. The key is consistency.</p>
      <p class="text-lg mb-4">Try to incorporate movement into your daily routine, even if it’s a short walk around the block or stretching for a few minutes. The more you move, the better you’ll feel.</p>
      <p class="text-lg font-semibold">Actionable Tip:</p>
      <p class="text-lg">Commit to a daily activity, whether it’s a brisk 10-minute walk, yoga, or a short workout at home. Aim to make movement a non-negotiable part of your day.</p>
    </section>

    <!-- Step 2: Eat a Balanced Diet -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 2: Eat a Balanced Diet—Fuel Your Body with What It Needs</h2>
      <p class="text-lg mb-4">What you eat plays a huge role in how you feel. A balanced diet filled with fruits, vegetables, lean proteins, and whole grains will provide your body with the nutrients it needs to stay energized and healthy.</p>
      <p class="text-lg mb-4">Remember, it’s not about dieting; it’s about making healthier food choices. Small swaps can make a big difference. Opt for water over sugary drinks, or add an extra serving of vegetables to your meals.</p>
      <p class="text-lg font-semibold">Actionable Tip:</p>
      <p class="text-lg">Try to fill half of your plate with vegetables at every meal. It’s an easy way to ensure you’re getting more nutrients without making any drastic changes to your diet.</p>
    </section>

    <!-- Step 3: Drink Plenty of Water -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 3: Drink Plenty of Water—Stay Hydrated</h2>
      <p class="text-lg mb-4">Water is essential for nearly every bodily function. Staying hydrated helps regulate body temperature, supports digestion, and keeps your skin looking great. Plus, it’s a simple and free way to boost your energy levels throughout the day.</p>
      <p class="text-lg mb-4">If you’re someone who often forgets to drink water, try carrying a reusable water bottle with you. Setting reminders or incorporating water into your daily routine will help keep you on track.</p>
      <p class="text-lg font-semibold">Actionable Tip:</p>
      <p class="text-lg">Aim to drink at least 8 glasses of water a day. You can even add some lemon or mint for a refreshing twist if plain water isn’t your thing.</p>
    </section>

    <!-- Step 4: Prioritize Sleep -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 4: Prioritize Sleep—Your Body Needs Rest to Thrive</h2>
      <p class="text-lg mb-4">Sleep is when your body repairs itself, so skimping on sleep can have serious effects on your health. Aim for 7-9 hours of quality sleep each night to help restore your energy, improve mental clarity, and support overall well-being.</p>
      <p class="text-lg mb-4">If sleep is a challenge, try setting a consistent bedtime, avoiding screens before bed, and creating a relaxing pre-sleep routine. A good night’s sleep can make a world of difference in how you feel the next day.</p>
      <p class="text-lg font-semibold">Actionable Tip:</p>
      <p class="text-lg">Create a relaxing bedtime routine to wind down before sleep. Consider reading, meditating, or taking a warm bath to help signal to your body that it’s time to rest.</p>
    </section>

    <!-- Step 5: Manage Stress -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 5: Manage Stress—It’s Key to Staying Healthy</h2>
      <p class="text-lg mb-4">Stress is inevitable, but how you manage it can make all the difference in your health. Chronic stress can lead to various health issues, including high blood pressure, weight gain, and weakened immunity.</p>
      <p class="text-lg mb-4">Find healthy ways to cope with stress, such as deep breathing, meditation, or engaging in activities you enjoy. Regular exercise is also a great way to reduce stress and improve your mood.</p>
      <p class="text-lg font-semibold">Actionable Tip:</p>
      <p class="text-lg">Take 5 minutes a day to practice deep breathing. Inhale slowly for 4 counts, hold for 4 counts, then exhale for 4 counts. This simple technique can help lower stress levels and promote relaxation.</p>
    </section>

    <!-- Step 6: Include Strength Training -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 6: Include Strength Training—Build Lean Muscle</h2>
      <p class="text-lg mb-4">Strength training isn’t just for bodybuilders—it’s an essential part of staying healthy. Building muscle helps increase metabolism, improve posture, and reduce the risk of injury as you age.</p>
      <p class="text-lg mb-4">You don’t need to lift heavy weights to get the benefits. Bodyweight exercises like squats, push-ups, and lunges can be just as effective. Start with what you can manage, and gradually increase the intensity over time.</p>
      <p class="text-lg font-semibold">Actionable Tip:</p>
      <p class="text-lg">Try to incorporate at least 2-3 days of strength training into your weekly routine. Start with bodyweight exercises, then gradually introduce weights as you feel stronger.</p>
    </section>

    <!-- Step 7: Stay Consistent -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 7: Stay Consistent—Small Changes Lead to Big Results</h2>
      <p class="text-lg mb-4">Consistency is key when it comes to staying fit and healthy. Rather than focusing on quick fixes, aim for small, sustainable changes that you can stick to in the long term.</p>
      <p class="text-lg mb-4">Tracking your progress and celebrating small wins along the way can help keep you motivated. Remember, every step forward counts, no matter how small it may seem.</p>
      <p class="text-lg font-semibold">Actionable Tip:</p>
      <p class="text-lg">Set realistic health goals and track your progress. Whether it’s increasing the number of steps you take each day or eating more vegetables, celebrate the small victories!</p>
    </section>

    <!-- Step 8: Be Kind to Yourself -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 8: Be Kind to Yourself—Embrace the Journey</h2>
      <p class="text-lg mb-4">Health is a lifelong journey, not a destination. You’ll have good days and bad days, and that’s okay. It’s important to be kind to yourself along the way and recognize that progress doesn’t happen overnight.</p>
      <p class="text-lg mb-4">Focus on the positive changes you’ve made and remember that every day is an opportunity to take care of your body and mind.</p>
      <p class="text-lg font-semibold">Actionable Tip:</p>
      <p class="text-lg">When you make a mistake or fall off track, don’t beat yourself up. Treat yourself with the same compassion you’d show a friend, and get back on track without guilt.</p>
    </section>

    <!-- Conclusion -->
    <section>
      <p class="text-lg mb-4">Staying fit and healthy doesn’t have to be overwhelming. By incorporating these 10 simple tips into your daily routine, you’ll be on your way to a balanced, healthy lifestyle that brings more energy, vitality, and joy to your life.</p>
      <p class="text-lg">Remember, health is about consistency and making small, sustainable choices that work for you. Start today, and take it one step at a time. You’ve got this!</p>
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
