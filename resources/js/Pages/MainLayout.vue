<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <nav class="flex items-center justify-between p-4 bg-gray-800">

            <div class="text-xl font-bold text-white">
                This is my App
            </div>


            <div class="flex gap-4">
                <Link href="/" class="font-bold text-white hover:underline">Home</Link>
                <Link href="/about" class="font-bold text-white hover:underline">About</Link>
                <Link href="/profile" class="font-bold text-white hover:underline">Profile</Link>
                <Link href="/faq" class="font-bold text-white hover:underline">FAQ</Link>
                <Link href="/status" class="font-bold text-white hover:underline">Status</Link>
            </div>
        </nav>
    </div>
    <slot />
</template>

<style scoped>
</style>
