<template>
    <div>
        <div v-if="successMessage" class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">{{ successMessage }}</p>
                </div>
            </div>
        </div>
        <div v-if="errors" role="alert">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                {{ errorMessage }}
            </div>
            <div v-for="error in errors" class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>{{ error }}</p>
            </div>
        </div>
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message_content">
                        Message content
                    </label>
                    <textarea v-model="content" class="border rounded" name="message_content" id="message_content" cols="30" rows="10"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button v-on:click.prevent="sendData" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Send
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2020 Send Email. All rights reserved.
            </p>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                content: null,
                errors: null,
                successMessage: null,
                errorMessage: null,
            }
        },
        methods: {
            sendData() {
                axios.post('/api/email', {
                    content: this.content,
                })
                    .then(response => {
                        this.errorMessage = null;
                        this.errors = null;
                        this.successMessage = response.data.message;
                        this.content = null;
                        console.log(response.data);
                    })
                    .catch((error) => {
                        this.successMessage = null;
                        this.errorMessage = error.response.data.message;
                        this.errors = error.response.data.errors;
                        console.log(error.response.data);
                    });
            },
        }
    }
</script>
