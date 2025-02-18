<script setup>
import { ref } from "vue";
import MainLayout from "@/Pages/MainLayout.vue";

const message = ref("This is an Inertia App.");
</script>

<template>
    <MainLayout>
        <div
            class="flex flex-col items-center justify-center min-h-screen text-center"
        >
            <h1 class="mb-4 text-3xl font-bold">This is Home Page</h1>
            <p class="text-lg">{{ message }}</p>
        </div>
    </MainLayout>
</template>
