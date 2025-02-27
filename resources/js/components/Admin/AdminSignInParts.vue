<template>
    <section class="first-section">
      <div class="first-section-div">
        <div class="first-section-div-inside">
          <img src="/public/Assets/images/logo.png" alt="" />
          <p>Sign in your account</p>
          <form @submit.prevent="handleSubmit">
            <div class="first-div-input-1">
              <div>
                <label for="email">Email </label> <br />
                <input
                  style="width: 98%;"
                  type="email"
                  name="email"
                  id="email"
                  placeholder="hello@example.com"
                  v-model="email"
                />
              </div>
            </div>
            <div class="first-div-input-1">
              <div>
                <label for="password">Password </label> <br />
                <input
                  style="width: 98%;"
                  type="password"
                  name="password"
                  id="password"
                  placeholder="********"
                  v-model="password"
                />
              </div>
            </div>
  
            <div class="button-container">
              <button style="margin-left: -10px;" type="submit">Sign in</button>
            </div>
           
          </form>
          <p v-if="errorMessage" style="color: red; margin-top: 10px;">{{ errorMessage }}</p>
        </div>
      </div>
    </section>
  </template>
  

<style scoped>
body{
    margin: 0px;
}

.first-section{
    width: 100%;
    height: 835px;
    background-color: #fff;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
  
}

.first-section-div{
    width: 100%;
    height: 614px;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
}

.first-section-div-inside{
    margin-top: -190px;
    width: 540px;
    height: 100%;
    background-color: #8E2020;
    border-radius: 20px;
    text-align: center;
    padding: 70px;
    box-sizing: border-box;
    
}

.first-section-div-inside img{
 
    width: 297px;
    height: 96px;
    margin-bottom: 20px;
    object-fit: contain;
}

.first-section-div-inside p{
    font-family: "Poppins", sans-serif;
    font-weight: bold;
    font-style: normal;
    margin: 0px;
    color: #fff;
    font-size: 16px;
    margin-bottom: 40px;
}

input{
    padding: 5px;
    margin-top: 10px;
    width: 340px;
    height: 40px;
    border-radius: 20px;
    background-color: FFFFFF;
    border: #F1EDED 1px solid;
}

.first-div-input-1{
    margin-bottom: 20px;
}
label{
    
    font-family: "Poppins", sans-serif;
    font-weight: bold;
    font-style: normal;
    margin: 0px;
    color: #fff;
    font-size: 16px;
    margin-left: -310px;
}

input::placeholder{
    font-family: "Poppins", sans-serif;
    font-weight: bold;
    font-style: normal;
    margin: 0px;
    color: #595266;
    font-size: 16px;
    padding-left: 10px;
    margin-bottom: 40px;
}

label::placeholder{
    font-family: "Poppins", sans-serif;
    font-weight: bold;
    font-style: normal;
    margin: 0px;
    color: #fff;
    font-size: 16px;
    margin-bottom: 40px;
}

button{

    width: 162px;
    height: 54px;
    background-color: #2C2C2C;
    border-radius: 8px;
    border: #2C2C2C 1px solid;
    color: #595266;
    font-size: 16px;
    font-family: "Poppins", sans-serif;
    font-weight: bold;
    font-style: normal;
    background-color: #FFFFFF;
    margin-top: 20px;
    border-radius: 30px;
}

button:hover{
    cursor: pointer;
}



.first-section-div-inside a{
    text-decoration-line: none;
    color: #fff;
}
</style>


<script>
export default {
  data() {
    return {
      email: "",
      password: "",
      errorMessage: "",
    };
  },
  methods: {
    handleSubmit() {
      // Static admin credentials
      const adminEmail = "admin@gmail.com";
      const adminPassword = "admin";

      if (this.email === adminEmail && this.password === adminPassword) {
        alert("Login successful!");
        // Navigate to the admin dashboard or any page
        this.$router.push("/adminuserview");
      } else {
        this.errorMessage = "Invalid email or password. Please try again.";
      } 
    },
  },
};
</script>