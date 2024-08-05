<template>
  <div class="bg-white rounded-lg shadow-lg relative overflow-hidden max-w-4xl mx-auto">
    <!-- BOARDS tab -->
    <div class="absolute top-0 left-0 bg-blue-500 text-white px-4 py-2 z-10">
      BOARDS
    </div>

    <div class="flex flex-col md:flex-row">
      <!-- Left side: Main image and thumbnails -->
      <div class="w-full md:w-3/5 relative pt-2">
        <img :src="currentProduct.images[selectedImageIndex]" :alt="currentProduct.name" class="w-full object-cover">
        <div class="absolute right-0 top-0 bottom-0 w-1/6 bg-white bg-opacity-75 p-2 flex flex-col justify-center space-y-2">
          <img v-for="(image, index) in currentProduct.images.slice(1)" :key="index" 
               :src="image" :alt="`Thumbnail ${index + 1}`" 
               @click="selectedImageIndex = index + 1"
               class="w-full aspect-square object-cover cursor-pointer">
        </div>
      </div>

      <!-- Right side: Product details -->
      <div class="w-full md:w-2/5 p-4 md:p-6">
        <h2 class="text-xl font-bold mb-2">{{ currentProduct.name }}</h2>
        <div class="flex items-center mb-4">
          <div class="flex text-yellow-400">
            <span v-for="n in 5" :key="n" class="mr-1">{{ n <= currentProduct.rating ? '★' : '☆' }}</span>
          </div>
          <span class="ml-2 text-gray-600">({{ currentProduct.reviewCount }})</span>
        </div>
        
        <div class="mb-4">
          <div class="flex border-b overflow-x-auto">
            <button 
              v-for="tab in tabs" 
              :key="tab"
              @click="currentTab = tab"
              :class="['px-4 py-2 font-semibold text-sm whitespace-nowrap', currentTab === tab ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500']"
            >
              {{ tab.toUpperCase() }}
            </button>
          </div>
          <div class="py-4">
            <p v-if="currentTab === 'description'" class="text-sm">{{ currentProduct.description }}</p>
            <ul v-else-if="currentTab === 'features'" class="text-sm">
              <li v-for="feature in currentProduct.features" :key="feature" class="mb-1">{{ feature }}</li>
            </ul>
            <div v-else-if="currentTab === 'dimensions'" class="text-sm">
              <p v-for="(value, key) in currentProduct.dimensions" :key="key">
                {{ key.charAt(0).toUpperCase() + key.slice(1) }}: {{ value }}
              </p>
            </div>
          </div>
        </div>
        
        <div class="flex flex-col sm:flex-row justify-between items-center">
          <span class="text-2xl font-bold mb-2 sm:mb-0">${{ currentProduct.price.toFixed(2) }}</span>
          <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 w-full sm:w-auto">
            BUY NOW
          </button>
        </div>
        
        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block text-sm">View all boards</a>
      </div>
    </div>
    
    <!-- Navigation arrows and counter -->
    <div class="absolute top-4 right-4 flex items-center space-x-2">
      <div class="bg-black text-white px-2 py-1 text-sm rounded">
        {{ currentProductIndex + 1 }}/{{ products.length }}
      </div>
      <button @click="prevProduct" class="bg-yellow-400 text-white p-2 rounded-full w-8 h-8 flex items-center justify-center">&lt;</button>
      <button @click="nextProduct" class="bg-yellow-400 text-white p-2 rounded-full w-8 h-8 flex items-center justify-center">&gt;</button>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

const currentTab = ref('description')
const currentProductIndex = ref(0)
const selectedImageIndex = ref(0)
const tabs = ['description', 'features', 'dimensions']

const products = [
  {
    name: "JR Surfboards The Donny Stoker Yellow/Green Rail Fade",
    images: [
      "https://picsum.photos/800/600?random=1",
      "https://picsum.photos/800/600?random=2",
      "https://picsum.photos/800/600?random=3",
      "https://picsum.photos/800/600?random=4"
    ],
    rating: 4,
    reviewCount: 52,
    description: "Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokesys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.",
    features: ["Lightweight construction", "High-performance shape", "Durable finish"],
    dimensions: { length: '6\'2"', width: '19 1/4"', thickness: '2 5/8"' },
    price: 499.99
  },
  {
    name: "Firewire Surfboards Seaside",
    images: [
      "https://picsum.photos/800/600?random=5",
      "https://picsum.photos/800/600?random=6",
      "https://picsum.photos/800/600?random=7",
      "https://picsum.photos/800/600?random=8"
    ],
    rating: 5,
    reviewCount: 78,
    description: "The Seaside is the shortboard counterpart to the Seaside & Beyond...",
    features: ["Helium construction", "High volume", "Versatile performance"],
    dimensions: { length: '5\'10"', width: '20"', thickness: '2 1/2"' },
    price: 749.99
  },
]

const currentProduct = computed(() => products[currentProductIndex.value])

function nextProduct() {
  currentProductIndex.value = (currentProductIndex.value + 1) % products.length
  selectedImageIndex.value = 0
}

function prevProduct() {
  currentProductIndex.value = (currentProductIndex.value - 1 + products.length) % products.length
  selectedImageIndex.value = 0
}
</script>