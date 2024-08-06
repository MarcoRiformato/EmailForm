<template>
  <Head title="Home" />

  <AppLayout>
    <div class="relative">
      <!-- Hero Section -->
      <section class="relative h-screen bg-cover bg-center" style="background-image: url('waves.webp');">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white pb-48">
          <h1 class="text-5xl font-bold mb-4">Ride every wave as if it's your last</h1>
          <p class="text-xl">We love the motion of the ocean</p>
        </div>
      </section>

      <!-- Product Showcase -->
      <section class="relative -mt-40 z-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="bg-white shadow-lg">
            <ProductShowcase/>
          </div>
        </div>
      </section>
    </div>

    <!-- About Section -->
    <section class="bg-gray-100">
      <About/>
    </section>

    <!-- Contact Form -->
    <section class="bg-black">
      <FormSection/>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import ProductShowcase from '@/Components/ProductShowcase.vue'
import About from '@/Components/About.vue'
import FormSection from '@/Components/FormSection.vue'
</script>