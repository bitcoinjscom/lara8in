<template>
    <Head>
        <title>My Web</title>
    </Head>
    <div class="container">

            <slot></slot>

    </div>

</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    props: {
        title: String,
    },

    components: {
        Head,
        Link,
    },

    data() {

    },

    methods: {

    }
})
</script>
