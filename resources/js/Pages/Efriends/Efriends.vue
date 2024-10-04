<script setup>
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import {Link, usePage} from "@inertiajs/vue3";
import { computed } from 'vue';

const page = usePage()
const efriends = computed(() => page.props.efriends);
</script>

<template>
    <div class="flex flex-row justify-center center">
        <div v-for="efriend in efriends" class="text-white rounded-md bg-gray-800 hover:bg-gray-700 p-2 m-2">
            <Link href="">
                <img height="320px" width="240px" src="https://i0.wp.com/wallpapercave.com/wp/wp8805437.png">
                <p class="font-bold">{{ efriend.name }}</p>
                <div v-for="game in efriend.games" class="flex p-1 bg-gray-900 rounde-md">
                    <p> {{ game.name }}</p>
                </div>
            </Link>
        </div>
    </div>
</template>

<style scoped>

</style>
