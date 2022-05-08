<template>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Должность</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="human in people">
                <th scope="row">{{ human.id }}</th>
                <td>{{ human.name }}</td>
                <td>{{ human.age }}</td>
                <td>{{ human.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>

export default {
    name: "IndexComponent",

    data() {
        return {
            people: []
        }
    },

    mounted() {
        this.getPeople()
    },

    methods: {
        getPeople() {
            axios.get('api/people/')
                .then(response => {
                    console.log(response)
                    this.people = response.data
                })
                .catch(error => {
                    console.log(error.response);
                })
        }
    },

    computed: {},

    components: {}
}
</script>

<style scoped>

</style>
