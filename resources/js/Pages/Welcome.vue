<template>
    <Head title="Home" />
  
    <AppLayout>
      <!-- Hero Section -->
      <section class="relative h-screen bg-cover bg-center" style="background-image: url('/images/wave-background.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
          <h1 class="text-5xl font-bold mb-4">Ride every wave as if it's your last</h1>
          <p class="text-xl">We love the motion of the ocean</p>
        </div>
      </section>
  
      <!-- Product Showcase -->
      <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="bg-blue-200 p-8 rounded-lg shadow-lg">
            <ProductShowcase/>
          </div>
        </div>
      </section>
  
      <!-- About Section -->
      <section class="py-16 bg-gray-100">
        <About/>
      </section>
  
      
      <!-- Contact Form -->
      <section class=" bg-gray-100">
        <FormSection/>
      </section>


      <!-- Instagram Feed -->
      <section class="py-16 bg-white">
        <!-- Instagram feed content -->
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