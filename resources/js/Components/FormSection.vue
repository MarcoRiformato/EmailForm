<template>
  <div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-2">
        <!-- Image Gallery -->
        <div class="grid grid-cols-2 gap-4">
          <img src="https://picsum.photos/400/300?random=1" alt="Beach scene" class="w-full h-full object-cover rounded-lg">
          <img src="https://picsum.photos/400/300?random=2" alt="Surfers at sunset" class="w-full h-full object-cover rounded-lg">
          <img src="https://picsum.photos/400/300?random=3" alt="Surfboard on beach" class="w-full h-full object-cover rounded-lg">
          <img src="https://picsum.photos/400/300?random=4" alt="Ocean waves" class="w-full h-full object-cover rounded-lg">
        </div>

        <!-- Contact Form -->
        <form @submit.prevent="sendEmail" class="space-y-6">
          <div>
            <input type="text" name="name" id="name" placeholder="Name" v-model="form.name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
          </div>
          <div>
            <input type="text" name="surname" id="surname" placeholder="Surname" v-model="form.surname" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
          </div>
          <div>
            <input type="email" name="email" id="email" placeholder="Email" v-model="form.email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <select name="birthPlace" id="birth-place" v-model="form.birthPlace" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                <option value="" disabled selected>Birth place</option>
                <!-- Add options here -->
                <option value="city1">City 1</option>
                <option value="city2">City 2</option>
              </select>
            </div>
            <div>
              <input type="date" name="birthday" id="birthday" v-model="form.birthday" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <input type="tel" name="phone" id="phone" placeholder="Phone" v-model="form.phone" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
            </div>
            <div>
              <input type="text" name="company" id="company" placeholder="Company" v-model="form.company" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div>
            <textarea name="message" id="message" rows="4" v-model="form.message" placeholder="Your Message" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          <div class="flex items-center">
            <input type="checkbox" name="privacyPolicy" id="privacy-policy" v-model="form.privacyPolicy" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
            <label for="privacy-policy" class="ml-2 block text-sm text-gray-900">Accept privacy policy</label>
          </div>
          <div>
            <button type="submit" class="w-full rounded-md bg-blue-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">SEND</button>
          </div>
        </form>
      </div>

      <!-- Instagram Follow -->
      <div class="mt-6 flex items-center">
        <svg class="h-6 w-6 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
        </svg>
        <span class="ml-2">FOLLOW US @surfersco</span>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const form = ref({
  name: '',
  surname: '',
  email: '',
  birthPlace: '',
  birthday: '',
  phone: '',
  company: '',
  message: '',
  privacyPolicy: false
});

const sendEmail = () => {
  const formData = { ...form.value };

  // Remove empty fields
  Object.keys(formData).forEach(key => {
    if (formData[key] === '' || formData[key] === false) {
      delete formData[key];
    }
  });

  console.log("Sending Data:", formData);
  Inertia.post('/send-email', formData);
}
</script>
