<script setup>
import MainLayout from "@/Pages/MainLayout.vue";
</script>

<template>
    <MainLayout>
        <div
            class="flex flex-col items-center justify-center min-h-screen text-center"
        >
            <h1 class="mb-4 text-2xl font-bold">FAQ</h1>
            <ul class="space-y-4">
                <li><strong>Q:</strong> What is this page about?</li>
                <li>
                    <strong>A:</strong> This is a Frequently Asked Questions
                    page.
                </li>

                <li><strong>Q:</strong> How do I contact support?</li>
                <li>
                    <strong>A:</strong> You can contact us via email or phone.
                </li>
            </ul>
        </div>
    </MainLayout>
</template>
