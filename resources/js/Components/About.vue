<template>
  <div class="w-full h-screen bg-blue-600 relative overflow-hidden">
    <!-- White background section -->
    <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-white"></div>

    <!-- Text content area (left side) -->
    <div class="absolute right-[55%] top-[20%] w-[45%] bg-white shadow-lg overflow-hidden">
      <div class="p-8">
        <h2 class="text-2xl font-bold mb-2">WE ARE SURFERS CO.</h2>
        <div class="text-xl mb-4">×</div>
        <p class="text-sm text-gray-700 mb-4 leading-relaxed">
          Lorem ipsum dolor sit amet, aeneam consectetur adipiscing elit. Fusce
          iaculis feugiat arcunum fermentum hendrerit. Suspendisse auctor labor
          nisi, et interdum diam facilisis, aliquam pulvinar semi egetis belle
          sollicitudin ut. Nullam tincidun finibustus scelerisque.
        </p>
        <a href="#" class="text-blue-500 hover:underline text-sm">Read more</a>
      </div>
    </div>
    
    <!-- Image area (right side) -->
    <div class="absolute right-[10%] bottom-[15%] w-[40%] aspect-video shadow-lg overflow-hidden">
      <img src="https://picsum.photos/800/600" alt="Surfer" class="w-full h-full object-cover" />
      <!-- Play button overlay -->
      <div class="absolute top-4 right-4 bg-white rounded-full p-3 shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
        </svg>
      </div>
    </div>
  </div>
</template>