<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import BlogLayout from "@/Layouts/BlogLayout.vue";

const title = "Privacy Policy";
const description = "Read our Privacy Policy to learn how we collect, use, and protect your data.";
const url = "https://life-balance-quiz.shakiltech.com/privacy-policy";
const image = "https://ui-avatars.com/api/?name=Privacy+Policy&background=007bff&color=ffffff&size=512";
const keywords = "privacy policy, data protection, personal information, security, privacy";

</script>

<template>
  <BlogLayout>
    <Head>
      <title>{{ title }}</title>
      <meta head-key="description" name="description" :content="description" />
      <meta head-key="keywords" name="keywords" :content="keywords" />
      <meta head-key="author" name="author" content="Shakil Alam" />
      <meta head-key="robots" name="robots" content="index, follow" />

      <meta head-key="og:title" property="og:title" :content="title" />
      <meta head-key="og:description" property="og:description" :content="description" />
      <meta head-key="og:url" property="og:url" :content="url" />
      <meta head-key="og:type" property="og:type" content="article" />
      <meta head-key="og:image" property="og:image" :content="image" />

      <meta head-key="twitter:card" name="twitter:card" content="summary_large_image" />
      <meta head-key="twitter:title" name="twitter:title" :content="title" />
      <meta head-key="twitter:description" name="twitter:description" :content="description" />
      <meta head-key="twitter:image" name="twitter:image" :content="image" />
      <meta head-key="twitter:creator" name="twitter:creator" content="@itxshakil" />
    </Head>

    <header class="bg-blue-500 dark:bg-blue-600 text-white py-12">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-3xl md:text-5xl font-semibold">Privacy Policy</h1>
        <p class="mt-4 text-lg md:text-2xl">How we handle your personal data and protect your privacy</p>
      </div>
    </header>

    <main class="max-w-4xl mx-auto py-12 px-4 dark:bg-gray-900 dark:text-white">
      <section class="mb-8">
        <p class="text-lg mb-4">At Life Balance Quiz, we take your privacy seriously. This Privacy Policy explains how we collect, use, and safeguard your personal information. By using our website and services, you agree to the terms outlined in this policy.</p>
      </section>

      <!-- Information We Collect -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Information We Collect</h2>
        <p class="text-lg mb-4">We collect the following types of information to provide and improve our services:</p>
        <ul class="list-disc ml-6">
          <li class="text-lg">Personal Information: When you sign up for our services or contact us, we may collect your name, email address, and other contact details.</li>
          <li class="text-lg">Usage Data: We collect information about how you interact with our website, including IP address, browser type, and pages visited.</li>
          <li class="text-lg">Cookies: We use cookies to enhance your experience on our website. Cookies are small files stored on your device that help us remember your preferences and provide personalized content.</li>
        </ul>
      </section>

      <!-- How We Use Your Information -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">How We Use Your Information</h2>
        <p class="text-lg mb-4">We use your personal data for the following purposes:</p>
        <ul class="list-disc ml-6">
          <li class="text-lg">To provide and personalize our services.</li>
          <li class="text-lg">To communicate with you about your account or updates to our services.</li>
          <li class="text-lg">To improve our website and services based on your usage data.</li>
          <li class="text-lg">To analyze trends and monitor the effectiveness of our content.</li>
        </ul>
      </section>

      <!-- Data Security -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Data Security</h2>
        <p class="text-lg mb-4">We implement industry-standard security measures to protect your personal information from unauthorized access, alteration, or disclosure. While we strive to protect your data, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
      </section>

      <!-- Your Rights -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Your Rights</h2>
        <p class="text-lg mb-4">You have the right to:</p>
        <ul class="list-disc ml-6">
          <li class="text-lg">Access the personal information we hold about you.</li>
          <li class="text-lg">Request corrections or updates to your information.</li>
          <li class="text-lg">Request deletion of your personal data.</li>
          <li class="text-lg">Opt out of marketing communications.</li>
        </ul>
        <p class="text-lg mb-4">To exercise any of these rights, please contact us at [insert contact email].</p>
      </section>

      <!-- Third-Party Services -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Third-Party Services</h2>
        <p class="text-lg mb-4">We may share your information with trusted third-party service providers who help us operate our services, such as payment processors or marketing partners. These third parties are obligated to protect your information and may not use it for any other purposes.</p>
      </section>

      <!-- Changes to This Privacy Policy -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Changes to This Privacy Policy</h2>
        <p class="text-lg mb-4">We may update this Privacy Policy from time to time. When we do, we will post the updated policy on this page with the date of the latest revision. Please review this policy periodically to stay informed about how we protect your data.</p>
      </section>

      <!-- Contact Us -->
      <section class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 dark:text-blue-400 mb-4">Contact Us</h2>
        <p class="text-lg mb-4">If you have any questions or concerns about this Privacy Policy or how we handle your data, please reach out to us at [insert contact email].</p>
      </section>

      <!-- Conclusion -->
      <section class="mb-8">
        <p class="text-lg mb-4">Your privacy is important to us, and we are committed to protecting your personal information. Thank you for trusting us with your data, and we will continue to prioritize your privacy as we grow and evolve our services.</p>
      </section>

    </main>

  </BlogLayout>

</template>