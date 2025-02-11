<script setup lang="ts">
import { RouterView } from 'vue-router'
import Header from "@/components/header/Header.vue";
import Footer from "@/components/header/Footer.vue";
</script>

<template>
  <Header/>
  <main>
    <RouterView />
  </main>
  <Footer/>
</template>

<style scoped>
main {
  display: flex;
  flex-direction: column;
  flex: 1;
  width:100%;
}
</style>
