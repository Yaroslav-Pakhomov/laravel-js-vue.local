<template>
    <div class="container">
        <div class="row justify-content-center w-50 m-auto">
            <div class="col-md-8 text-center">Create Component</div>
            <div class="mb-3">
                <input type="text" class="form-control" v-model="name" id="name" placeholder="Имя">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" v-model="age" id="age" placeholder="Возраст">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" v-model="job" id="job" placeholder="Должность">
            </div>
            <div class="mb-3">
                <button @click.prevent="addPersons()" class="form-control btn btn-primary form-control">
                    Добавить
                </button>
            </div>
        </div>
        <SomeComponent ref="somecomponent" :obj="obj"></SomeComponent>
    </div>
</template>
<script>
import SinglePostComponent from "./SinglePostComponent";
import SomeComponent from "./SomeComponent";

export default {
    name: "CreateComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null,
            obj: {
                color: "white",
                number: "10",
                isPublished: "true",
            },
        }
    },

    mounted() {
        // this.$parent.$refs.index.indexLog();
    },

    methods: {
        addPersons() {
            // console.log( this.name, this.age, this.job)
            axios.post('/api/people', {
                name: this.name,
                age: this.age,
                job: this.job,
            })
                .then(personRes => {
                    console.log(personRes)
                    this.name = null
                    this.age = null
                    this.job = null
                    this.$parent.$refs.index.getPeople()
                    // this.persons = personRes.data;
                })
                .catch(error => {
                    console.log(error);
                })
            // .finally({
            //
            // })
        }
    },

    // computed: {
    //     ivanJob() {
    //         // return this.name + ' работает в магазине. Ему ' + this.age + ' года.'
    //     }
    // },

    computed: {},

    components: {
        SinglePostComponent,
        SomeComponent
    }
}
</script>

<style scoped>

</style>
