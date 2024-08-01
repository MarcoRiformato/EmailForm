<template>
  <div class="bg-white p-4 rounded-lg shadow-lg relative max-w-4xl mx-auto">
    <div class="flex flex-col md:flex-row">
      <div class="w-full md:w-1/2 relative mb-6 md:mb-0 flex">
        <div class="w-5/6">
          <div class="aspect-w-4 aspect-h-3">
            <img :src="currentProduct.images[selectedImageIndex]" :alt="currentProduct.name" class="object-cover w-full h-full rounded">
          </div>
        </div>
        <div class="w-1/6 pl-2 flex flex-col space-y-2">
          <div v-for="(image, index) in currentProduct.images" :key="index" 
               class="aspect-w-1 aspect-h-1 cursor-pointer"
               @click="selectedImageIndex = index">
            <img :src="image" :alt="`Thumbnail ${index + 1}`" class="object-cover w-full h-full rounded">
          </div>
        </div>
      </div>
      
      <div class="w-full md:w-1/2 md:pl-8">
        <h2 class="text-2xl font-bold mb-2">{{ currentProduct.name }}</h2>
        <div class="flex items-center mb-4">
          <div class="flex text-yellow-400">
            <i v-for="n in 5" :key="n" :class="['fas', n <= currentProduct.rating ? 'fa-star' : 'fa-star-o']"></i>
          </div>
          <span class="ml-2 text-gray-600">({{ currentProduct.reviewCount }})</span>
        </div>
        
        <div class="mb-4">
          <div class="flex border-b">
            <button 
              v-for="tab in tabs" 
              :key="tab"
              @click="currentTab = tab"
              :class="['px-4 py-2 font-semibold text-sm', currentTab === tab ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500']"
            >
              {{ tab.toUpperCase() }}
            </button>
          </div>
          <div class="py-4">
            <p v-if="currentTab === 'description'" class="text-sm">{{ currentProduct.description }}</p>
            <ul v-else-if="currentTab === 'features'" class="text-sm">
              <li v-for="feature in currentProduct.features" :key="feature">{{ feature }}</li>
            </ul>
            <div v-else-if="currentTab === 'dimensions'" class="text-sm">
              <p v-for="(value, key) in currentProduct.dimensions" :key="key">
                {{ key.charAt(0).toUpperCase() + key.slice(1) }}: {{ value }}
              </p>
            </div>
          </div>
        </div>
        
        <div class="flex justify-between items-center">
          <span class="text-2xl font-bold">${{ currentProduct.price.toFixed(2) }}</span>
          <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
            BUY NOW
          </button>
        </div>
        
        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block text-sm">View all boards</a>
      </div>
    </div>
    
    <div class="absolute top-4 right-4 flex space-x-2">
      <button @click="prevProduct" class="bg-yellow-400 text-white p-2 rounded-full">&lt;</button>
      <button @click="nextProduct" class="bg-yellow-400 text-white p-2 rounded-full">&gt;</button>
    </div>
    <div class="absolute top-4 right-20 bg-black text-white px-2 py-1 text-sm">
      {{ currentProductIndex + 1 }}/{{ products.length }}
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
    description: "Easy to ride, care free surfing craft that's fun for everyone...",
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