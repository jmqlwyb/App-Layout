<script setup>
import { defineProps } from "vue";

defineProps({
    products: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div class="p-6 mx-auto mb-4 shadow-lg max-w-7xl">
        <h1 class="mb-5 text-2xl font-bold text-center text-black">
            Products | <span class="text-orange-700">Hoodie  Collection</span>
        </h1>
        <div class="flex flex-wrap justify-center gap-6">
            <div
                v-for="product in products"
                :key="product.id"
                class="flex flex-col w-full max-w-xs p-5 transition-all duration-300 bg-gray-900 rounded-lg shadow-lg hover:shadow-xl"
            >
                <img
                    v-if="product.image"
                    :src="getImageUrl(product.image)"
                    :alt="product.brand"
                    class="object-cover w-full h-48 mb-4 rounded-lg"
                />

                <h5 class="mb-2 text-xl font-semibold text-white">
                    {{ product.brand }}
                </h5>
                <p class="flex-grow mb-4 text-base text-gray-400">
                    {{ product.description }}
                </p>
                <div class="flex justify-between mt-auto text-sm">
                    <p class="font-semibold text-gray-300">
                        Wholesale: ₱{{ product.whole_sale_price.toFixed(2) }}
                    </p>
                    <p class="font-semibold text-gray-300">
                        Retail: ₱{{ product.retail_price.toFixed(2) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        getImageUrl(image) {
            return `/images/${image}`;
        },
    },
};
</script>

<style>
.product-image {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
}
</style>
