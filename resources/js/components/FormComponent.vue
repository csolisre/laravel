<template>
    <div class="card">
        <div class="card-header">My Postst</div>
        <div class="card-body">
            <form action="" v-on:submit.prevent="createPub()">
                <div class="form-group">
                    <label for="post"></label>
                    <input type="text" class="form-control" name="post" v-model="body">
                    <span  class="alert-danger"></span>
                </div>
                <button class="btn btn-primary" type="submit" >Publish</button>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        data(){

          return{

              body:''/* esta es la infoamcion que vamos a jalar para crear el nuevo elemento y esta declarada como v-model para obtener el valor dentro de un elemento*/

          }
        },
        mounted(){
          console.log('montado')
        },
        methods:{
            createPub(){
                const params={
                    body:this.body
                };

                this.body='';

                axios.post('/posts', params)
                    .catch(error=> {
                        this.errors= error.response.data
                        console.log(this.errors)
                    })
                    .then((response)=>{
                    const post = response.data;

                    this.$emit('new', post) /*generas el evento que espera la lista de posts*/

                })


               /* let post = {
                    id:2,
                    body: this.body, /!*envías el body a la lista*!/
                    created:'12/05/2018'
                };*/
            }
        }
    }
</script>

