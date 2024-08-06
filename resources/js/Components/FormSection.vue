<template>
  <div class="bg-white py-6 px-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-8">
        <!-- Image Gallery -->
        <div>
          <div class="grid grid-cols-2">
            <img src="https://picsum.photos/500/500?random=1" alt="Coastline with pier" class="w-full h-60 object-cover">
            <img src="https://picsum.photos/500/500?random=2" alt="Surfers at sunset" class="w-full h-60 object-cover">
            <img src="https://picsum.photos/500/500?random=3" alt="Surfboard on beach" class="w-full h-60 object-cover">
            <img src="https://picsum.photos/500/500?random=4" alt="Ocean wave" class="w-full h-60 object-cover">
          </div>
          
          <!-- Instagram Follow -->
          <div class="flex items-center bg-blue-100 p-2 mt-4">
            <svg class="h-6 w-6 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
            <span class="ml-2 font-semibold">FOLLOW US @surfersco</span>
          </div>
        </div>

        <!-- Contact Form and Navbar -->
        <div class="flex flex-col">
          <form @submit.prevent="sendEmail" class="space-y-2 flex-grow">
            <input v-model="form.name" type="text" placeholder="Name" class="w-full p-2 border rounded">
            <input v-model="form.email" type="email" placeholder="Email" class="w-full p-2 border rounded">
            <div class="grid grid-cols-2 gap-4">
              <select v-model="form.birthPlace" class="w-full p-2 border rounded">
                <option value="" disabled selected>Birth place</option>
                <option value="city1">City 1</option>
                <option value="city2">City 2</option>
              </select>
              <input v-model="form.birthday" type="date" class="w-full p-2 border rounded">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <input v-model="form.phone" type="tel" placeholder="Phone" class="w-full p-2 border rounded">
              <input v-model="form.company" type="text" placeholder="Company" class="w-full p-2 border rounded">
            </div>
            <textarea v-model="form.message" rows="3" placeholder="Your Message" class="w-full p-2 border rounded"></textarea>
            <div class="flex items-center">
              <input v-model="form.privacyPolicy" type="checkbox" id="privacy-policy" class="mr-2">
              <label for="privacy-policy">Accept privacy policy</label>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
              SEND
            </button>
          </form>

          <!-- Navbar -->
          <nav class="grid grid-cols-2 gap-4 text-sm bg-black p-4 mt-4">
            <div>
              <a href="#" class="block py-1 text-white hover:text-blue-500">About</a>
              <a href="#" class="block py-1 text-white hover:text-blue-500">Boards</a>
              <a href="#" class="block py-1 text-white hover:text-blue-500">Accessories</a>
              <a href="#" class="block py-1 text-white hover:text-blue-500">Blog</a>
            </div>
            <div>
              <a href="#" class="block py-1 text-white hover:text-blue-500">Technology</a>
              <a href="#" class="block py-1 text-white hover:text-blue-500">Team</a>
              <a href="#" class="block py-1 text-white hover:text-blue-500">Dealers</a>
              <a href="#" class="block py-1 text-white hover:text-blue-500">Contact us</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { reactive } from 'vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  email: '',
  birthPlace: '',
  birthday: '',
  phone: '',
  company: '',
  message: '',
  privacyPolicy: false
})

const sendEmail = () => {
  form.post(route('send.email'), {
    preserveState: true,
    preserveScroll: true,
  })
}
</script>