<template>
    <header class="absolute top-0 left-0 right-0 z-10">
      <nav class="container mx-auto px-4 py-6" aria-label="Global">
        <div class="flex items-center justify-between">
          <div class="flex-shrink-0">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Surfers Co.</span>
              <img class="h-8" src="logo.png" alt="Surfers Co. Logo" />
            </a>
          </div>
          <div class="hidden lg:flex lg:gap-x-8">
            <a v-for="item in navigation" :key="item.name" :href="item.href" 
               :class="[
                 'text-sm font-semibold leading-6 px-3 transition-colors duration-200',
                 item.current ? 'text-white bg-blue-500' : 'text-white hover:bg-blue-500'
               ]">
              {{ item.name }}
            </a>
          </div>
          <div class="hidden lg:flex lg:items-center lg:gap-x-6">
            <a v-for="(icon, index) in socialIcons" :key="index" :href="icon.href" class="text-white hover:text-blue-500 transition-colors duration-200">
              <span class="sr-only">{{ icon.name }}</span>
              <component :is="icon.component" class="h-6 w-6" aria-hidden="true" />
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white" @click="mobileMenuOpen = true">
              <span class="sr-only">Open main menu</span>
              <Bars3Icon class="h-6 w-6" aria-hidden="true" />
            </button>
          </div>
        </div>
      </nav>
      
      <!-- Mobile menu, show/hide based on menu open state. -->
      <Dialog as="div" class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
        <div class="fixed inset-0 z-50" />
        <DialogPanel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <!-- Mobile menu content (unchanged) -->
        </DialogPanel>
      </Dialog>
    </header>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import { Dialog, DialogPanel } from '@headlessui/vue'
  import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'
  import { FacebookIcon, InstagramIcon, MailIcon } from 'lucide-vue-next'
  
  const navigation = [
    { name: 'BOARDS', href: '#', current: true },
    { name: 'ACCESSORIES', href: '#', current: false },
    { name: 'BLOG', href: '#', current: false },
    { name: 'TECHNOLOGY', href: '#', current: false },
    { name: 'TEAM', href: '#', current: false },
    { name: 'DEALERS', href: '#', current: false },
  ]
  
  const socialIcons = [
    { name: 'Facebook', href: '#', component: FacebookIcon },
    { name: 'Instagram', href: '#', component: InstagramIcon },
    { name: 'Email', href: '#', component: MailIcon },
  ]
  
  const mobileMenuOpen = ref(false)
  </script>
  
  <style scoped>
  /* Add any additional styles here if needed */
  </style>