<template>
    <section class="first-section" style="box-sizing: border-box; height: 1000px;">
      <h1>Create Your Account</h1>
  
      <div class="first-section-div" style="padding-bottom: 100px;">
        <div class="first-section-div-inside">
          <form @submit.prevent="register" style="margin-bottom: 100px;">
            <div class="first-div-input">
              <div>
                <label for="fname">First Name :</label> <br>
                <input type="text" name="fname" id="fname" v-model="fname" required />
                <span v-if="errors.fname" style="color: red;">{{ errors.fname[0] }}</span>
              </div>
              <div>
                <label for="lname">Last Name :</label> <br>
                <input type="text" name="lname" id="lname" v-model="lname" required />
                <span v-if="errors.lname" style="color: red;">{{ errors.lname[0] }}</span>
              </div>
            </div>
            <div class="first-div-input-1">
              <div>
                <label for="email">Email Address :</label> <br>
                <input style="width: 98%;" type="text" name="email" id="email" v-model="email" required />
                <span v-if="errors.email" style="color: red;">{{ errors.email[0] }}</span>
              </div>
            </div>
            <div class="first-div-input">
              <div>
                <label for="cnumber">Contact Number :</label> <br>
                <input type="text" name="cnumber" id="cnumber" v-model="cnumber" required />
                <span v-if="errors.cnumber" style="color: red;">{{ errors.cnumber[0] }}</span>
              </div>
              <div>
                <label for="username">Username :</label> <br>
                <input type="text" name="username" id="username" v-model="username" required />
                <span v-if="errors.username" style="color: red;">{{ errors.username[0] }}</span>
              </div>
            </div>
            <div class="first-div-input-1">
              <div>
                <label for="password">Password :</label> <br>
                <input style="width: 98%;" type="password" name="password" id="password" v-model="password" placeholder="***********" required />
                <span v-if="errors.password" style="color: red;">{{ errors.password[0] }}</span>
              </div>
            </div>
            <div class="first-div-input-1">
              <div>
                <label for="password_confirmation">Confirm Password :</label> <br>
                <input style="width: 98%;" type="password" name="password_confirmation" id="password_confirmation" v-model="password_confirmation" placeholder="***********" required />
                <span v-if="errors.password_confirmation" style="color: red;">{{ errors.password_confirmation[0] }}</span>
              </div>
            </div>
            <div class="first-div-input-1">
              <div>
                <label for="address">Address :</label> <br>
                <input style="width: 98%;" type="text" name="address" id="address" v-model="address" required />
                <span v-if="errors.address" style="color: red;">{{ errors.address[0] }}</span>
              </div>
            </div>
            <div class="button-container">
              <button type="submit">Submit</button>
            </div>
            <div style="padding-bottom: 10px;">
              <router-link to="/loginview" style="color: black; text-decoration: none;">
                <p>Already Registered? <span><b>Log in Here</b></span></p>
              </router-link>
            </div>
          </form>
  
          <img class="img2" src="/Public/Assets/images/38708374_8609562-removebg-preview.png" alt="" />
          <img class="img3" src="/Public/Assets/images/38708374_8609562-removebg-preview.png" alt="" />
        </div>
      </div>
    </section>
  </template>
  <style scooped>

@import url('https://fonts.googleapis.com/css2?family=Balthazar&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jaro:opsz@6..72&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
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
      height: 1009px;
      background-color: #fff; 
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
      height: 800px;
      display: flex;
      align-items: center;
      align-content: center;
      justify-content: center;
  }
  
  .first-section-div-inside{
      width: 865px;
      padding-bottom: 100px;
      height: 100%;
      background-color: #FFECD9;
      border-radius: 20px;
      padding: 50px;
      box-sizing: border-box;
  }
  
  .first-div-input{
      width: 100%;
      height: 100%;
      display: grid;
      grid-template-columns: 50% 50%;
      column-gap: 25px;
      justify-content: space-between;
      margin-bottom: 15px;
  }
  
  input{
      padding: 5px;
      margin-top: 10px;
      width: 340px;
      height: 30px;
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
  
  .first-div-input-1{
      margin-bottom: 15px;
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
      margin-left: 300px;
      margin-top: 20px;
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
  
  .img2{
      position: absolute;
      top: 750px;
      left: -20px;
  }
  
  .img3{
      position: absolute;
      top: 750px;
      right: -1%;
      transform: scaleX(-1);
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
      fname: '',
      lname: '',
      email: '',
      cnumber: '',
      username: '',
      password: '',
      password_confirmation: '',
      address: '',
      errors: {},
      isLoading: false,
    };
  },
  methods: {
    async register() {
      this.isLoading = true;
      this.errors = {}; // Clear any previous errors

      try {
        // Sending the registration data without CSRF handling
        const response = await axios.post('http://127.0.0.1:8000/api/register', {
          fname: this.fname,
          lname: this.lname,
          email: this.email,
          cnumber: this.cnumber,
          username: this.username,
          password: this.password,
          password_confirmation: this.password_confirmation,
          address: this.address,
        });

        console.log('Registration successful:', response.data);

        // Handle successful registration (redirect or other actions)
        this.$router.push('/loginview');
      } catch (error) {
        console.error('Registration failed:', error.response?.data);

        // Display form validation errors
        if (error.response?.data?.errors) {
          this.errors = error.response.data.errors;
        } else {
          this.errors = { general: ['An unexpected error occurred.'] };
        }
      } finally {
        this.isLoading = false;
      }
    },
  },
};
</script>

<style scoped>
/* Add styles for the registration form here */
</style>



