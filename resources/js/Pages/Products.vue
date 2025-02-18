<script setup>
import ProductCard from "@/Components/ProductCard.vue";
import MainLayout from "../Pages/MainLayout.vue";

const products = [
    {
        id: 1,
        brand: "Stussy",
        description:
            "Stüssy is a fashion brand founded in Laguna Beach, California in the 1980s by Shawn Stussy.",
        whole_sale_price: 1000,
        retail_price: 1500,
        image: "stussy.jpeg",
    },
    {
        id: 2,
        brand: "Carhartt",
        description:
            "Carhartt, Inc. is an American clothing company founded in 1889, known for heavy-duty work wear such as jackets.",
        whole_sale_price: 2000,
        retail_price: 2500,
        image: "carhart.jpeg",
    },
    {
        id: 3,
        brand: "Chrome Hearts",
        description:
            "Chrome Hearts is renowned for its exceptional craftsmanship and attention to detail.",
        whole_sale_price: 3000,
        retail_price: 3500,
        image: "chromeh.jpeg",
    },
];
</script>

<template>
    <MainLayout>
        <ProductCard :products="products" />
    </MainLayout>
</template>
