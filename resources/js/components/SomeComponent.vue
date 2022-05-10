<template>
    <div class="col-md-8 text-center">Some Component</div>
</template>
<script>

export default {
    name: "SomeComponent",

    // data() {
    //     return {
    //     }
    // },

    mounted() {
        this.$parent.$parent.parentLog();
    },

    methods: {
        indexSomeComponent() {
            console.log('this is some component');
        }
    },


    // computed: {
    //
    // },
    //
    // components: {
    // }
}
</script>

<style scoped>

</style>
