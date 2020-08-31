<template>
    <div>
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message_content">
                        Message content
                    </label>
                    <textarea class="border rounded" name="message_content" id="message_content" cols="30" rows="10"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
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
    export default {}
</script>
