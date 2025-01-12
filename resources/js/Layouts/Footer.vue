<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

</script>

<template>
  <footer class="bg-blue-600 dark:bg-blue-800 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h3 class="text-lg font-bold mb-4">About Life Balance Blog</h3>
        <p class="text-sm">
          Your go-to source for practical tips and actionable advice on living a balanced and fulfilling life. We focus on relationships, mental health, and personal growth.
        </p>
      </div>

      <div>
        <h3 class="text-lg font-bold mb-4">Quick Links</h3>
        <ul class="space-y-2">
          <li>
            <Link :href="route('home')" class="hover:underline">Home</Link>
          </li>
          <li>
            <Link :href="route('blogs.index')" class="hover:underline">Latest Posts</Link>
          </li>
          <li>
            <Link :href="route('privacy-policy')" class="hover:underline">Privacy Policy</Link>
          </li>
        </ul>
      </div>

      <div>
        <h3 class="text-lg font-bold mb-4">Follow Us</h3>
        <ul class="flex space-x-4">
          <li>
            <a href="#" target="_blank" rel="noopener" class="hover:underline">
              Facebook
            </a>
          </li>
          <li>
            <a href="#" target="_blank" rel="noopener" class="hover:underline">
              Twitter
            </a>
          </li>
          <li>
            <a href="#" target="_blank" rel="noopener" class="hover:underline">
              Instagram
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="mt-10 text-center text-sm">
      <p>© 2025 Life Balance Blog. All Rights Reserved.</p>
      <p class="text-lg">
        Designed with <span class="text-red-900 dark:text-red-600">&hearts;</span> by
        <a class="text-blue-200 dark:text-blue-100 dark:text-blue-400 font-semibold" href="https://shakiltech.com?utm_source=life_quiz">
          Shakil Alam</a>
      </p>
    </div>
  </footer>
</template>
