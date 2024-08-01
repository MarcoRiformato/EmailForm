<template>
<div class="min-h-screen bg-gray-100">
    <Navbar/>

    <!-- Page Content -->
    <main>
    <slot />
    </main>

        <!-- Footer -->
        <footer class="mt-12 bg-black text-white p-6 rounded-lg">
          <div class="grid grid-cols-3 gap-4">
            <div>
              <h3 class="font-bold mb-2">About</h3>
              <h3 class="font-bold mb-2">Boards</h3>
              <h3 class="font-bold mb-2">Accessories</h3>
            </div>
            <div>
              <h3 class="font-bold mb-2">Blog</h3>
              <h3 class="font-bold mb-2">Technology</h3>
              <h3 class="font-bold mb-2">Team</h3>
            </div>
            <div>
              <h3 class="font-bold mb-2">Dealers</h3>
              <h3 class="font-bold mb-2">Contact us</h3>
            </div>
          </div>
        </footer>
</div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import Navbar from '@/Components/Navbar.vue';


</script>