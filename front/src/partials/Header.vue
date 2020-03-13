<template>
    <div>
        <v-navigation-drawer app v-model="drawer" clipped color="light-blue lighten-1">
            <v-list>

                <v-list-item to="/projects" color="#FFF">
                    <v-list-item-action>
                        <v-icon>dashboard</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Projetos</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>   

                <v-list-item color="#FFF">
                    <v-list-item-action>
                        <v-icon>schedule</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Agenda</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>    

            </v-list>
        </v-navigation-drawer>

        <v-app-bar app clipped-left color="light-blue darken-4" dense dark>
            <v-app-bar-nav-icon @click.prevent="drawer = !drawer"></v-app-bar-nav-icon>

            <v-toolbar-title>Project Manager</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-toolbar-items>
                <v-btn text>
                    <v-icon>exit_to_app</v-icon> Exit
                </v-btn>
            </v-toolbar-items>
        </v-app-bar>
    </div>
</template>

<script>
export default {
    data () {
        return {
            drawer: true
        }
    }
}
</script>