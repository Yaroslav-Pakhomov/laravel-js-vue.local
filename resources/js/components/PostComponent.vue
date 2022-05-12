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
                <h6>Все</h6>
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
                <br>
                <br>
                <br>
                <h6>Больше 20 лет</h6>
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
                    <tr v-for="person in persons" v-if="person.age > 20">
                        <th scope="row">{{ person.id }}</th>
                        <td>{{ person.name }}</td>
                        <td>{{ person.age }}</td>
                        <td>{{ person.job }}</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <h6>ID больше 3</h6>
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
                    <tr v-for="person in personIDMoreThree">
                        <th scope="row">{{ person.id }}</th>
                        <td>{{ person.name }}</td>
                        <td>{{ person.age }}</td>
                        <td>{{ person.job }}</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <h6>ID меньше 3</h6>
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
                    <tr v-for="person in personIDLessThree">
                        <th scope="row">{{ person.id }}</th>
                        <td>{{ person.name }}</td>
                        <td>{{ person.age }}</td>
                        <td>{{ person.job }}</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <h6>ID равно 3</h6>
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
                    <tr v-for="person in personIDEquallyThree">
                        <th scope="row">{{ person.id }}</th>
                        <td>{{ person.name }}</td>
                        <td>{{ person.age }}</td>
                        <td>{{ person.job }}</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <br>
            </div>
            <div class="col-md-6 text-center">
                <button class="btn btn-danger col-md-8 text-center" @click="sayHello">Hello</button>
                <br>
                <br>
            </div>
            <div class="col-md-6 text-center">
                <button class="btn btn-dark col-md-8 text-center" @click="sayHi">Hi</button>
                <br>
                <br>
            </div>
            <div class="col-md-8 text-center">Данные Ivan: {{ ivanJob }}</div>
            <br>
            <br>
            <SinglePostComponent></SinglePostComponent>
            <br>
            <br>
            <CreateComponent ref="create"></CreateComponent>
            <br>
            <br>
            <IndexComponent ref="index"></IndexComponent>

        </div>
    </div>
</template>
<script>
import SinglePostComponent from "./SinglePostComponent";
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";

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
            name: 'Ivan',
            age: '23',
            job: 'seller',
            persons: [],
            // persons: [
            //     {
            //         id: 1,
            //         name: 'Ivan',
            //         age: 23,
            //         job: 'coach',
            //     },
            //     {
            //         id: 2,
            //         name: 'Elena',
            //         age: 17,
            //         job: 'free',
            //     },
            //     {
            //         id: 3,
            //         name: 'Semen',
            //         age: 20,
            //         job: 'seller',
            //     },
            //     {
            //         id: 4,
            //         name: 'Katusha',
            //         age: 34,
            //         job: 'traveler',
            //     },
            //     {
            //         id: 5,
            //         name: 'Ola',
            //         age: 21,
            //         job: 'teacher',
            //     },
            // ]
        }
    },

    mounted() {
        this.getPersons()
        // this.$refs.index.indexLog();
    },

    methods: {
        getPersons() {
            axios.get('/cadre')
                .then(personRes => {
                    this.persons = personRes.data;
                })
                .catch(error => {
                    console.log(error);
                })
                .finally({})
        },

        sayHello() {
            console.log('Hello')
        },
        sayHi() {
            console.log('Hi')
        },

        parentLog() {
            console.log('this is parent component');
        },
    },

    // computed: {
    //     ivanJob() {
    //         // return this.name + ' работает в магазине. Ему ' + this.age + ' года.'
    //     }
    // },

    computed: {
        personIDMoreThree() {
            return this.persons.filter(function (person) {
                return person.id > 3
            })
        },
        personIDLessThree() {
            return this.persons.filter(function (person) {
                return person.id < 3
            })
        },
        personIDEquallyThree() {
            return this.persons.filter(function (person) {
                return person.id === 3
            })
        },
        ivanJob() {
            return this.name + ' работает в магазине. Ему ' + this.age + ' года. Он работает ' + this.job + '.'
        },
    },

    components: {
        SinglePostComponent,
        CreateComponent,
        IndexComponent,
    }
}
</script>

<style scoped>

</style>
