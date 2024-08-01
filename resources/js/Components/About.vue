<template>
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('https://picsum.photos/1600/900?random=10');">
      <div class="absolute inset-0 bg-black bg-opacity-30"></div>
      <div class="container mx-auto h-full flex items-center">
        <div class="bg-white p-8 max-w-md relative z-10">
          <h2 class="text-2xl font-bold mb-2">WE ARE SURFERS CO.</h2>
          <div class="text-xl font-bold mb-4">×</div>
          <p class="mb-4">
            Lorem ipsum dolor sit amet, aeneam consectetur adipiscing elit. Fusce iaculis feugiat arcunum fermentum hendrerit. Suspendisse auctor labor nisi, et interdum diam facilisis, aliquam pulvinar semi egetis belle sollicitudin ut. Nullam tincidun finibustus scelerisque.
          </p>
          <a href="#" class="text-blue-500 hover:underline">Read more</a>
        </div>
      </div>
      <div class="absolute bottom-8 right-8 w-64 h-48">
        <img src="https://picsum.photos/400/300?random=11" alt="Surfer" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex items-center justify-center">
          <div class="bg-white rounded-full p-4 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script setup>
  // No script needed for this component
  </script>