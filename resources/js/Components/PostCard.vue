<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

defineProps({
  title: {
    required: true,
    type: String,
  },
  description: {
    required: true,
    type: String
  },
  link: {
    required: true,
    type: String,
  }
})
</script>

<template>
  <div class="dark:bg-gray-800 dark:text-white bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
    <!--          <img src="your-image-path.jpg" alt="Life Balance Guide" class="w-full h-40 object-cover rounded-t-lg mb-4">-->
    <Link :href="link" as="h3" class="text-xl font-semibold text-gray-800 dark:text-white">{{ title }}</Link>
    <p class="text-gray-600 dark:text-gray-300 mt-2">{{ description}}</p>
    <Link :href="link" class="text-blue-500 mt-4 inline-block" prefetch>Read More &rarr;</Link>
  </div>
</template>