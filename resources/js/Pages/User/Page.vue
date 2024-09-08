<script setup>
import {useForm, usePage} from "@inertiajs/vue3";
import { computed } from 'vue';

const page = usePage()
const user = computed(() => page.props.auth.user);

let logoutForm = useForm({
});

let editForm = useForm({
    email: user.value.email,
    password: "",
    name: user.value.name,
});

let uploadForm = useForm({
    image: null
})

const logout = () => {
    logoutForm.get("/auth/logout")
}
const edit = () => {
    editForm.put("/user")
}
const upload = () => {
    uploadForm.post("/user/pic")
}
const openPicUpload = () => {
    let el = document.querySelector(".bg-gray-700");
    el.style.display = "flex";
}
</script>

<template>

    <div class="flex justify-center items-center h-screen">
        <div class="grid gap-5 bg-gray-800 bg-opacity-70 p-12 rounded-lg shadow">
            <form @submit.prevent>
                <div class="">
                    <div class="text-center flex justify-center">
                        <div class="flex gap-10 text-center">
                            <div class="grid items-center gap-y-5">
                                <span class="text-white font-bold">Name</span>
                                <span class="text-white font-bold">Email</span>
                                <span class="text-white font-bold">Password</span>
                            </div>
                            <div class="grid gap-y-5">
                                <input
                                    class="text-md rounded-lg text-sm bg-gray-800 text-white p-3 border border-gray-700"
                                    v-model="editForm.name"
                                    placeholder="Name"
                                >
                                <input
                                    class="text-md rounded-lg text-sm bg-gray-800 text-white p-3 border border-gray-700"
                                    v-model="editForm.email"
                                    placeholder="Email"
                                >
                                <input
                                    class="text-md rounded-lg text-sm bg-gray-800 text-white p-3 border border-gray-700"
                                    v-model="editForm.password"
                                    placeholder="Password"
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <button v-on:click="edit" class="font-medium p-2 px-10 m-2 text-gray-900 bg-white border-gray-200 rounded-s-lg rounded-r-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-900 dark:focus:ring-blue-500 dark:focus:text-white">Edit</button>
                    <button v-on:click="logout" class="font-medium p-2 px-10 m-2 text-gray-900 bg-white border-gray-200 rounded-s-lg rounded-r-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-900 dark:focus:ring-blue-500 dark:focus:text-white">Log Out</button>
                </div>
            </form>
        </div>
    </div>
</template>
