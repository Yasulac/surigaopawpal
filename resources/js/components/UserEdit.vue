<template>
    <div>
        <h1>Edit User</h1>
        <form @submit.prevent="updateUser">
            <label for="name">Name:</label>
            <input type="text" v-model="user.name" id="name" required />

            <label for="email">Email:</label>
            <input type="email" v-model="user.email" id="email" required />

            <label for="contact_no">Contact No:</label>
            <input type="text" v-model="user.contact_no" id="contact_no" />

            <label for="password">Password:</label>
            <input type="password" v-model="user.password" id="password" />

            <button type="submit">Update</button>
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
    created() {
        const userId = this.$route.params.id;
        this.getUser(userId);
    },
    methods: {
        getUser(id) {
            axios
                .get(`http://127.0.0.1:8000/api/users/${id}`, {
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem('token')}`,
                    },
                })
                .then((response) => {
                    this.user = response.data;
                })
                .catch((error) => {
                    console.error("Failed to fetch user:", error);
                });
        },
        updateUser() {
            const userId = this.$route.params.id;
            axios
                .put(`http://127.0.0.1:8000/api/users/${userId}`, this.user, {
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem('token')}`,
                    },
                })
                .then(() => {
                    this.$router.push("/adminview"); // Redirect back to admin dashboard
                })
                .catch((error) => {
                    console.error("Failed to update user:", error);
                });
        },
    },
};
</script>
