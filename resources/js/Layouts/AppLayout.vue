<template>
<div class="min-h-screen bg-gray-100">
    <Navbar/>

    <!-- Page Content -->
    <main>
    <slot />
    </main>
</div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import Navbar from '@/Components/Navbar.vue';


</script>