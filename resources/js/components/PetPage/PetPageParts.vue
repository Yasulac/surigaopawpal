<template>
  <section class="first-section">
    <h1>Available for Adoption</h1>
    <p>“Give a Pet a Loving Home—Start Your Adoption Journey <br />Today!”</p>
  </section>
  
  <div class="third-section-div">
    <div class="third-section-div-container">
      <div 
        class="third-section-div-container-inside" 
        v-for="dog in dogs" 
        :key="dog.user_id"
      >
        <div class="third-section-div-container-inside-1">
          <div class="third-section-dog-container"> 
            <a href="#">
              <img class="third-section-dog-img" :src="getDogImage(dog.profile_picture)" alt="Dog Image" />
            </a>
            <div class="dog-details">
              <h2>{{ dog.dog_name }}</h2>
              <p>{{ dog.breed }}</p>
              <p>{{ dog.age }} years old</p>
              <!-- Add the Adopt button here -->
              <router-link :to="{ name: 'ProfilePetView', params: { id: dog.id } }">
            <button class="adopt-button">Adopt This Pet</button>
          </router-link>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
import axios from 'axios'; // Import axios

export default {
  data() {
    return {
      dogs: [], // Store a list of dogs
    };
  },
  mounted() {
    this.fetchDogData(); // Fetch dog data when the component is mounted
  },
  methods: {
  getDogImage(imagePath) {
      return `/storage/${imagePath}`; // ✅ Add slash before imagePath
  },

  async fetchDogData() {
      try {
          const token = localStorage.getItem('token');
          const response = await axios.get('http://127.0.0.1:8000/api/rehoming/', {
              headers: { Authorization: `Bearer ${token}` },
          });

          console.log('API Response:', response.data); // Debugging
          this.dogs = response.data; // Ensure this matches the API response format
      } catch (error) {
          console.error('Error fetching dog data:', error);
          alert('Failed to fetch dog data.');
      }
  },
},
};
</script>
  
  <style scoped>

.adopt-btn {
  background-color: #FF6347; /* Tomato color */
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.adopt-btn:hover {
  background-color: #FF4500; /* Darker Tomato color */
}

.third-section-dog-container {
  position: relative;
}

.dog-details {
  margin-top: 10px;
  text-align: center;
}

.third-section-dog-img {
  width: 100%;
  height: auto;
  border-radius: 10px;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

.dog-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
  width: 100%;
}

.third-section-div {
  margin-top: 60px;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.third-section-div-container {
  width: 100%;
  max-width: 1250px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
  justify-content: center;
}

.third-section-div-container-inside {
  width: 100%;
  border-radius: 30px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}

.third-section-div-container-inside-1 {
  padding: 20px;
  border: 1.2px solid rgba(255, 255, 255, 0);
  border-radius: 30px;
  background-color: #ffff;
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
}

.third-section-dog-container {
  text-align: center;
}

.third-section-dog-img {
  width: 100%;
  max-width: 344.41px;
  height: 223.3px;
  object-fit: cover;
  border-radius: 30px;
}

.third-section-dog-name h4 {
  margin: 15px 0 0;
  color: #8E2020;
}

.third-section-dog-p {
  margin: 15px 0 0;
  font-size: 18px;
  color: rgb(89, 82, 102);
  font-weight: 400;
}

.third-section-ul {
  margin-top: 10px;
  display: flex;
  justify-content: center;
  gap: 10px;
  font-size: 18px;
  color: #8E2020;
  font-weight: 400;
  list-style: none;
}

.third-section-ul li::after {
  content: "|";
  margin: 0 5px;
}

.third-section-ul li:last-child::after {
  content: "";
}

.dog-profile {
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #f9f9f9;
  padding: 15px;
  text-align: center;
}

.dog-profile-picture {
  width: 100%;
  max-width: 200px;
  height: auto;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 15px;
}

h2 {
  font-size: 24px;
  color: #333;
}

p {
  margin: 5px 0;
  color: #555;
}

.no-dogs-message {
  font-size: 18px;
  color: #888;
  margin-top: 20px;
}

.first-section {
  background-color: #ffecc9;
  width: 100%;
  height: 420px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.first-section h1 {
  font-family: "Balthazar", serif;
  font-weight: lighter;
  font-size: 67px;
  color: #8e2020;
  margin: 0;
}

.first-section p {
  font-size: 24px;
  color: rgb(89, 82, 102);
  font-family: "Inter", sans-serif;
}
  .dog-profile {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
  }
  
  .dog-profile-picture {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
  }
  
  h2 {
    margin-top: 0;
    font-size: 24px;
    color: #333;
  }
  
  p {
    margin: 5px 0;
    color: #555;
  }
  
  strong {
    font-weight: bold;
  }

  .first-section{
    background-color: #FFECD9;
    width: 100%;
    height: 420px;
    text-align: center;
    align-items: center;
    align-content: center;
}

.first-section h1{
    font-family: "Balthazar", serif;
    font-style:normal;
    font-weight: lighter;
    font-size: 67px;
    color: #8E2020;
    margin: 0px
}
.third-section-div{
    margin-right: -40px;
    margin-top: 60px;
    width: 100%;
    height: 428.72px;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
  
  
}

.third-section-div-container{
    width: 1250px;
    height: 100%;
    display: grid;
    grid-template-columns: 416.64px 416.64px 416.64px;
    column-gap: 40px;
    justify-content: center;
    margin-left: -50px;


}
.dog-card {
  display: flex;
  align-items: center;
  padding: 15px;
}

.dog-image {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-right: 15px;
}

.dog-details {
  flex: 1;
}

.third-section-div-container-inside{
    width: 100%;
    height: 100%;
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}

.third-section-div-container-inside-1{
    height: 412.06px;
    width: 399.99px;
    margin: 8.325px;
    border: 1.2px solid rgba(255, 255, 255, 0);
    border-radius: 30px;
    background-color: #ffff;
    box-shadow: 0px 0px 25px 0px rgba(0, 0, 0, 0);
    box-sizing: border-box;
    padding: 27px;
}

.third-section-dog-container{
    width: 344.41px;
    height: 309.06px;

}

.third-section-dog-img{
    width: 344.413px;
    height: 223.300px;
    border-radius: 30px;
}

.third-section-dog-name h4{
    margin-bottom: 0px;
    margin-top: 15px;
    color: #8E2020;
}

.third-section-dog-name a{
    color: #8E2020;
    font-weight: 100;
    -webkit-text-stroke: .5px #000000;
}


.third-section-dog-name{
    text-align: left;
    font-family: "Balthazar", serif;
    color: #8E2020;
    font-size: 24px;
    font-size: 28px;
    margin: 0px;

}
.third-section-dog-p{
    text-align: left;
    margin: 15px 0px 0px 0px;
    font-size: 18px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
}

.third-section-ul{
    margin-left: -40px;
    display: flex;
    flex-wrap: wrap;
    font-size: 18px;
    color: #8E2020;
    font-weight: 400;
    font-family: "Inter", sans-serif;
    list-style: none;
    
  

}

.third-section-ul li{
    text-align: left;
    text-decoration: none;
    align-items: center;


    
}

.third-section-ul li::after{
    content: " |"; 
    margin: 0 5px;
}

.first-section p{
    font-size: 24px;
    color: rgb(89, 82, 102);
    font-weight: 400;
    font-family: "Inter", sans-serif;
}
  </style>
  