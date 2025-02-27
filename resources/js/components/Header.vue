<template>
    <section class="header-section">
        <div class="header">
            <div class="header-logo">
                <img src="/public/Assets/images/logo.png" />

            </div>
            <div class="header-menu">
                <div class="header-menu-1">
                    <div class="header-menu-2">
                        <ul class="header-menu-ul">
                            
                                <li><router-link to="/" style="color: white; text-decoration: none;">HOME</router-link></li>
                            
                            <li>
                                <router-link to="/petview" style="color: white; text-decoration: none;">PET</router-link>
                            </li>
                            <li>
                                <router-link to="/givepetview" style="color: white; text-decoration: none;">GIVE PET</router-link>
                            </li>
                            <li>
                                <router-link to="/guideview" style="color: white; text-decoration: none;">GUIDE</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header-actions">
                <!-- Dropdown for authenticated users -->
                <div v-if="isAuthenticated" class="dropdown">
                    <button @click="toggleDropdown" class="dropdown-button">Menu</button>
                    <div v-show="showDropdown" class="dropdown-menu">
                        <div class="dropdown-menu-horizontal">
                            <router-link to="/profileview" class="dropdown-item">Go to Profile</router-link>
                            <button style="margin-left: -5px; margin-top: -10px;" @click="logout" class="dropdown-item">Logout</button>
                        </div>
                    </div>
                </div>

                <!-- Display Sign Up button if NOT authenticated -->
                <div v-else>
                    <router-link to="/signupview">
                        <button>Sign Up</button>
                    </router-link>
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped>
body{
    margin: 0px;
    
}
.header-actions {
    position: relative;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-button {
    background-color: #F1EDED;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    z-index: 10;
    padding: 10px;
}

.dropdown-menu-horizontal {
    display: grid;
    align-items: center;
    gap: 10px; /* Adds spacing between items */
}

.dropdown-item {
    padding: 5px 10px;
    font-size: 14px;
    text-decoration: none;
    color: #333;
    cursor: pointer;
    background-color: transparent;
    border: none;
    display: inline-block;
}

.dropdown-item:hover {
    background-color: #f5f5f5;
    border-radius: 5px;
}

.header-section{
    width: 100%;
    height: 111.95px;
    background-color: #8E2020;
    display: flex;
    justify-content: center; /* Horizontally center */
    align-items: center; 
}

/* Add styling for the dropdown menu */
.header-actions {
    position: relative;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-button {
    background-color: #000000;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    z-index: 10;
    display: flex;
    flex-direction: column;
    width: 150px;
}

.dropdown-item {
    padding: 10px;
    font-size: 14px;
    text-decoration: none;
    color: #333;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
}

.dropdown-item:last-child {
    border-bottom: none;
}

.dropdown-item:hover {
    background-color: #f5f5f5;
}

.header{
    width: 1250px;
    height: 68.76px;
    display: flex;
}

.header-logo{
    display: flex;
    height: 68.76px;
    width: 175px;
}

.header-menu{
    width: 700px;
    height: 68.76px;
    display: flex;
    flex-basis: auto;
    flex-grow: 0;
    flex-shrink: 1;
}

.header-menu-1{
    width: 658px;
    height: 68.76px;
    margin-left: 42px;
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    align-items: center;
}

.header-menu-2{
    width: 658px;
    height: 40px;
    align-content: center;
    align-items: center;
    align-self: auto;
    column-gap: normal;
    display: flex;
    flex-basis: auto;
    flex-direction: row;
    flex-grow: 0;
    flex-shrink: 1;
    flex-wrap: nowrap;

}

.header-menu-ul{
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    font-size: 18px;
    align-content: center;
    align-items: center;
    column-gap: 50px;
    
}

.header-menu-ul li{
    list-style: none;
    font-family: "Jaro", sans-serif;
    color: #fff;
}

.header-signup{
    width: 100%;
    height: 100%;



    margin: 0px;
    padding: 0px;
}

.header-signup1{

    padding: 10px;
    width: 130px;
    height: 100%;
    display: grid;
    grid-template-columns: 20% 80%;
    background-color: #F1EDED;
    border-radius: 12px;
  
    align-items: center;
    align-content: center;
    justify-content: end;
   
}

.button-wrapper{
    height: 100px;
    background-color: #F1EDED;
    border-radius: 12px;
    display: flex;
    align-items: center;
    align-content: center;
}

.header-button{
    background-color: #F1EDED;
    padding-top: 12px    ;
    padding-bottom: 12px;
    padding-left: 20px;
    padding-right: 10px;
    display: flex;
    align-items: center;
    align-content: center;
    border-radius: 12px;
    text-decoration: none;
}

.button-icon{
    height: 34px;
    width: 34px;
}

.button-text{
    
    width: 100%;
    text-decoration-style: solid;
    margin-left: 20px;
    margin-right: 10px;
    font-family: "Jaro", sans-serif;
    font-size: 25px;
    color: #8E2020;
}


</style>
<script>
import axios from "axios";

export default {
    data() {
        return {
            // Tracks user authentication status
            isAuthenticated: !!localStorage.getItem('token'),
            showDropdown: false, // Tracks dropdown visibility
        };
    },
    computed: {
        // Check if the user is logged in based on token in localStorage
        isAuthenticated() {
            return !!localStorage.getItem('token'); // Returns true if token exists
        },
    },
    methods: {
        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
        },
        async logout() {
            try {
                await axios.post('http://127.0.0.1:8000/api/logout', {}, {
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    },
                });
                // Clear the token from localStorage
                localStorage.removeItem('token');
                // Optionally, redirect to login page
                window.location.href = '/';
            } catch (error) {
                console.error("Logout failed", error);
            }
        },
    },
};
</script>