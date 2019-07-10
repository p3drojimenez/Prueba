<template>
<div>
     <v-card >
          <v-container>
              <h3>Ejercicio 1</h3>
            <v-text-field
        
                    placeholder="Escribe aquí"
                    value="Escribe aquí"
                    v-model="text"
            />

            <h3>{{ message }}</h3>
        </v-container>
    </v-card>
</div>
</template>

<script>
    export default {
        name: "Ejercicio1",
        data(){ 
            return{
                text: '',
                message:''
            }
        },
        watch: {
            text(){
                this.message = this.text.split(""). reverse(). join("");
            }
        }
    }
</script>

<style>
.card-text{
    padding: 4px;
}
</style>
