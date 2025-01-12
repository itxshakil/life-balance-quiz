<script setup lang="ts">
import {Head} from "@inertiajs/vue3";
import PostCard from "@/Components/PostCard.vue";
import QuizFloatingButton from "@/Components/QuizFloatingButton.vue";
import BlogLayout from "@/Layouts/BlogLayout.vue";

const title = "Feeling Disconnected? Rebuild Stronger Relationships with These 5 Tips";
const description = "Is life feeling busy and lonely? Learn 5 actionable tips to strengthen your friendships and family bonds. Reconnect, rebuild trust, and feel the joy of strong relationships again!";
const url = "/blogs/building-stronger-relationships";
const image = "https://ui-avatars.com/api/?name=Feeling+Disconnected?+Rebuild+Stronger+Relationships+with+These+5+Tips&background=007bff&color=ffffff&size=512";
const keywords = "relationships, friendships, family bonds, communication, trust, strengthen relationships";

const relatedPosts = [
  {
    title: "How to Manage Stress: Simple Techniques for Calmer Days",
    description: "Feeling overwhelmed? Learn simple techniques to manage stress, improve focus, and find peace of mind.",
    link: "/blogs/how-to-manage-stress",
  },
  {
    title: "Create Lasting Happiness: Practical Strategies for Everyday Joy",
    description: "Discover the secrets to lasting happiness! Explore practical strategies to cultivate joy, build resilience, and find fulfillment in your life.",
    link: "/blogs/create-lasting-happiness",
  },
  {
    title: "Work-Life Balance Tips: Strategies for a Fulfilling Life",
    description: "Feeling burnt out? Learn effective strategies to achieve a healthy work-life balance and create a life you love.",
    link: "/blogs/work-life-balance-tips",
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
        <h1 class="text-3xl md:text-5xl font-semibold">Building Stronger Relationships: 5 Actionable Tips to Improve Your Friendships and Family Bonds</h1>
        <p class="mt-4 text-lg md:text-2xl">The foundation of a happy life is solid, meaningful relationships</p>
      </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto py-12 px-4 dark:bg-gray-900 dark:text-white">

      <!-- Introduction -->
      <section class="mb-8">
        <p class="text-lg mb-4">We all know that relationships are the heart of a fulfilling life. Whether it's spending time with family or bonding with friends, the quality of these relationships impacts everything from our happiness to our mental health. But let’s be real—relationships take effort. They require attention, nurturing, and sometimes, a bit of work.</p>
        <p class="text-lg">If you’ve been feeling like some of your relationships could use a little TLC, don’t worry—you're not alone. In this post, we’ll walk through 5 actionable tips that will help you strengthen your friendships and family bonds. These steps are simple but effective, and they can lead to deeper connections with the people who matter most to you.</p>
      </section>

      <!-- Step 1: Make Time for Meaningful Conversations -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 1: Make Time for Meaningful Conversations—Listen and Share</h2>
        <p class="text-lg mb-4">In the hustle and bustle of daily life, it's easy to let quality conversations slip through the cracks. But truly connecting with others requires time and attention. It’s not just about talking—it’s about listening, understanding, and being present in the moment.</p>
        <p class="text-lg mb-4">A quick text or a fleeting "How’s it going?" doesn’t cut it when you're trying to build a meaningful bond. Take the time to have real, heartfelt conversations with the people you care about. Ask them how they’re really doing and share what’s going on in your own life too.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Set aside at least 15 minutes every day to talk with a friend or family member—no distractions, just genuine conversation. Make it a habit, and you’ll feel the connection grow.</p>
      </section>

      <!-- Step 2: Show Appreciation Regularly -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 2: Show Appreciation Regularly—Let Them Know You Care</h2>
        <p class="text-lg mb-4">Everyone loves to feel appreciated. Whether it's your best friend, your sibling, or your partner, expressing gratitude can strengthen your bond. A simple "thank you" or acknowledging something thoughtful they've done can go a long way.</p>
        <p class="text-lg mb-4">Don’t just wait for special occasions to show appreciation—make it a regular part of your relationship. Small, consistent gestures of kindness can turn a good relationship into a great one.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Once a week, express gratitude to someone you care about. Send a thoughtful text, write a handwritten note, or just tell them how much you appreciate them in person. It will make a huge difference.</p>
      </section>

      <!-- Step 3: Prioritize Quality Time Together -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 3: Prioritize Quality Time Together—Be Fully Present</h2>
        <p class="text-lg mb-4">Spending time with the people you care about is one of the best ways to build stronger relationships. But it’s not just about the time—it’s about how you spend it. Are you fully engaged in the moment, or are you distracted by your phone, work, or other responsibilities?</p>
        <p class="text-lg mb-4">Quality time doesn’t need to be grand or expensive—it’s about being present, whether you're having dinner together, taking a walk, or just hanging out. Make a conscious effort to be engaged, put away distractions, and focus on enjoying each other's company.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Set a regular date night with your partner or a catch-up time with a friend. No phones, no distractions—just quality time together. Start with once a week, and watch how your bond strengthens.</p>
      </section>

      <!-- Step 4: Support Each Other Through Tough Times -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 4: Support Each Other Through Tough Times—Be Their Rock</h2>
        <p class="text-lg mb-4">We all face tough times—whether it’s a personal challenge, a career setback, or a family crisis. The best relationships are the ones where both parties are there for each other through the highs and lows.</p>
        <p class="text-lg mb-4">When someone close to you is going through a difficult time, show them you’re there to support them. This can be through listening, offering help, or simply being there when they need you most.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Reach out to a friend or family member who may be going through a tough time. Offer your support, whether it's a listening ear or lending a hand. Small acts of support can mean the world to someone.</p>
      </section>

      <!-- Step 5: Set Healthy Boundaries -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-green-500 dark:text-green-400 mb-4">Step 5: Set Healthy Boundaries—Respect Each Other’s Space</h2>
        <p class="text-lg mb-4">It may sound counterintuitive, but setting boundaries is actually a crucial part of building stronger relationships. Healthy boundaries help protect both your time and energy, ensuring you can show up fully for the people you care about without feeling overwhelmed.</p>
        <p class="text-lg mb-4">Setting boundaries also means respecting the space and needs of others. It’s okay to say no sometimes, and it’s important to communicate your needs clearly and respectfully. This creates mutual respect and helps the relationship grow in a healthy direction.</p>
        <p class="text-lg font-semibold">Actionable Tip:</p>
        <p class="text-lg">Take some time to reflect on your boundaries—both yours and others'. Practice saying no when necessary, and be honest about what you need to feel respected and supported.</p>
      </section>

      <!-- Conclusion -->
      <section>
        <p class="text-lg mb-4">Building stronger relationships takes time and effort, but the rewards are worth it. By following these 5 actionable tips—making time for meaningful conversations, showing appreciation, prioritizing quality time, supporting each other, and setting healthy boundaries—you’ll cultivate deeper, more fulfilling connections with your friends and family.</p>
        <p class="text-lg">Remember, it’s not about being perfect—it’s about showing up, being present, and putting in the effort. Start with one tip today, and see how it transforms your relationships.</p>
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
