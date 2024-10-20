<script setup>
import { usePage } from "@inertiajs/vue3";
import {onMounted, onUnmounted} from "vue";
import axios from 'axios';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT,
    wssPort: import.meta.env.VITE_REVERB_PORT,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});

onMounted(() => {
   const user = usePage().props.auth.user

   window.Echo.listen('ReverbExampleEvent', (e) => {
            console.log('asdsad');
           alert('Reverb 🚀')
     })

});
</script>

<template>
    <head>
        <title>Welcome</title>
    </head>
    <div class="flex flex-row text-center justify-center m-12">
        <div class="basis-1/2 flex flex-col">
            <p class="font-bold text-6xl text-purple-300">We create new entitlement of entertainment</p>
            <p class="text-3xl text-gray-500">Find a partner for a game party!</p>
        </div>
    </div>
</template>

<style scoped>

</style>
