<template>
    <div class="container">
        <div class="row justify-content-center">
            <br>
            <br>
            <div class="col-md-8 text-center">Post Component</div>
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



    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
