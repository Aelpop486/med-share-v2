<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm } from "@inertiajs/vue3";

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
});

const submit = () => {
    form.post(route("password.email"));
};
</script>

<template>
    <GuestLayout>
        <Head title="Forgot Password" />

        <div
            v-if="status"
            class="mb-4 font-medium text-sm text-green-600 dark:text-green-400"
        >
            {{ status }}
        </div>

        <div class="w-full max-w-md mx-auto p-6">
            <div
                class="mt-7 bg-white rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700 border-2 border-indigo-300"
            >
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h1
                            class="block text-2xl font-bold text-gray-800 dark:text-white"
                        >
                            Forgot password?
                        </h1>
                        <p
                            class="mt-2 text-sm text-gray-600 dark:text-gray-400"
                        >
                            Forgot your password? No problem. Just let us know
                            your email address and we will email you a password
                            reset link that will allow you to choose a new one.
                            <a
                                class="text-blue-600 decoration-2 hover:underline font-medium"
                                :href="route('login')"
                            >
                                Login here
                            </a>
                        </p>
                    </div>

                    <div class="mt-5">
                        <form @submit.prevent="submit">
                            <div class="grid gap-y-4">
                                <div>
                                    <label
                                        for="email"
                                        class="block text-sm font-bold ml-1 mb-2 dark:text-white"
                                        >Email address</label
                                    >
                                    <div class="relative">
                                        <input
                                            id="email"
                                            type="email"
                                            v-model="form.email"
                                            required
                                            autofocus
                                            autocomplete="username"
                                            class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                        />
                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.email"
                                        />
                                    </div>
                                </div>
                                <PrimaryButton
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                >
                                    Email Password Reset Link
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
