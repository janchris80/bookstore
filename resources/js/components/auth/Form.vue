<template>
    <div class="login-page">
        <transition name="fade">
            <div v-if="!registerActive" class="wallpaper-login"></div>
        </transition>
        <div class="wallpaper-register"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8 mx-auto">
                    <Login
                        :register-active="registerActive"
                        :empty-fields="emptyFields"
                        :form-data="authData"
                        :processing="processing"
                        :submit="doLogin"
                        :has-account="hasAccount"
                    />

                    <Register
                        :register-active="registerActive"
                        :empty-fields="emptyFields"
                        :form-data="formData"
                        :processing="processing"
                        :submit="doRegister"
                        :has-account="hasAccount"
                    />

                </div>
            </div>

        </div>
    </div>
</template>

<script>
import {mapActions} from 'vuex'
import Login from "./Login";
import Register from "./Register";

export default {
    name: "Form",
    components: {Register, Login},
    data() {
        return {
            registerActive: false,
            emptyFields: false,

            formData: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            },

            authData: {
                email: '',
                password: '',
            },

            processing: false
        }
    },

    methods: {
        hasAccount() {
            this.registerActive = !this.registerActive;
            this.emptyFields = false;
        },

        doLogin() {
            if (this.authData.email && this.authData.password) {
                this.login();
            } else {
                this.emptyFields = true;
            }
        },

        doRegister() {
            if (this.formData.email && this.formData.password && this.formData.password_confirmation) {
                this.register();
            } else {
                this.emptyFields = true;
            }
        },

        ...mapActions({
            signIn: 'auth/login'
        }),

        async login() {
            this.processing = true
            await axios.get('/sanctum/csrf-cookie')
            await axios.post('/api/login', this.authData)
                .then(() => {
                    this.$toast.success('Successfully login')
                    this.signIn();
                }).catch(({response: {data}}) => {
                    const {errors} = data
                    const keys = Object.keys(errors)
                    keys.forEach((val, i) => {
                        this.$toast.error(errors[val][i])
                    })
                }).finally(() => {
                    this.processing = false
                })
        },

        async register() {
            this.processing = true
            await axios.post('/api/register', this.formData)
                .then(() => {
                    this.signIn()
                    this.$toast.success('Successfully Register')
                }).catch(({response: {data}}) => {
                    const {errors, message} = data
                    const keys = Object.keys(errors)
                    keys.forEach((val, i) => {
                        this.$toast.error(errors[val][i])
                    })
                }).finally(() => {
                    this.$toast.success('Redirect to dashboard')
                    this.processing = false
                })
        }
    }
}

</script>

<style>
p {
    line-height: 1rem;
}

.card {
    padding: 20px;
}

.form-group input {
    margin-bottom: 20px;
}

.login-page {
    align-items: center;
    display: flex;
    height: 100vh;
}

.login-page .wallpaper-login {
    background-size: cover;
    height: 100%;
    position: absolute;
    width: 100%;
}

.login-page .fade-enter-active, .login-page .fade-leave-active {
    transition: opacity 0.5s;
}

.login-page .fade-enter, .login-page .fade-leave-to {
    opacity: 0;
}

.login-page .wallpaper-register {
    background-size: cover;
    height: 100%;
    position: absolute;
    width: 100%;
    z-index: -1;
}

.login-page h1 {
    margin-bottom: 1.5rem;
}

.error {
    animation-name: errorShake;
    animation-duration: 0.3s;
}

@keyframes errorShake {
    0% {
        transform: translateX(-25px);
    }
    25% {
        transform: translateX(25px);
    }
    50% {
        transform: translateX(-25px);
    }
    75% {
        transform: translateX(25px);
    }
    100% {
        transform: translateX(0);
    }
}


</style>
