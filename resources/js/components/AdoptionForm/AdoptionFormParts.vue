<template>
    <section class="first-section">
      <h1>Fill up the form</h1>
      <div class="first-section-div">
        <div class="first-section-div-inside">
          <form action="#" method="post" @submit.prevent="submitForm">
            <div class="first-div-input-1">
              <div>
                <label for="reason">What is your reason for adopting a pet?</label> <br>
                <textarea v-model="reason" style="width: 98%; height: 200px;" name="reason" id="reason"></textarea>
              </div>
            </div>
  
            <div class="button-container">
              <button type="submit">Submit</button>
            </div>
          </form>
  
          <img class="img2" src="/Public/Assets/images/38708374_8609562-removebg-preview.png" alt="">
          <img class="img3" src="/Public/Assets/images/38708374_8609562-removebg-preview.png" alt="">
        </div>
      </div>
    </section>
  </template>

<style scooped>
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
    padding: 10px;
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
    height: 400px;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
}

.first-section-div-inside{
    width: 865px;
    height: 400px;
    background-color: #FFECD9;
    border-radius: 20px;
    padding: 50px;
    box-sizing: border-box;
}

.first-div-input{
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: 1fr;
   
    margin-bottom: 15px;
}

input{
    padding: 5px;
    margin-top: 10px;
    width: 100%;
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
    padding: 0px;
    width: 100%;
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
      reason: '',
      pet_id: null,
      user_id: 4 // Replace this with the logged-in user’s ID
    };
  },
  mounted() {
    // Get pet_id from the route parameter
    this.pet_id = this.$route.params.pet_id;
  },
  methods: {
    async submitForm() {
      try {
        const response = await axios.post('http://localhost:8000/api/adoption-request', {
          user_id: this.user_id,
          pet_id: this.pet_id,
          reason: this.reason
        });

        alert('Adoption request submitted successfully!');
        console.log(response.data);
      } catch (error) {
        console.error('Error submitting adoption request:', error);
        alert('There was an error submitting the form. Please try again.');
      }
    }
  }
};
</script>