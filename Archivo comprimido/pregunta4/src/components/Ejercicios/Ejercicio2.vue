<template>
    <v-card >
        <v-card-title><h2>Ejercicio 2</h2></v-card-title>
            <v-container>
                <br>
                <p>Utilizando Vuex</p>
                <br>
                <p>1. Arregla el código para que se puedan añadir elementos a la siguiente lista</p>
                <p>2. Añade la funcionalidad para que se puedan borrar elementos de la lista</p>
                <p>3. Bonus! Haz que la lista modificada se quede guardada aunque refresques la página.</p>
            </v-container>
            <v-list>
                <v-list-tile
                        v-for="(item, index) in items"
                        :key="index"
                        avatar
                >
                    <v-list-tile-action>
                        <v-btn icon @click="del(item.id)"><v-icon color="pink">close</v-icon> {{ item.id }}</v-btn>
                    </v-list-tile-action>

                    <v-list-tile-content>
                        <v-list-tile-title v-text="item.title"></v-list-tile-title>
                    </v-list-tile-content>

                </v-list-tile>
            </v-list>

            <v-container>
                <v-layout>
                    <v-text-field v-model="data"></v-text-field>
                    <v-btn @click="save">Guardar</v-btn>
                </v-layout>
            </v-container>
    </v-card>
</template>

<script>
    import {mapGetters, mapMutations} from 'vuex';
    export default {
        name: "Ejercicio2",
        computed: {
            ...mapGetters({
                'items': 'items'
            })
        },
        data () {
            return {
                data: null
            }
        },
        methods: {
            ...mapMutations({
                'storeadd': 'add',
                'storedel': 'del',
            }),
            save () {
                this.add();
            },
            del (id){
                this.storedel(id)
            },
            add () {
                if(this.data != '')
                {
                    this.storeadd(this.data)
                    this.data = null;
                }
               
            }

        }
    }
</script>

<style scoped>

</style>
