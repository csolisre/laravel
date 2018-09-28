<template>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form-component @new="addPost"></form-component>
            <post-component
                    v-for="(post, index) in posts"
                    :key="post.id"
                    :post="post"
                    @delete="deletePost(index)"
                    @update="updatePost(index, arguments)"><!--(:post=post) el primer valos es lo que se quiere enviar y el segundo valor es el objeto y sus propiedades aqui envia la informacion que jalamos en props en el modelo de post--></post-component>

        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                posts:[]
            }
        },
        mounted(){
            axios.get('/posts').then((response)=>{
                this.posts = response.data;
            });
        },
        methods:{
          addPost(post){
              this.posts.push(post)
          },
            deletePost(index){
                this.posts.splice(index, 1);
            },
            updatePost(index, post){ /*este segundo valor es que tomamos que emitio el update*/
              this.posts[index]= post;
            }
        }
    }
</script>

