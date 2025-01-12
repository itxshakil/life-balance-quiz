<script setup lang="ts">

import QuizFloatingButton from "@/Components/QuizFloatingButton.vue";
import Footer from "@/Layouts/Footer.vue";
</script>

<template>
  <slot />

  <Footer />
  <QuizFloatingButton />
</template>
