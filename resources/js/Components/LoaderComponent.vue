<template>
    <div class="loader"></div>
</template>
<script>
    export default {
        name: 'LoaderComponent',

    }
</script>
<style scoped>
.loader {
    border: 10px solid #565656;
    border-top: 10px solid #7a29d0;
    border-radius: 50%;
    width: 90px;
    height: 90px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
