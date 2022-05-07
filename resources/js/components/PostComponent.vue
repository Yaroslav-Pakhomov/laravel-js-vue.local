<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">Post Component</div>
            <br>
            <br>
            <div class="col-md-8 text-center">Name: {{ someObj.personalName }}</div>
            <br>
            <br>
            <div class="col-md-8 text-center">Name: {{ name }}</div>
            <br>
            <br>
            <button class="col-md-8 text-center" @click="sayHello">Hello</button>
            <br>
            <br>
            <button class="col-md-8 text-center" @click="sayHi">Hi</button>
            <br>
            <br>
            <br>
            <SinglePostComponent></SinglePostComponent>
        </div>
    </div>
</template>
<script>
import SinglePostComponent from "./SinglePostComponent";

export default {
    name: "PostComponent",

    data() {
        return {
            name: 'Ivan',
            age: 23,
            boolean: false,
            someNull: null,
            array: [
                [

                ]
            ],
            someObj: {
                personalName: 'Vasya',
            }
        }
    },

    methods: {
        sayHello() {
            console.log('Hello')
        },
        sayHi() {
            console.log('Hi')
        }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
