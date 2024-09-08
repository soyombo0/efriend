<script setup>
import {Link, useForm, usePage} from "@inertiajs/vue3";
import {computed} from "vue";

let form = useForm({
    email: '',
    password: ''
});

let submit = () => {
  form.post('/signin');
};
const page = usePage()
const error = computed(() => page.props.errors);
</script>

<template>
    <div class="flex justify-center items-center h-screen">
        <form @submit.prevent="submit">
            <div class="bg-gray-900 p-12 rounded-2xl flex flex-col space-y-4 text-center text-white">
                <p class="text-2xl text-white font-bold">Sign In</p>
                <input class="bg-gray-800 border-none border p-2 rounded" v-model="form.email" type="email" name="email" placeholder="mail">
                <input class="bg-gray-800 border-none border p-2 rounded" v-model="form.password" type="password" name="password" placeholder="password">
                <p v-if="error" class="text-red-800">{{ error.name }}</p>
                <button type="submit" class="text-white p-3 rounded-2xl bg-blue-500 hover:bg-blue-600">Sign In</button>
            </div>
        </form>
    </div>
</template>
