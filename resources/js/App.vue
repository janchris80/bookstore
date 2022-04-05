<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <router-link :to="{name:'dashboard'}" class="nav-link">Dashboard</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name:'book'}" class="nav-link">Books</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name:'library'}" class="nav-link">Libraries</router-link>
                </li>
                <li class="nav-item dropdown d-flex">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ user.name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" @click="logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <main class="">
        <router-view></router-view>
    </main>
</template>

<script>
import {mapActions} from 'vuex'

export default {
    name: "App",

    data() {
        return {
            user: this.$store.state.auth.user
        }
    },

    mounted() {
        console.log('dashboard layout')
    },

    methods: {
        ...mapActions({
            signOut: "auth/logout"
        }),
        async logout() {
            await axios.get('/api/ogout')
                .then(() => {
                    this.signOut()
                    this.$router.push({name: "login"})
                })
        }
    }
}
</script>
