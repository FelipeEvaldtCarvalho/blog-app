<template>
    <div class="stripes"></div>
    <nav class="d-flex justify-content-between align-items-center bg-dark p-4">
        <div class="d-flex align-items-center fs-2 gap-3">
            <Link class="link-hover" href="/users">
                <ion-icon name="logo-facebook"></ion-icon>
            </Link>
            <Link class="link-hover" href="/about">
                <ion-icon name="logo-instagram"></ion-icon>
            </Link>
        </div>
        <div class="d-flex align-items-center h-100">
            <Link class="d-inline-block cat-logo" href="/home">
                <img class="position-absolute" src="/images/logo_no_bg.png" alt="" height="75">
                <img class="shine" src="/images/stars_no_bg.png" alt="" height="75">
            </Link>
        </div>
        <div class="d-flex align-items-center fs-1 gap-3">
            <a class="link-hover navbar-toggler" @blur="hideProfileDrodown" @click="setProfileDrodownVisibility"
               href="#">
                <ion-icon name="person-circle-outline"></ion-icon>
            </a>
            <profile-dropdown-component
                :profileDropdown="profileDropdown"
            />
        </div>
    </nav>
</template>
<script>
import ProfileDropdownComponent from './ProfileDropdownComponent';
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: 'NavbarComponent',
    data() {
        return {
            profileDropdown: {
                profileDropdownVisible: false,
                profileDropdownOptions: {
                    login: {
                        label: 'Fazer login',
                        url: '/login'
                    },
                    register: {
                        label: 'Cadastrar',
                        url: '/register'
                    },
                }
            }
        }
    },
    components: {
        ProfileDropdownComponent,
        Link
    },
    methods: {
        setProfileDrodownVisibility() {
            this.profileDropdown.profileDropdownVisible = !this.profileDropdown.profileDropdownVisible;
        },
        hideProfileDrodown() {
            setTimeout(() => this.profileDropdown.profileDropdownVisible = false, 100);
        }
    }
}
</script>
<style scoped>
.stripes {
    height: 5px;
    width: 100%;
    background: url(/images/stripes.png);
}

.shine {
    opacity: 0;
    transition: .6s;
}

.cat-logo:hover .shine {
    opacity: 1;
}

.link-hover {
    color: #fff;
    transition: .6s;
}

.link-hover:hover {
    color: #7a29d0;
}

</style>
