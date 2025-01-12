<script setup lang="ts">
import {Link} from "@inertiajs/vue3";
</script>

<template>
  <div class="fixed bottom-6 right-6">
    <Link href="/" as="button"
          class="inline-flex gap-2 items-center bg-blue-600 dark:bg-blue-800 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-700 dark:hover:bg-blue-700 transition-all duration-200 font-semibold">
      <span>Take the Quiz Now</span>
      <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
           stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" />
      </svg>
    </Link>
  </div>
</template>