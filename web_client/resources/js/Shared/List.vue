<template>
    <ul>
        <li><slot></slot></li>
    </ul>
</template>
<script>
    import { defineComponent } from 'vue'
    export default defineComponent({
        props:['title']
    })
</script>
