<template>
    <section class="first-section">
        <h1>Welcome back</h1>
        <div class="first-section-div">
            <div class="first-section-div-inside">
                <form v-if="!isLoggedIn" @submit.prevent="login">
                    <div>
                        <label for="Email">Email :</label> <br>
                        <input type="email" name="Username" id="Username" v-model="email"/>
                    </div>
                    <div style="margin-top: 30px;">
                        <label for="Password">Password :</label> <br>
                        <input type="password" name="password" id="password" v-model="password" placeholder="*********" />
                    </div>
                    <div class="button-container">
                        <button type="submit" :disabled="isLoading">Submit</button>
                    </div>

                    <p>Not Yet Registered? 
                        <router-link to="/signupview" style="color: black; text-decoration: none;">
                            <span><b>Sign up</b></span>
                        </router-link>
                    </p>
                </form>

                <!-- Display logged in message and logout option -->
                <div v-else>
                    <p>You're logged in!</p>
                    <button @click="logout">Logout</button>
                </div>

                <p v-if="error">{{ error }}</p>
                <img src="/public/Assets/images/dog-sounds-gallery-1-removebg-preview.png" alt="">
            </div>
        </div>
    </section>
</template>

<style scoped>
body{
    margin: 0px;
}
.header-section{
    width: 100%;
    height: 111.95px;
    background-color: #8E2020;
    display: flex;
    justify-content: center; /* Horizontally center */
    align-items: center; 
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
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: end;
}

.button-wrapper{
    
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
    

    text-decoration-style: solid;
    margin-left: 20px;
    margin-right: 10px;
    font-family: "Jaro", sans-serif;
    font-size: 25px;
    color: #8E2020;
}

.first-section{
    width: 100%;
    height: 823px;
    padding-top: 80px;
}

.first-section h1{
    text-align: center;
    margin: 0px;
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
    font-size: 50px;
    color: #8E2020;
    margin-bottom: 80px;
}

.first-section-div{
    width: 100%;
    height: 483px;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
}

.first-section-div-inside{
    width: 554px;
    height: 100%;
    background-color: #FFECD9;
    border-radius: 20px;
    align-content: center;
    align-items: center;
    justify-content: center;
    display: flex;
}

input{
    margin-left: -10px;
    padding: 5px;
    margin-top: 10px;
    width: 400px;
    height: 56px;
    border-radius: 8px;
    background-color: FFFFFF;
    border: #F1EDED 1px solid;
}

label{

    font-size: 16px;
    color: rgb(89, 82, 102);
    font-weight: 530;
    font-family: "Inter", sans-serif;
    color: #1E1E1E;
}

button{

    width: 162px;
    height: 54px;
    background-color: #2C2C2C;
    border-radius: 8px;
    border: #2C2C2C 1px solid;
    color: #fff;
    font-size: 18px;
    font-weight: 400;
    font-family: "Inter", sans-serif;
    margin-left: 120px;
    margin-top: 50px;
}

button:hover{
    cursor: pointer;
}

.first-section-div-inside p{
    text-align: center;
    font-size: 18px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
}


.first-section-div-inside a{
    text-decoration-line: none;
    color: #1E1E1E;
}

.first-section-div-inside img{
    position: absolute;
    right: 100px;
    top: 460px;
}

.fifth-section{
    box-sizing: border-box;
    padding-top: 150px;
    width: 100%;
    height: 400px;
    background-color: #FFECD9;
}

.sixth-section{
    margin-top: -80px;
    width: 100%;
    height: 258.48px;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
}


.sixth-section-div{
    width: 1290px;
    height: 100%;

    display: grid;
    justify-content: space-between;
    grid-template-columns: 309.6px 193.5px 232.2px 231.67px ;
}

.sixth-section-div-inside{
    width: 100%;
    height: 100%;
 
}

.sixth-section-div-inside h5{
    margin: 0px;
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: 530;
    font-size: 25px;
    color: #8E2020;
}

.sixth-section-div-inside ul{
    margin: 0px;
}

.sixth-section-div-inside li{
    margin: 0px;
    margin-left: -50px;
    list-style: none;
    padding: 10px;
    font-size: 18px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;

}

.seventh-section{
    border-top: 1px rgb(89, 82, 102) solid;
    margin-top: 10px;
    width: 100%;
    height: 50px;
}

.seventh-section p{
    text-align: center;
    font-size: 18px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
}
</style>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      isLoggedIn: !!localStorage.getItem('token'),
      error: '',
      isLoading: false,
    };
  },
  methods: {
    async login() {
      this.isLoading = true;
      this.error = ''; // Reset error before making a request

      try {
        // Send POST request to login
        const response = await axios.post(
          'http://127.0.0.1:8000/api/login',
          { email: this.email, password: this.password }
        );

        console.log('Login response:', response.data);

        const token = response.data.token;
        if (token) {
          localStorage.setItem('token', token); // Store the token in localStorage
          this.isLoggedIn = true;

          // Optionally set the token in Axios headers for future requests
          axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;

          this.$router.push('/'); // Redirect to the home page
        }
      } catch (error) {
        console.error('Login error:', error);
        this.error = error.response?.data?.message || 'An unexpected error occurred.';
      } finally {
        this.isLoading = false;
      }
    },

    async logout() {
      try {
        await axios.post(
          'http://127.0.0.1:8000/api/logout', // Make sure you have a backend route for logout
          {},
          {
            headers: {
              Authorization: `Bearer ${localStorage.getItem('token')}`,
            },
          }
        );

        // Remove the token and set isLoggedIn to false
        localStorage.removeItem('token');
        axios.defaults.headers.common['Authorization'] = ''; // Remove token from axios headers
        this.isLoggedIn = false;

        this.$router.push('/login'); // Redirect to login page or any other page
      } catch (error) {
        console.error('Logout error:', error);
        this.error = 'An error occurred while logging out.';
      }
    },
  },
};
</script>

