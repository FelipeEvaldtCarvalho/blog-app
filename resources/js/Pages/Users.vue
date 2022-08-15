<template >
    <div>
        <navbar-component/>
        <h1>users page</h1>
    </div>
</template>
<script>
    import NavbarComponent from "../Components/NavbarComponent";
    export default {
        name: 'Users',
        data() {
           return {
           }
        },
        components:{
            NavbarComponent,
        },
    };
</script>
<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
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
