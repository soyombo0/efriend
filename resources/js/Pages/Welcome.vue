<script setup>
import { usePage } from "@inertiajs/vue3";
import {onMounted, onUnmounted} from "vue";

onMounted(() => {
   const user = usePage().props.auth.user

   window.Echo.private(`App.Models.User.${user.id}`)
        .listen('ReverbExampleEvent', (e) => {
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
        <div class="basis-1/2 flex justify-center">
            <img height="920px" width="420px" src="https://cdn.discordapp.com/attachments/1098926473370419223/1291714957838123018/telegram-cloud-photo-size-2-5188212256553427258-y.jpg?ex=67011acc&is=66ffc94c&hm=6b15daa0f4e24ce22c46e1622495aa65dbfd82ba52096f1c105786fd52f7c822&">
        </div>
    </div>
</template>

<style scoped>

</style>
