<template>
  <section class="first-section">
    <h1>
      Rehome your pet
    </h1>
    <p>
      Need to find a loving home for your pet? Surigao PawPal helps you connect with trusted
      <br />
      adopters in the community.
    </p>
  </section>
  

  <section 
  class="second-section" 
  :class="{ 'expanded-section': imagePreview }"
>
  <hr>
  <h5>Rehome Form</h5>

  <div class="second-section-div">
    <div class="second-section-div-inside">
      <!-- Image Preview -->
      <div v-if="imagePreview" class="image-preview-container">
        <img :src="imagePreview" alt="Image Preview" class="image-preview" />
      </div>

      <form @submit.prevent="submitForm" action="#" method="POST" class="second-section-div-inside-form">
        <div class="flex-container">
          <label for="Name">Name</label> <br>
          <input type="text" v-model="dog.dog_name" placeholder="Dog's Name" required />
        </div>

        <div class="flex-container">
          <label for="Breed">Breed</label> <br>
          <input type="text" v-model="dog.breed" placeholder="Breed" required />
        </div>

        <div class="flex-container">
          <label for="Age">Age</label> <br>
          <input type="number" v-model="dog.age" placeholder="Age" required />
        </div>

        <div class="flex-container">
          <label for="Sex">Sex</label> <br>
          <select style="width: 90%; height: 40px; margin-top: 10px; border-radius: 10px;" v-model="dog.sex">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>

        <div class="flex-container">
          <label for="Size">Size</label> <br>
          <input type="text" v-model="dog.size" placeholder="Size" required />
        </div>

        <div class="flex-container">
          <label for="Profile Image">Profile Image</label> <br>
          <input type="file" @change="handleFileChange" />
        </div>

        <button style="margin-left: 500px;" type="submit">Rehome Dog</button>
      </form>
    </div>
  </div>
</section>
</template>


<style scoped>
body{
    margin: 0px;
}

.second-section-div {
  transition: height 0.3s ease; /* Smooth height transition */
  height: 450px; /* Default height */
}

.flex-container {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
  font-family: 'Arial', sans-serif;
}

.flex-container label {
  font-size: 14px;
  font-weight: bold;
  color: #333;
  margin-bottom: 8px;
}

.flex-container input[type="file"],
.flex-container select {
  padding: 8px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 4px;
  outline: none;
  transition: border-color 0.2s ease;
}

.flex-container input[type="file"]:hover,
.flex-container select:hover {
  border-color: #007bff; /* Highlight border on hover */
}

.flex-container input[type="file"]:focus,
.flex-container select:focus {
  border-color: #0056b3; /* Highlight border on focus */
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.flex-container select {
  appearance: none; /* Removes default browser styles for select */
  background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"%3E%3Cpath fill="%23333" d="M0 3h10L5 9z"/%3E%3C/svg%3E') no-repeat right 10px center;
  background-color: white;
  background-size: 10px;
  cursor: pointer;
}

.flex-container select:hover {
  background-color: #f8f9fa; /* Light background on hover */
}

.flex-container select:focus {
  background-color: #fff; /* Ensure consistent focus appearance */
}

.flex-container input[type="file"] {
  cursor: pointer;
}



.second-section-div.with-image {
  height: 550px; /* Increase height when imagePreview is present */
}

.second-section.expanded-section {
  height: 800px; /* Expanded height when imagePreview is present */
}

.image-preview-container {
  text-align: center;
  margin-bottom: 20px;
}

.image-preview {
  max-width: 200px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}


.header-section{
    width: 100%;
    height: 111.95px;
    background-color: #8E2020;
    display: flex;
    justify-content: center; /* Horizontally center */
    align-items: center; 
}

.image-preview-container {
  text-align: center; /* Centers the preview */
  margin-bottom: 20px; /* Adds space between the preview and the form */
}

.image-preview {
  max-width: 200px; /* Adjust as needed */
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional styling */
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

.image-preview-container {
  text-align: center; /* Centers the preview */
  margin-top: 20px;   /* Adds space below the form */
}

.image-preview {
  max-width: 200px; /* Adjust as needed */
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional styling */
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
.custom-upload {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.custom-upload:hover {
  background-color: #0056b3;
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
    height: 420px;
    background-color: #FFECD9;
    justify-content: center;
    align-items: center;
    align-content: center;
}

.first-section h1{
    text-align: center;
    margin: 0px;
    font-family: "Balthazar", serif;
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
}

hr{
    margin-top: 0px;
    width: 90%;
    color: #CAC4D0;
    margin-bottom: 0px;
    margin-bottom: 50px;
}


.second-section{
    margin-top: -1px;
    width: 100%;
    height: 500px;
    background-color: #FFECD9;
    transition: height 0.3s ease; /* Smooth height transition */


}

.second-section h5{
    text-align: center;
    margin: 0px;
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
    font-size: 50px;
    color: #8E2020;
    margin-bottom: 50px;
}

input[type="file"] {
  display: block;
  cursor: pointer;
  margin-top: 10px;
}

.second-section-div{
    align-self: center;
    width: 100%;
    height: 450px;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
}

.second-section-div-inside{
    width: 1250px;
    height: 100%;

}


.second-section-div-inside-form{
    display: grid;
    grid-template-columns: 50% 50%;
    padding: 0px;
    margin: 0px;
    width: 100%; 
    height: 340px;
}
input{
    padding: 5px;
    margin-top: 10px;
    width: 550px;
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

.second-section-div-inside-form button{

    width: 162px;
    height: 54px;
    background-color: #2C2C2C;
    border-radius: 8px;
    border: #2C2C2C 1px solid;
    color: #fff;
    font-size: 18px;
    font-weight: 400;
    font-family: "Inter", sans-serif;
}

.second-section-div-inside-form button:hover{
    cursor: pointer;
}

.button-container{
    margin-top: 30px;
    height: 100%;
    align-items: center;
    align-content: center;
    justify-content: center;
}


.third-section{
    width: 100%;
    height: 639px;
    background-color: #D9D9D9;
    padding-top: 150px  ;
}

.third-section h1{
    margin: 0px;
    text-align: center;
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
    font-size: 50px;
}

.third-section p{
    text-align: center;
    font-size: 24px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
    margin-bottom: 100px;
}

.third-section-div{
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
}

.third-section-div-inside{
    width: 1250px;
    height: 100%;
  
    display: grid;
    grid-template-columns: 300px 300px 300px;
    justify-content:space-around;
}

.third-section-div-inside h5{
    margin: 0px;
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
    font-size: 24px;
    color: #8E2020;
    margin-bottom: 20px;
}


.third-section-div-inside p{
    text-align: start;
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: 500;
    font-size: 24px;
    color: #000;
    margin: 0px;
    margin-top: 10px66;
}

.third-section-div-inside-1{
    margin-top: 100px;
    padding: 30px;
    border-radius: 30px;
    border: 2px rgb(89, 82, 102) solid;
    background-color: #d3d3d3;
}

.third-section-div-inside-2{
    margin-top: 1px;
    padding: 30px;
    border-radius: 30px;
    border: 2px rgb(89, 82, 102) solid;
    background-color: #d3d3d3;
}

.third-section-div-inside-3{

    padding: 30px;
    border-radius: 30px;
    border: 2px rgb(89, 82, 102) solid;
    background-color: #d3d3d3;
}

.third-section img{
    position: absolute;
    top: 1000px;
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

.custom-file-upload {
    display: inline-block;
    padding: 10px 20px;
    color: white;
    background-color: #4CAF50;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
  }

  .custom-file-upload:hover {
    background-color: #45a049;
  }

  /* Optional styling for displaying the selected file name */
  #fileName {
    margin-left: 10px;
    font-style: italic;
    color: #555;
  }
</style>

<script>
import axios from "axios";

export default {
  data() {
    return {
      dog: {
        dog_name: "",
        age: "",
        breed: "",
        sex: "male",
        size: "",
      },
      formData: new FormData(),
      imagePreview: null,
    };
  },
  methods: {
    handleFileChange(event) {
      const file = event.target.files[0];
      if (file) {
        this.formData.set("profile_picture", file); // Backend field name for the picture
        const reader = new FileReader();
        reader.onload = () => {
          this.imagePreview = reader.result; // Update preview
        };
        reader.readAsDataURL(file);
      }
    },
    async submitForm() {
      // Check if the token exists in localStorage
      const token = localStorage.getItem("token");
      if (!token) {
        console.error("No token found. User is not authenticated.");
        alert("You are not authenticated.");
        return; // Stop the form submission if no token is found
      }

      try {
        // Append form fields to FormData
        this.formData.set("dog_name", this.dog.dog_name);
        this.formData.set("age", this.dog.age);
        this.formData.set("breed", this.dog.breed);
        this.formData.set("sex", this.dog.sex);
        this.formData.set("size", this.dog.size);

        // Send the request with the token in the Authorization header
        const response = await axios.post(
          'http://127.0.0.1:8000/api/rehoming',
          this.formData,
          {
            headers: {
              "Content-Type": "multipart/form-data",
              'Authorization': `Bearer ${token}`,
            },
            withCredentials: true,
          }
        );

        this.submittedDog = response.data.dog;
        localStorage.setItem("submittedDog", JSON.stringify(this.submittedDog));
        this.$router.push({ name: 'PetView' });
        alert("Form submitted successfully!");
      } catch (error) {
        console.error("Error:", error.response?.data || error.message);
        alert("Failed to submit the form.");
      }
    },
  },
};
</script>





