<template>
    <v-layout row wrap>
        <v-flex xs12>
            <h2 class="display-1 mb-4">Projetos</h2>
        </v-flex>

        <v-container grid-list-md>
            <router-view></router-view>
        </v-container>
    </v-layout>
</template>

<script>
export default {
    data() {
        return {
            text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s."
        }
    }    
}
</script>