<!--profileDropdown.profileDropdownVisible-->
<template>
    <div
        v-if="profileDropdown.profileDropdownVisible"
        class="position-absolute d-flex flex-column profile-dropdown bg-dark p-3 border rounded"
    >
        <Link
            flex-fill
            v-for="option in profileDropdown.profileDropdownOptions"
            href="/about"
            class="fs-6 link-hover"
        >{{ option.label }}</Link>
    </div>
</template>
<script>
    import {Link} from "@inertiajs/inertia-vue3";
    export default {
        name: 'ProfileDropdownComponent',
        props: {
            profileDropdown: Object
        },
        components: {
            Link
        }
    }
</script>
<style scoped>
.profile-dropdown{
    top: 90px;
    right: 20px;
    gap: 1rem;
}

</style>
