<template>
    <div v-if="!registerActive" class="card login" v-bind:class="{ error: emptyFields }">
        <h1>Sign In</h1>
        <form action="javascript:void(0)" method="post" class="form-group">
            <input v-model="formData.email" type="email" class="form-control" placeholder="Email" required>
            <input v-model="formData.password" type="password" class="form-control" placeholder="Password"
                   required>
            <button type="submit" :disabled="processing" @click="submit" class="btn btn-primary">
                {{ processing ? "Please wait" : "Login" }}
            </button>
            <p>Don't have an account?
                <a href="#" @click="hasAccount">Sign up here</a>
            </p>
        </form>
    </div>
</template>

<script>
export default {
    name: "Login",
    props: {
        registerActive: Boolean,
        emptyFields: Boolean,
        formData: {
            email: String,
            password: String,
        },
        processing: Boolean,
        submit: Function,
        hasAccount: Function,
    }
}
</script>

