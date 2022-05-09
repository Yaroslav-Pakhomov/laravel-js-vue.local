<template>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Должность</th>
                <th scope="col">Редактирование</th>
                <th scope="col">Удаление</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="human in people">
                <tr :class="isEdit(human.id) ? 'd-none' : ''">
                    <th scope="row">{{ human.id }}</th>
                    <td>{{ human.name }}</td>
                    <td>{{ human.age }}</td>
                    <td>{{ human.job }}</td>
                    <td><a href="#" @click.prevent="changeEditPersonID(human.id, human.name, human.age, human.job)" class="btn btn-success">Редактировать</a></td>
                    <td><a href="#" @click.prevent="deletePerson(human.id)" class="btn btn-danger">Удалить</a></td>
                </tr>
                <tr :class="isEdit(human.id) ? '' : 'd-none'">
                    <th scope="row">{{ human.id }}</th>
                    <td><input type="text" v-model="name" class="form-control"></td>
                    <td><input type="number" v-model="age" class="form-control"></td>
                    <td><input type="text" v-model="job" class="form-control"></td>
                    <td><a href="#" @click.prevent="updatePerson(human.id)" class="btn btn-success">Обновить</a></td>
                    <td><a href="#" @click.prevent="deletePerson(human.id)" class="btn btn-danger">Удалить</a></td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>
<script>

export default {
    name: "IndexComponent",

    data() {
        return {
            people: [],
            editPersonID: null,
            name: '',
            age: null,
            job: '',
        }
    },

    mounted() {
        this.getPeople()
    },

    methods: {
        getPeople() {
            axios.get('api/people/')
                .then(response => {
                    // console.log(response)
                    this.people = response.data
                })
                .catch(error => {
                    console.log(error.response);
                })
        },

        updatePerson(id) {
            this.editPersonID = null
            axios.patch(`api/people/${id}`, {
                name: this.name,
                age: this.age,
                job: this.job
            })
                .then(response => {
                    console.log(response);
                    this.getPeople()
                })
        },

        deletePerson(id) {
            axios.delete(`api/people/${id}`)
                .then(response => {
                    console.log(response);
                    this.getPeople()
                })
        },

        changeEditPersonID(id, name, age, job) {
            this.editPersonID = id
            this.name = name
            this.age = age
            this.job = job
        },

        isEdit(id) {
            return this.editPersonID === id
        },

    },

    computed: {},

    components: {}
}
</script>

<style scoped>

</style>
