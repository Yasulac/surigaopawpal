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
                                  <img class="third-section-dog-img" src="data:image/jpeg;base64,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" alt="">
              </a>
              <div class="dog-details">
                <h2>{{ dog.name }}</h2>
                <p>{{ dog.breed }}</p>
                <p>{{ dog.age }} years old</p>
                <!-- Add the Adopt button here -->
                <router-link :to="`/pet/${dog.pet_id}`">
              <button style="margin-left: -10px;" class="adopt-button">Adopt This Pet</button>
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
      async fetchDogData() {
        try {
          const token = localStorage.getItem('auth_token');
          const response = await axios.get('http://127.0.0.1:8000/api/rehoming', {
            headers: { Authorization: `Bearer ${token}` },
          });

          this.dogs = response.data.rehomingRequests || []; // Store all dogs in the list
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
    