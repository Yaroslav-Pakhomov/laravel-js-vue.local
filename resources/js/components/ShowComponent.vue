<template>
    <tr :class="this.$parent.isEdit(human.id) ? 'd-none' : ''">
        <th scope="row">{{ human.id }}</th>
        <td>{{ human.name }}</td>
        <td>{{ human.age }}</td>
        <td>{{ human.job }}</td>
        <td><a href="#" @click.prevent="changeEditPersonID(human.id, human.name, human.age, human.job)"
               class="btn btn-success">Редактировать</a></td>
        <td><a href="#" @click.prevent="deletePerson(human.id)" class="btn btn-danger">Удалить</a></td>
        <!--        <td><a href="#" @click.prevent="this.$parent.indexLog()" class="btn btn-danger">Удалить</a></td>-->
    </tr>
</template>
<script>

export default {
    name: "ShowComponent",

    data() {
        return {}
    },

    props: [
        'human'
    ],

    mounted() {
        this.$parent.indexLog()
    },

    methods: {
        changeEditPersonID(id, name, age, job) {
            this.$parent.editPersonID = id
            let editName = `edit_${id}`
            let fullEditName = this.$parent.$refs[editName][0]
            fullEditName.name = name
            fullEditName.age = age
            fullEditName.job = job
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
