<template>
    <div class="card">
        <div class="card-header">Publish on : {{post.created_at}} updated at: {{post.updated_at}} id{{post.id}}</div>
        <div class="card-body">
            <input v-if="editMode" type="text" class="form-control" v-model="post.body">
            <p v-else>{{post.body}}</p>

        </div>
        <div class="panel-footer">
            <button v-if="editMode" class="btn btn-success" v-on:click="updateP()">Save</button>
            <button v-else class="btn btn-default" v-on:click="editP()">Edit</button>
            <button class="btn btn-danger" v-on:click="deleteP()">Delete</button>
        </div>
    </div>
</template>

<script>
    export default {
        props:['post'], /*con esta propiedad jalas lo que hay dentro del elemento en este caso esto esta declarado en MyPostsComponent.*/
        data() {
            return {
                editMode: false
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            deleteP(){
                axios.delete(`/posts/${this.post.id}`).then(()=>{
                    this.$emit('delete')
                });
            },
            editP(){
                this.editMode =true;
            },
            updateP(){
                const params ={
                    body: this.post.body
                }
                axios.put(`/posts/${this.post.id}`, params).then((response)=>{
                    this.editMode = false;
                    const post= response.data;
                    this.$emit('update', post) /*emite la fucncion y envia el valor del objeto*/
                });
            }
        }
    }
</script>
