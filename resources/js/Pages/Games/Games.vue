<script setup>
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import {Link, usePage} from "@inertiajs/vue3";
import { computed } from 'vue';

const page = usePage()
const games = computed(() => page.props.games);
</script>

<template>
    <div class="text-center justify-center m-12">
        <p class="font-bold text-5xl text-white">Here you can find your efriend by game</p>
        <p class="text-2xl text-gray-500">Never seen better experience before</p>
    </div>
    <div class="flex flex-row justify-center center">
        <div v-for="game in games" class="text-white rounded-md bg-gray-800 hover:bg-gray-700 p-2 m-2">
            <Link href="/efriends/?game={game.name}">
                <img height="320px" width="240px" src="https://cdn.discordapp.com/attachments/1098926473370419223/1283754056501952563/16D07E0C-2B9D-49AB-AF9E-AC6204150D83_1_105_c.jpeg?ex=66e424a2&is=66e2d322&hm=c2e10f766c3830becf46176aaf4550a02a852fec66ffe4b7c89803fff943f15f&">
                <p class="font-bold">{{ game.name }}</p>
                <p>{{ game.description }}</p>
                <p>{{ game.genre }}</p>
            </Link>
        </div>
    </div>
</template>

<style scoped>

</style>
