<template>
    <div class="container-fluid d-flex p-5">
        <div class="w-50">
            <div class="d-content post-img">
                <img class="img-fluid mx-auto d-block" :src="imgUrl">
            </div>
        </div>
        <div class="d-flex w-50 flex-column justify-content-around">
            <h5>{{ post.created_at }}</h5>
            <h2 class="d-flex post-title">{{ post.title }}</h2>
            <h3>{{ post.author.name }}</h3>
            <p>
                {{ post.excerpt + '...' }}
            </p>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'PostCardComponent',
        data() {
            return {
                imgUrl: '/thumbs/'
            }
        },
        props: {
            post: Object

        },
        mounted() {
            this.imgUrl += this.post.thumb;
            this.convertDate();
        },
        methods: {
            convertDate() {
                let date = new Date(this.post.created_at);
                date = (date.getDate() + '/' + date.getMonth() + '/' + date.getFullYear())
                return  this.post.created_at = date;
            }
        }
    }
</script>
<style scoped>
.post-title {
    color: #7a29d0;
    font-family: 'Bree Serif', serif;
}
.post-img {
    height: 100%;
    width: 80%;
}
.d-content{
    display: contents;
}

</style>
