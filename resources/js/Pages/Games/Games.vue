<script setup>
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import {Link, usePage} from "@inertiajs/vue3";
import { computed } from 'vue';

const page = usePage()
const games = computed(() => page.props.games);
</script>

<template>
    <p>games pages</p>
    <div>
        <p>{{ $games }}</p>
    </div>
</template>

<style scoped>

</style>
