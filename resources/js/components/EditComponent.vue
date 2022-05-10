<template>
    <tr :class="this.$parent.isEdit(human.id) ? '' : 'd-none'">
        <th scope="row">{{ human.id }}</th>
        <td><input type="text" v-model="name" class="form-control"></td>
        <td><input type="number" v-model="age" class="form-control"></td>
        <td><input type="text" v-model="job" class="form-control"></td>
        <td><a href="#" @click.prevent="updatePerson(human.id)" class="btn btn-success">Обновить</a></td>
        <td><a href="#" @click.prevent="deletePerson(human.id)" class="btn btn-danger">Удалить</a></td>
    </tr>
</template>
<script>

export default {
    name: "EditComponent",

    data() {
        return {
            name: '',
            age: null,
            job: '',
        }
    },

    props: [
        'human'
    ],

    mounted() {
    },

    methods: {
        updatePerson(id) {
            this.$parent.editPersonID = null
            axios.patch(`api/people/${id}`, {
                name: this.name,
                age: this.age,
                job: this.job
            })
                .then(response => {
                    console.log(response);
                    this.$parent.getPeople()
                })
        },

        deletePerson(id) {
            this.$parent.deletePerson(id)
        },
    },

    computed: {},

    components: {}
}
</script>

<style scoped>

</style>
