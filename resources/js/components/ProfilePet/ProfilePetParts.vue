<template>
    <section class="first-section">
      <h1>
        Hi, my name is {{ dog.dog_name }}
      </h1>
      <p>
        “Give a Pet a Loving Home—Start Your Adoption Journey <br />
        Today!”
      </p>
      <div class="first-section-div">
        <div class="first-section-div-inside">
          <div class="first-section-div-inside-1">
            <img width="100%" height="100%" style="border-radius: 20px;" src="data:image/jpeg;base64,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" alt="" />
          </div>
          <div class="first-section-div-inside-2">
            <h5>Facts about me</h5>
            <div class="first-section-div-inside-2-2">
              <div class="first-section-div-inside-2-2-list">
                <ul>
                  <li>Breed  :</li>
                  <li>Age :</li>
                </ul>
              </div>
              <div class="first-section-div-inside-2-2-list-1">
                <ul>
                  <p style="margin-top: -2px;">{{ dog.breed }}</p>
                  <p style="margin-top: -30px;">{{ dog.age }}</p>
                </ul>
              </div>
              <div class="first-section-div-inside-2-2-list">
                <ul>
                  <li>Sex :</li>
                  <li>Size : </li>
                </ul>
              </div>
              <div class="first-section-div-inside-2-2-list-1">
                <ul>
                    <p style="margin-top: -2px;">{{ dog.sex }}</p>
                    <p style="margin-top: -30px;">{{ dog.size }}</p>
                </ul>
              </div>
            </div>
            <router-link :to="{ name: 'AdoptionFormView', params: { userId: dog.id } }">
                <div class="header-signup2" style="cursor: pointer;">
                <div class="button-wrapper">
                  <div style="width: 100%; text-align: center;">
                    <span class="button-icon">
                      <img class="button-icon" src="/public/Assets/images/plus-symbol-button.png" />
                    </span>
                  </div>
                  <div style="width: 100%;">
                    <span class="button-text" style="text-decoration-line:none;">
                      ADOPT THIS PET
                    </span>
                  </div>
                </div>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </section>
    <section class="second-section">
        <div class="second-section-div">
            <div class="second-section-div-1">
                <div class="second-section-div-1-content">
                    <h1>
                        Know more about <br>{{ dog.dog_name }}
                    </h1>
                    <p style="width: 430px;">
                        Lorem ipsum dolor sit amet consectetur. Quam fermentum ac sed proin. Eget blandit tellus amet sed. Lorem varius ullamcorper luctus quis leo quisque ac pulvinar porttitor. Dui ipsum pellentesque vitae dictumst diam.
                        <br><br> 
                        A tortor suspendisse suscipit mi eget eu sit. Nunc dictum nulla nisi sed at viverra maecenas. Ultrices egestas cras nisl sollicitudin interdum.
                    </p>
                </div>
                <div class="second-section-div-1-image">
                    <img style="border-radius: 30px;" height="408px" width="100%" src="https://www.asia.ganador-petfood.com/wp-content/uploads/2018/12/shutterstock_511541320-1024x683.jpg   " alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="fourth-section">
        <div class="fourth-section-div-1">
          
           
        </div>
        
        <h1 class="fourth-section-h1">
            How it works?
        </h1>
        <p class="fourth-section-p">
            The adoption process for <b>Surigao PawPal</b>  designed to ensure a smooth, safe, and responsible <br>experience for both adopters and pets.
        </p>
        <div class="fourth-section-div-4">
            <div class="fourt-section-div-4-inside">
                <div class="fourth-section-div-4-container">
                    <h4>
                        01.
                    </h4>
                    <h5>
                        Browse pet profiles
                    </h5>
                    <p>
                        Explore the available pets listed on <br> the platform, 
                        filtering by various criteria  such as breed, age, size, and temperament.
                    </p>
                </div>
                <div class="fourth-section-div-4-container">
                    <h4>
                        02.
                    </h4>
                    <h5>
                        Select a Pet
                    </h5>
                    <p>
                        Finds a you interested in, you can click on the pet's profile to view more details.
                    </p>
                </div>
                <div class="fourth-section-div-4-container">
                    <h4>
                        03.
                    </h4>
                    <h5>
                        Submit an Adoption Application
                    </h5>
                    <p>
                        Fill out an adoption application form on the pet’s profile page
                    </p>
                </div>
                <div class="fourth-section-div-4-container">
                    <h4>
                        04.
                    </h4>
                    <h5>
                        Application Review
                    </h5>
                    <p>
                        You may contact the applicant for more details, arrange a phone or in-person interview, or ask additional questions to ensure the adopter is a good fit
                    </p>
                </div>
                
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

    align-items: center;
    align-content: center;
    justify-content: end;
}

.button-wrapper{
    background-color: #F1EDED;
    border-radius: 12px;
    width: 250px;
    display: grid;
    grid-template-columns: 20% 80%;
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
    margin-top: 10px;
}

.button-text{
    
  
    text-decoration-style: solid;
   
    font-family: "Jaro", sans-serif;
    font-size: 25px;
    color: #8E2020;
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
    padding: 50px;
    box-sizing: border-box;
 
    align-items: center;
    align-content: center;
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
    grid-template-columns: 25% 25% 25% 25%;
}

.header-signup2{
    margin-top: -70px;
    width: 100%;
    height: 100%;
    
    align-content: center;
 
 
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

.second-section{
    width: 100%;
    height: 608px;
    background-color: #FFECD9;
    padding-top: 350px;

}

.second-section-div{
    
    width: 100%;
    height: 408px;
 
    display: flex;
    justify-content: center;
   
}

.second-section-div-1 {
    width: 1250px;

    height: 100%;
    display: grid;
    grid-template-columns: 50% 50%;
}

.second-section-div-1-content{
    width: 100%;
    height: 100%;
}

.second-section-div-1-content h1{
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: 530;
    font-size: 48px;  
    color: #8E2020;
    margin: 0px;
    margin-top: 30px;
    margin-bottom: 20px;
}

.second-section-div-1-content p{
    font-size: 20px;
    color: rgb(89, 82, 102);
    font-weight: 545;
    font-family: "Balthazar", serif;
    padding-top: 5px;
}

.fourth-section{
    width: 100%;
    height: 639px;
    background-color: #D9D9D9;
    box-sizing: border-box;
    padding-top: 100px;
 
}


.fourth-section-div-1-inside{
    width: 1250px;
    height: 100%;
 
    display: grid;
    grid-template-columns: 50% 50%;
}

.fourth-section-div-1-inside-image{
    width: 100%;
    height: 100%;
}

.fourth-section-div-1-inside-image-img{
    width: 100%;
    height: 100%;
    object-fit: fill;
    
}

.fourth-section-div-1-inside-content{
    box-sizing: border-box;
    padding-top: 50px;
    margin-left: 80px;
}

.fourth-section-div-1-inside-content h4{
    margin: 0px;
    font-family: "Balthazar", serif;
    font-weight: 530;
    color: #8E2020;
    font-size: 50px;
}

.fourth-section-div-1-inside-content-1{
    margin-top: 40px;
    width: 488.75px;
    height: 126.6px;
    box-sizing: border-box;
    padding-bottom: 20px;
    border-bottom: 0.10px rgb(89, 82, 102) solid;
    display: grid;
    grid-template-columns: 61.4px 409.35px;
}

.fourth-section-div-1-inside-content-1-logo{
    width: 100%;
    height: 100%;
    box-sizing: border-box;
  
}

.fourth-section-div-1-inside-content-1-logo img{
    width: 61.41px;
    height: 61.41px;
    border-radius: 30px;
}

.fourth-section-div-1-inside-content-1-content{
    margin-left: 18px;
}

.fourth-section-div-1-inside-content-1-content h5{
    font-family: "Balthazar", serif;
    margin: 0px;
    font-weight: 530;
    color: #8E2020;
    font-size: 24px;
}

.fourth-section-div-1-inside-content-1-content p{
    font-size: 18px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
}

.fourth-section-div-1-inside-content-2{
    margin-top: 40px;
    width: 488.75px;
    height: 126.6px;
    box-sizing: border-box;
    padding-bottom: 20px;
    display: grid;
    grid-template-columns: 61.4px 409.35px;
}

.fourth-section-div-2-inside{
    margin-top: 140px;
    width: 100%;
    height: 154.4px;
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: center;
}

.fourth-section-div-2-number{
    width: 1052px;
    height: 100%;
    background-color: #ffff;
    box-sizing: border-box;
    padding: 36px 0px 18px 0px;
    display: grid;
    grid-template-columns: 349.98px 349.98px 349.98px;
    border-radius: 20px;
}

.fourth-section-div-2-inside-2{
    width: 100%;
    height: 100%;
    border-right: 1px rgb(147, 147, 147) solid;

    
}

.fourth-section-div-2-inside-2 h1{
    text-align: center;
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
    font-size: 64px;
    color: #8E2020;
    margin: 0px;
    
}

.fourth-section-div-2-inside-2 p{
    text-align: center;
    margin: 0px;
    font-size: 18px;
    color: #595266;
    font-weight: 400;
    font-family: "Inter", sans-serif;
}

.fourth-section-div-3-inside{
    width: 100%;
    height: 739px;

    display: flex;
    justify-content: center;
}

.fourth-section-div-3-inside-3{
    width: 1250px;
    height: 100%;
    margin-top: -20px;
    background-color: #fff;
    box-sizing: border-box;
    padding: 18px;
    border-radius: 20px;
}

.fourth-section-div-3-inside-3 img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
}

.fourth-section-h1{
    margin-top: 40px;
    text-align: center;
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
    font-size: 48px;
    color: #8E2020;
}

.fourth-section-p{
    text-align: center;
    font-size: 18px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
}

.fourth-section-div-4{
    width: 100%;
    height: 191px;

    display: flex;
    justify-content: center;
}

.fourt-section-div-4-inside{
    margin-top: 20px;
    width: 1250px;
    height: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    column-gap: 30px;
}

.fourth-section-div-4-container{
    width: 100%;
    height: 100%;
 
}

.fourth-section-div-4-container h4{
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: 600;
    font-size: 24px;
    color: #8E2020;
    margin: 10px 0px 0px 0px;
    
}


.fourth-section-div-4-container h5{
    font-family: "Balthazar", serif;
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    color: #000000;
    margin: 10px 0px 0px 0px;
}

.fourth-section-div-4-container p{
    font-size: 18px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
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
      dog: {} // Initial empty object for dog data
    };
  },
  mounted() {
    const userId = this.$route.params.id; // Get userId from the route parameters
    this.getDogDetails(userId);
  },
  methods: {
    async getDogDetails(userId) {
      try {
        const response = await axios.get(`http://localhost:8000/api/rehoming/${userId}`);
        this.dog = response.data; // Populate the dog data
      } catch (error) {
        console.error("Error fetching dog details:", error);
      }
    }
  }
};
</script>