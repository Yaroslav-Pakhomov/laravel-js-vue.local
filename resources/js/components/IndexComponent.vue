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
                <ShowComponent :human="human" :ref="`show_${human.id}`"></ShowComponent>
                <EditComponent :human="human" :ref="`edit_${human.id}`"></EditComponent>
            </template>
            </tbody>
        </table>
    </div>
</template>
<script>

import EditComponent from "./EditComponent";
import ShowComponent from "./ShowComponent";

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
        // this.$parent.parentLog();
        // this.$parent.$refs.create.$refs.somecomponent.indexSomeComponent();
    },

    methods: {
        getPeople() {
            axios.get('api/people')
                .then(response => {
                    // console.log(response)
                    this.people = response.data
                })
                .catch(error => {
                    console.log(error.response);
                })
        },

        deletePerson(id) {
            console.log(id);
            axios.delete(`api/people/${id}`)
                .then(response => {
                    console.log(response);
                    this.getPeople()
                })
        },

        isEdit(id) {
            return this.editPersonID === id
        },

        indexLog() {
            console.log('this is index component');
        }

    },

    computed: {},

    components: {
        EditComponent,
        ShowComponent,
    }
}
</script>

<style scoped>

</style>
