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
            <div class="col-md-8 text-center">Job: {{ ivanJob }}</div>
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
            name: 'Иван',
            age: 23,
            boolean: false,
            someNull: null,
            array: [
                [

                ]
            ],
            someObj: {
                personalName: 'Вася',
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

    computed: {
        ivanJob() {
            return this.name + ' работает в магазине. Ему ' + this.age + ' года.'
        }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
