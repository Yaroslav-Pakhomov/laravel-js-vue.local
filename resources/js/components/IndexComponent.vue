<template>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Должность</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="human in people">
                <tr>
                    <th scope="row">{{ human.id }}</th>
                    <td>{{ human.name }}</td>
                    <td>{{ human.age }}</td>
                    <td>{{ human.job }}</td>
                    <td><a href="#" @click.prevent="changeEditPersonID(human.id)"
                           class="btn btn-success">Редактировать</a></td>
                </tr>
                <tr :class="isEdit(human.id) ? '' : 'd-none'">
                    <th scope="row">{{ human.id }}</th>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><a href="#" @click.prevent="changeEditPersonID(null)" class="btn btn-success">Обновить</a></td>
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

        changeEditPersonID(id) {
            // console.log(id);
            this.editPersonID = id
        },

        isEdit(id) {
            return this.editPersonID === id
        }
    },

    computed: {},

    components: {}
}
</script>

<style scoped>

</style>
