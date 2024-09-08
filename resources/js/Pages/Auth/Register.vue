<script setup>
import {Link, useForm, usePage} from "@inertiajs/vue3";
import {computed} from "vue";

let form = useForm({
    email: '',
    name: '',
    password: ''
});

let submit = () => {
  form.post('/signup');
};
const page = usePage()
const error = computed(() => page.props.errors);
</script>

<template>
    <div class="flex justify-center items-center h-screen">
        <form @submit.prevent="submit">
            <div class="bg-gray-900 p-12 rounded-2xl flex flex-col space-y-4 text-center text-white">
                <p class="text-2xl text-white font-bold">Become a part of it</p>
                <input class="bg-gray-800 border-none border p-2 rounded" v-model="form.email" type="email" name="email" placeholder="mail">
                <input class="bg-gray-800 border-none border p-2 rounded" v-model="form.name" type="text" name="name" placeholder="name">
                <input class="bg-gray-800 border-none border p-2 rounded" v-model="form.password" type="password" name="password" placeholder="password">
                <p v-if="error" class="text-red-800">{{ error.name }}</p>
                <Link href="/signin"class="text-white hover:text-blue-500">Already have an account?</Link>
                <button type="submit" class="text-white p-3 rounded-2xl bg-blue-500 hover:bg-blue-600">Sign Up</button>
            </div>
        </form>
    </div>
</template>
