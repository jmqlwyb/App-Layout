<script setup>
import '@/Pages/MainLayout.vue';
import MainLayout from './MainLayout.vue';
</script>

<template>
    <MainLayout>
        <div class="status-container">
            <h1>System Status</h1>
            <p>Check the current status of our services.</p>

            <div class="status-box">
                <p><strong>Server:</strong> 🟢 Online</p>
                <p><strong>Database:</strong> 🟢 Operational</p>
                <p><strong>Network:</strong> 🟡 Minor Issues</p>
                <p><strong>Security:</strong> 🟢 Secure</p>
            </div>

            <p>Last updated: Feb 11, 2025</p>
        </div>
    </MainLayout>
</template>

<style scoped>
.status-container {
    text-align: center;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
}

.status-box {
    background: #f4f4f4;
    padding: 15px;
    border-radius: 8px;
    margin: 20px 0;
}

p {
    font-size: 16px;
    margin: 5px 0;
}
</style>
