<template>
    <div class="container mx-auto">
    <div class="flex flex-row">
    <div class="grid grid-cols-4 gap-4">

            <div v-for="exchange in exchanges.data" :key="exchange.id" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="" v-bind:src="exchange.image" alt="{{exchange.name}}">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{exchange.name}}</div>
                    <p class="text-gray-700 text-base">
                        {{exchange.url}}
                    </p>
                </div>

            </div>

    </div>
    </div>
    </div>
</template>
<script>
    import { Head, Link } from '@inertiajs/inertia-vue3';
    export default {
        props:{
            exchanges:Object
        }
    }
</script>
