<template>
    <div v-if="registerActive" class="card register" v-bind:class="{ error: emptyFields }">
        <h1>Sign Up</h1>
        <form class="form-group">
            <input v-model="formData.name" type="text" class="form-control" placeholder="Name" required>
            <input v-model="formData.email" type="email" class="form-control" placeholder="Email" required>
            <input v-model="formData.password" type="password" class="form-control" placeholder="Password"
                   required>
            <input v-model="formData.password_confirmation" type="password" class="form-control"
                   placeholder="Confirm Password" required>
            <button type="submit" :disabled="processing" @click="submit" class="btn btn-primary">
                {{ processing ? "Please wait" : "Register" }}
            </button>
            <p>Already have an account?
                <a href="#" @click="hasAccount">Sign in here</a>
            </p>
        </form>
    </div>
</template>

<script>
export default {
    name: "Register",
    props: {
        registerActive: Boolean,
        emptyFields: Boolean,
        formData: {
            name: String,
            email: String,
            password: String,
            password_confirmation: String
        },
        processing: Boolean,
        submit: Function,
        hasAccount: Function,
    }
}
</script>
