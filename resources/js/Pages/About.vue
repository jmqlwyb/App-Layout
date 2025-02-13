<script setup>
import '@/Pages/MainLayout.vue';
import MainLayout from './MainLayout.vue';
</script>

<template>
    <MainLayout>
        <div class="about-container">
            <h1>About Information Technology</h1>
            <p>
                Information Technology (IT) refers to the use of computers, networks, software, and other electronic systems
                to store, process, and communicate data. IT plays a crucial role in modern businesses, education, healthcare,
                and many other industries.
            </p>

            <h2>Key Areas of IT</h2>
            <ul>
                <li><strong>Networking:</strong> The backbone of communication, enabling devices to connect via the internet and local networks.</li>
                <li><strong>Cybersecurity:</strong> Protecting systems, networks, and data from cyber threats and attacks.</li>
                <li><strong>Software Development:</strong> Designing and building applications, from websites to enterprise software.</li>
                <li><strong>Cloud Computing:</strong> Delivering computing services like storage, servers, and databases over the internet.</li>
                <li><strong>Data Science & AI:</strong> Using big data, artificial intelligence, and machine learning for insights and automation.</li>
                <li><strong>IT Support & Infrastructure:</strong> Managing hardware, servers, and technical support for businesses.</li>
            </ul>

            <h2>The Importance of IT</h2>
            <p>
                IT has transformed how businesses operate, improving efficiency, security, and connectivity. From e-commerce
                platforms to social media networks, IT continues to drive innovation and global communication.
            </p>
        </div>
    </MainLayout>
</template>

<style scoped>
.about-container {
    max-width: 800px;
    margin: 0 auto;
    text-align: left;
}

h1, h2 {
    color: #2c3e50;
}

ul {
    list-style-type: disc;
    margin-left: 20px;
}
</style>
