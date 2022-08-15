<template >
    <div>
        <navbar-component/>

        <div v-for="post in posts.data">
            <PostCardComponent :post="post"/>
        </div>

        <Link :href="posts.prev_page_url">voltar</Link>
        <Link :href="posts.next_page_url">avançar</Link>
        {{ posts.next_page_url }}

    </div>
</template>
<script>
    import NavbarComponent from "../Components/NavbarComponent";
    import {Link} from "@inertiajs/inertia-vue3";
    import PostCardComponent from "../Components/PostCardComponent";
    export default {
        name: 'Home',
        data() {
           return {
           }
        },
        components:{
            NavbarComponent,
            Link,
            PostCardComponent
        },
        props: {
            posts: Object,
            categories: Array,
            authors: Array,
            currentCategory: String,
            currentAuthor: String,
            postsCreatedAt: Object,
        },
        methods:{
        },
        mounted() {
        }
    };
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:wght@300&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
}
.link-hover{
    text-decoration: none;
    color: #fff;
    transition: .6s;
}
.link-hover:hover{
    color: #7a29d0;
}
</style>
