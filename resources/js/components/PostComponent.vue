<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">Post Component</div>
            <br>
            <br>
            <!--            <div class="col-md-8 text-center">Name: {{ someObj.personalName }}</div>-->
            <br>
            <br>
            <!--            <div class="col-md-8 text-center">Name: {{ name }}</div>-->
            <div class="col-md-8 text-center">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Job</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="person in persons">
                        <th scope="row">{{ person.id }}</th>
                        <td>{{ person.name }}</td>
                        <td>{{ person.age }}</td>
                        <td>{{ person.job }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <button class="col-md-8 text-center" @click="sayHello">Hello</button>
            <button class="col-md-8 text-center" @click="sayHi">Hi</button>
            <!--            <div class="col-md-8 text-center">Job: {{ ivanJob }}</div>-->
            <SinglePostComponent></SinglePostComponent>
        </div>
    </div>
</template>
<script>
import SinglePostComponent from "./SinglePostComponent";

export default {
    name: "PostComponent",

    // data() {
    //     return {
    //         name: 'Иван',
    //         age: 23,
    //         boolean: false,
    //         someNull: null,
    //         array: [
    //             [
    //
    //             ]
    //         ],
    //         someObj: {
    //             personalName: 'Вася',
    //         }
    //     }
    // },

    data() {
        return {
            persons: [
                {
                    id: 1,
                    name: 'Ivan',
                    age: 23,
                    job: 'coach',
                },
                {
                    id: 2,
                    name: 'Elena',
                    age: 17,
                    job: 'free',
                },
                {
                    id: 3,
                    name: 'Semen',
                    age: 25,
                    job: 'seller',
                },
            ]
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

    // computed: {
    //     ivanJob() {
    //         // return this.name + ' работает в магазине. Ему ' + this.age + ' года.'
    //     }
    // },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
