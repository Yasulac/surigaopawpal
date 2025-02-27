<template>
    <div>
        <h1>Create New User</h1>
        <form @submit.prevent="createUser">
            <label for="name">Name:</label>
            <input type="text" v-model="user.name" id="name" required />

            <label for="email">Email:</label>
            <input type="email" v-model="user.email" id="email" required />

            <label for="contact_no">Contact No:</label>
            <input type="text" v-model="user.contact_no" id="contact_no" />

            <label for="password">Password:</label>
            <input type="password" v-model="user.password" id="password" required />

            <button type="submit">Create</button>
        </form>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            user: {
                name: "",
                email: "",
                contact_no: "",
                password: "",
            },
        };
    },
    methods: {
        createUser() {
            axios
                .post("http://127.0.0.1:8000/api/users", this.user, {
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem('token')}`,
                    },
                })
                .then(() => {
                    this.$router.push("/adminview"); // Redirect to admin dashboard after user is created
                })
                .catch((error) => {
                    console.error("Failed to create user:", error);
                });
        },
    },
};
</script>
``
