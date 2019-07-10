<template>
    <v-container>
        <h1>Welcome to Pridatect</h1>
        <v-container>
            <br>
            <v-card >
                <v-card-title><h2>Ejercicio 1</h2></v-card-title>

                    <v-container>
                        <v-card color="black">
                            <img class="ex1" src="../assets/ex1.gif"/>
                        </v-card>
                        <br>
                        <p>Introduce un input como el que aparece en la imagen y haz que cuándo escribas en el input se vea escrito de derecha a izquierda</p>
                        <p>En pridatect utilizamos <a href="https://vuetifyjs.com/en/getting-started/quick-start">Vuetify</a>,.</p>
                            si te sirve de ayuda, puedes utilizar uno de los componentes que ofrece Vuetify.
                        <br>
                    </v-container>
            </v-card>
            <br>
            <Ejercicio1 />
        </v-container>
        <v-container>
            <ejercicio2></ejercicio2>
        </v-container>
    </v-container>
</template>

<script>
    import Ejercicio1 from "./Ejercicios/Ejercicio1";
    import Ejercicio2 from "./Ejercicios/Ejercicio2";
    export default {
        name: "Pridatect",
        components: {Ejercicio1, Ejercicio2},
        computed: {
        },
        data () {
            return {
            }
        },
        methods: {
        }
    }
</script>

<style scoped>
.ex1 {
    max-width: 100%;
    border: 3px solid lightblue;

}
</style>
