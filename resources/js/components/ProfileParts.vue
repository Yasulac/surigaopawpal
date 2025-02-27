<template>
    <section class="header-section">
      <div class="header">
        <div class="header-logo">
          <img class="header-logo-image" src="../../Assets/images/logo.png" alt="Logo">
        </div>
        <div class="header-menu">
          <div class="header-menu-1">
            <div class="header-menu-2">
              <ul class="header-menu-ul">
                <a style="text-decoration: none;" href="/">
                  <li>HOME</li>
                </a>
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
        <router-link to="/" style="text-decoration: none; margin-left: +200px;">
          <div>
            <div v-if="$route.path !== '/signupview'" class="header-signup" style="margin-top: 10px;">
              <div class="header-signup1">
                <a href="registration.html">
                  <span>
                    <img style="margin-bottom: -5px;" class="button-icon" src="../../Assets/images/paw-print_11170863.png">
                  </span>
                </a>
                <div>
                  <span class="button-text" style="text-decoration-line:none;">HOME</span>
                </div>
              </div>
            </div>
          </div>
        </router-link>
      </div>
    </section>
    <section class="first-section" style="padding-bottom: 200px; background-color: #FFECD9">
      <h1 style="margin-bottom: 50px;">Welcome back {{ user.fname }} {{ user.lname }}</h1>
      <div class="first-section-div">
        <div class="first-section-div-inside">
          <div class="first-section-div-inside-1">
            <div class="profile-picture-upload">
              <label for="profile-upload" class="upload-button">
                <img style="width: 380px; height: 340px; border-radius: 200px;" id="profile-preview" src="https://staticg.sportskeeda.com/editor/2022/08/53e15-16596004347246.png?w=640" alt="Profile Picture" />
                <br>
                <span style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-decoration: none; color: #8E2020;">Change Profile Picture</span>
                <input type="file" id="profile-upload" accept="image/*" />
              </label>
            </div>
          </div>
          <div class="first-section-div-inside-2">
            <h5>About You</h5>
            <div class="first-section-div-inside-2-2">
              <div class="first-section-div-inside-2-2-list">
                <ul>
                  <li>Full Name</li>
                  <li>Email Address</li>
                  <li>Contact Number</li>
                </ul>
              </div>
              <div class="first-section-div-inside-2-2-list-1">
                <ul>
                  <li>: {{ user.fname }} {{ user.lname }}</li>
                  <li>: {{ user.email }}</li>
                  <li>: {{ user.cnumber }}</li>
                </ul>
              </div>
              <div class="first-section-div-inside-2-2-list" style="margin-top: -30px;">
                <ul>
                  <li>Address</li>
                </ul>
              </div>
              <div class="first-section-div-inside-2-2-list-1" style="margin-top: -30px;">
                <ul>
                  <li>: {{ user.address }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>

<style scoped>
.profile-picture-upload {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}

.upload-button {
  display: inline-block;
  position: relative;
  cursor: pointer;
  text-align: center;
}

.upload-button img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #ccc;
  transition: border-color 0.3s ease;
}


.section-title {
  font-size: 24px;
  color: #333;
  text-align: center;
  margin-bottom: 20px;
  border-bottom: 2px solid #007bff;
  padding-bottom: 10px;
}

.upload-button img:hover {
  border-color: #007bff;
}

.upload-button span {
  display: inline-block;
  margin-top: 8px;
  font-size: 14px;
  color: #007bff;
  text-decoration: underline;
}

#profile-upload {
  display: none;
}


.first-section{
    padding-top: 100px;
    width: 100%;
    height: 420px;
    background-color: #FFECD9;
    justify-content: center;
    align-content: center;
}

.first-section h1{
    text-align: center;
    margin: 0px;
    font-style:normal;
    font-weight: lighter;
    font-size: 67px;
    color: #8E2020;
}


.first-section p{
    text-align: center;
    font-size: 24px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
    padding-bottom: 30px;
}

.first-section-div{
    width: 100%;
    height: 413.5px;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    background-color: #FFECD9;
}

.first-section-div-inside{
    width: 1250px;
    height: 413.5px;
    background-color: #fff;
    border-radius: 30px;
    box-sizing: border-box;
    padding: 30px;
    display: grid;
    grid-template-columns: 537px 1fr;
}

.first-section-div-inside-1{
    width: 100%;
    height: 100%;
}

.first-section-div-inside-2{
    width: 100%;
    height: 100%;
    padding-left: 50px;
    box-sizing: border-box;
    justify-content: center;
    padding-top: 50px;
 
 
}

.pet-card {
  
  display: flex;
  align-items: flex-start;
  gap: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 15px;
  max-width: 1250px;
  margin: 20px auto;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}


h2{
    font-family: "Jaro", sans-serif;
    font-weight: 400;
}
.pet-profile {
  flex-shrink: 0;
}

.pet-photo {
  width: 100px;
  height: 100px;
  border-radius: 8px;
  object-fit: cover;
  border: 2px solid #ccc;
}

.pet-info {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.pet-name {
  margin: 0;
  font-size: 18px;
  color: #333;
}

.pet-detail {
  margin: 0;
  font-size: 16px;
  color: #666;
  font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
  

}


.first-section-div-inside-2 h5{
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
    font-size: 28px;
    -webkit-text-stroke: 1px  #000000;
    margin: 0px;
    margin-bottom: 20px;
}

.first-section-div-inside-2-2{
    width: 480px;
    height: 150px;

    margin: 0px;
    display: grid;
    grid-template-columns: 50% 50%;
}

.header-signup2{
   
    width: 400px;
    height: 100px;

 
 
}

.first-section-div-inside-2-2-list{
    width: 100%;
    height: 100%;
  
}

.first-section-div-inside-2-2-list ul{
    list-style: none;
    padding: 0px;

}

.first-section-div-inside-2-2-list li{
    padding: 0px;
    padding-bottom: 20px;  
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: 530;
    font-size: 24px;  
    color: #8E2020;
}

.first-section-div-inside-2-2-list-1 ul{
    list-style: none;
    padding: 0px;
    padding-top: 0px;
    margin-left: -20px;

}

.first-section-div-inside-2-2-list-1 li{
    
    padding: 0px;
    padding-bottom: 20px;  
    font-size: 18px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
    padding-top: 5px;
}

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
 
    width: 200px;
    height: 100%;
    margin: 0px;
    padding: 0px;
}

.header-signup1{

    padding: 10px;
    width: 200px;
    height: 100%;
    display: grid;
    grid-template-columns: 20% 80%;
    background-color: #F1EDED;
    border-radius: 12px;
    margin-top: 10px;


   
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
    margin-left: 15px;
    margin-right: 5px;
    font-family: "Jaro", sans-serif;
    font-size: 25px;
    color: #8E2020;
}


</style>

<script>
export default {
  data() {
    return {
      user: {
        fname: "",
        lname: "",
        email: "",
        cnumber: "",
        address: "",
      },
    };
  },
  mounted() {
    this.fetchUserData();
  },
  methods: {
    async fetchUserData() {
      try {
        const response = await fetch("/api/users", {
          headers: {
            "Content-Type": "application/json",
          },
        });
        if (response.ok) {
          const data = await response.json();
          if (Array.isArray(data) && data.length > 0) {
            this.user = data[0]; // Update with the first user or adjust based on your logic
          } else {
            console.error("No user data found.");
          }
        } else {
          console.error("Failed to fetch user data. Status:", response.status);
        }
      } catch (error) {
        console.error("Error fetching user data:", error);
      }
    },
  },
};
</script>
