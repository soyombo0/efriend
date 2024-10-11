<script setup>
import { defineProps } from 'vue';
import { EnvelopeIcon, UserIcon, InformationCircleIcon } from '@heroicons/vue/24/solid';

const props = defineProps({
    user: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <div class="profile-container bg-gray-800 rounded-lg shadow-2xl">
        <div class="profile-header relative">
            <div class="profile-cover h-48 bg-gray-300 rounded-t-lg"></div>
            <img :src="user.avatar" :alt="user.name" class="profile-avatar absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <h1 class="profile-name text-3xl font-bold mt-16 text-center">{{ user.name }}</h1>
        </div>
        <div class="profile-info bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-b-lg p-6 mt-4">
            <div class="flex items-center mb-4">
                <EnvelopeIcon class="h-6 w-6 mr-2" />
                <p><span class="font-semibold">Email:</span> {{ user.email }}</p>
            </div>
            <div class="flex items-center mb-4">
                <UserIcon class="h-6 w-6 mr-2" />
                <p><span class="font-semibold">Name:</span> {{ user.name }}</p>
            </div>
            <div class="flex items-center">
                <InformationCircleIcon class="h-6 w-6 mr-2" />
                <p><span class="font-semibold">Bio:</span> {{ user.bio }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.profile-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.profile-header {
    text-align: center;
    margin-bottom: 20px;
}

.profile-avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-name {
    margin-top: 10px;
    font-size: 24px;
}

.profile-info {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 8px;
}
</style>
