<script setup>
import "@/Pages/MainLayout.vue";
import MainLayout from "./MainLayout.vue";
</script>

<template>
    <MainLayout>
        <br />
        <div class="profile-container">
            <img src="/pic.jpg" alt="Profile Picture" class="profile-image" />
            <h1>Benito Maglaway Jr.</h1>
            <br />
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.
            </p>
        </div>
    </MainLayout>
</template>

<style scoped>
.profile-container {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 0 auto 20px auto;
    display: block;
    object-fit: cover;
}
</style>
