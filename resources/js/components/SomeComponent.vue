<template>
    <div class="col-md-12 justify-content-center text-center">
        <br>
        <br>
        <br>
        <div>Some Component</div>
        <div>Color: {{ obj.color }}</div>
        <div>Number: {{ obj.number > 10 ? 'more 10' : 'less 10' }}</div>
        <div>Is published: {{ obj.isPublished ? 'Published' : 'Not Published' }}</div>
        <br>
        <br>
        <br>
    </div>
</template>
<script>

export default {
    name: "SomeComponent",

    data() {
        return {}
    },

    props: [
        'obj',
    ],

    mounted() {
        this.$parent.$parent.parentLog();
    },

    methods: {
        indexSomeComponent() {
            console.log('this is some component');
        }
    },


    computed: {},

    components: {}
}
</script>

<style scoped>

</style>
