<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <nav class="flex items-center justify-between p-4 bg-black">
            <div class="text-xl font-bold">
                <span class="text-white">DRIP</span>
                <span class="text-orange-500">HOOD</span>
            </div>

            <div class="flex gap-4">
                <Link href="/" class="font-bold text-white hover:text-orange-500"
                    >Home</Link
                >
                <Link href="/about" class="font-bold text-white hover:text-orange-500"
                    >About</Link
                >
                <Link
                    href="/profile"
                    class="font-bold text-white hover:text-orange-500"
                    >Profile</Link
                >
                <Link
                    href="/products"
                    class="font-bold text-white hover:text-orange-500"
                    >Products</Link
                >
                <Link href="/faq" class="font-bold text-white hover:text-orange-500"
                    >FAQ</Link
                >
            </div>
        </nav>
    </div>
    <slot />
</template>

<style scoped></style>
