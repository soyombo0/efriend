<script setup>
import Navbar from "@/Pages/Shared/Navbar.vue";
</script>

<template>
    <div class="">
        <Navbar></Navbar>

        <section>
            <slot />
        </section>
    </div>
</template>

<style scoped>

</style>
