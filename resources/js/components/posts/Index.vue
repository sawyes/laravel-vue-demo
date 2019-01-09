<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Home Component</div>

                <div class="card-body">
                    <div v-for="post in posts" :key="post.id">
                        <div class="title">

                            <router-link :to="{ name: 'posts', params: {id: post.id} }">{{ post.title }}</router-link>
                        </div>
                        <div class="body">{{ post.body }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/api/posts').then(response=>{
                this.posts = response.data.data;
            });
        },
        data() {
            return {
                posts: []
            }
        }
    }
</script>
