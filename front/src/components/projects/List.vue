<template>
    <v-layout row wrap>
        <v-flex xs3 v-for="n in 3" :key="n">
            <v-card color="blue-grey lighten-2" class="white--text">
                <v-card-title>
                    <div class="headline">App mobile with Vue</div>
                </v-card-title>
                <v-card-text class="white--text">
                    {{ text }}
                </v-card-text>
                <v-card-actions>
                    <v-btn text dark>Ver +</v-btn>
                </v-card-actions>
            </v-card>
        </v-flex>

        <v-flex xs3> 
            <projects-create></projects-create>
        </v-flex>
    </v-layout>
    
</template>

<script>
import ProjectCreate from './Create';


export default {
    data() {
        return {
            text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s."
        }
    },
    components: {
        'projects-create': ProjectCreate
    }   
}
</script>