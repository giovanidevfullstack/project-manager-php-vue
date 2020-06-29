<template>
    <v-card color="teal accent-3">
        <v-card-title>
            <div class="headline">Adicionar projeto</div>
        </v-card-title>

        <v-container>
            <v-form ref="form" v-model="valid" xs12>
                <v-text-field
                id="project-title"
                v-model="data.title"
                :rules="validation.title"
                label="Título"
                required
                ></v-text-field>

                <div v-show="data.title">
                    <v-textarea
                        v-model="data.description"
                        label="Descrição"                  
                    ></v-textarea>


                    <!-- Campo de hora -->
                    <!-- 
                        ver comportamento do slot="activator"   
                        07:47    
                    -->
                    <v-menu
                        ref="menu"
                        v-model="menu"
                        :close-on-content-click="false"
                        :return-value.sync="data.due_date"
                    >

                        <v-text-field
                            v-model="data.due_date"
                            label="Data de entrega"
                            readonly
                        ></v-text-field>

                        <v-date-picker
                            v-model="data.due_date"
                            no-title
                            scrollable> 

                            <v-btn flat color="primary" @click="menu = false">Cancelar</v-btn>    
                            <v-btn flat color="primary" @click="$refs.menu.save(data.due_date)">Ok</v-btn> 
                        </v-date-picker>                    
                    </v-menu>

                    <v-menu
                        ref="menuTime"
                        v-model="menu2"
                        :close-on-content-click="false"
                        :return-value.sync="due_date_time"
                    >     

                        <v-text-field
                            v-model="due_date_time"
                            label="Hora da entrega"
                            readonly
                        ></v-text-field>    

                        <v-time-picker
                            v-model="due_date_time"> 

                            <v-btn flat color="primary" @click="menu2 = false">Cancelar</v-btn>    
                            <v-btn flat color="primary" @click="$refs.menuTime.save(due_date_time)">Ok</v-btn>                        
                        </v-time-picker>
                    </v-menu>
                    <!-- Campo de hora -->

                    <v-btn dark text @click="submit">Salvar</v-btn>
                </div>                
            </v-form>
        </v-container>
    </v-card>
</template>

<script>
export default {
    data() {
        return {
            valid: false,
            menu: false,
            menu2: false,
            data: {},
            due_date_time: '12:00',
            validation: {
                title: [
                    v => !!v || "Titulo obrigatório"
                ]
            }
        }
    },
    methods: {
        submit() {
            this.data.due_date =  this.data.due_date + ' ' +  this.due_date_time + ':00';
            console.log(this.data);
        }
    }
}
</script>