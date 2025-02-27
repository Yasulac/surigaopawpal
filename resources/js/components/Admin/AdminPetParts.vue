<template>
    <section class="first-section">
      <div class="first-section-div">
        <div class="first-section-div-inside">
          <div class="first-section-div-inside-1">
            <img src="/public/Assets/images/logo.png" alt="Logo" />
            <ul>
          
              <router-link to="/adminuserview">
                <li>User Management</li>
              </router-link>
              <router-link to="/adminpetview">
                <li>Pet Management</li>
              </router-link>
              <router-link to="/adminadoptapplicationview">
                <li>Adoption Application Management</li>
              </router-link>
              <li style="border: 0px;">Log out</li>
            </ul>
          </div>
          <div class="first-section-div-inside-2">
            <h1>Pet Management</h1>
            <div>
              <button @click="toggleCreatePetForm">
                {{ showCreatePetForm ? "Cancel" : "Add New Pet" }}
              </button>
  
              <!-- Create Pet Form -->
              <div v-if="showCreatePetForm" class="create-pet-overlay">
                <div class="create-pet-form">
                  <h2>Create New Pet</h2>
                  <form @submit.prevent="createPet">
                    <div>
                      <label for="name">Pet Name:</label>
                      <input type="text" v-model="newPet.name" required />
                    </div>
                    <div>
                      <label for="age">Age:</label>
                      <input type="number" v-model="newPet.age" required />
                    </div>
                    <div>
                      <label for="breed">Breed:</label>
                      <input type="text" v-model="newPet.breed" required />
                    </div>
                    <div>
                      <label for="gender">Gender:</label>
                      <select v-model="newPet.gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <button type="submit">Add Pet</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="first-section-div-inside-3">
              <table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Pet Name</th>
                    <th>Breed</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Control</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="pet in pets" :key="pet.id">
                    <td>{{ pet.pet_id }}</td>
                    <td>{{ pet.dog_name }}</td>
                    <td>{{ pet.breed }}</td>
                    <td>{{ pet.age }}</td>
                    <td>{{ pet.sex }}</td>
                    <td>
                      <button @click="openEditPetModal(pet)">Edit</button>
                      <button @click="deletePet(pet.id)">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
  
              <!-- Edit Pet Modal -->
              <div v-if="showEditPetModal" class="modal-overlay">
                <div class="modal">
                  <h3>Edit Pet</h3>
                  <form @submit.prevent="updatePet">
                    <div>
                      <label for="name">Pet Name:</label>
                      <input type="text" v-model="editPetData.name" required />
                    </div>
                    <div>
                      <label for="age">Age:</label>
                      <input type="number" v-model="editPetData.age" required />
                    </div>
                    <div>
                      <label for="breed">Breed:</label>
                      <input type="text" v-model="editPetData.breed" required />
                    </div>
                    <div>
                      <label for="gender">Gender:</label>
                      <select v-model="editPetData.gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-actions">
                      <button type="submit">Save</button>
                      <button type="button" @click="closeEditPetModal">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  

<style scoped>
body{
margin: 0px;

}


.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1000;
}
.modal {
  background: white;
  padding: 20px;
  border-radius: 10px;
  width: 400px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}
.modal h2 {
  text-align: center;
}
.modal form div {
  margin-bottom: 15px;
}
.modal form label {
  display: block;
  margin-bottom: 5px;
}
.modal form input,
.modal form select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.form-actions {
  display: flex;
  justify-content: space-between;
  gap: 10px;
}
.form-actions button {
  flex: 1;
  padding: 10px;
  border-radius: 5px;
  color: white;
}

.first-section{
width: 1250px;
height: 1000px;

}
.first-section{

padding: 0px;
}
.first-section-div{
width: 100%;
height: 100%;
display: flex;
align-items: center;
align-content: center;
justify-content: center;
padding: 0px;
margin-left: -50px;
margin-top: -50px;
}

.first-section-div-inside{

width: 1250px;
height: 100%;
display: grid;
grid-template-columns: 297px 1fr;
}

.create-user-overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
display: flex;
justify-content: center;
align-items: center;
background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
z-index: 1000;
}

.edit-user-overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
display: flex;
justify-content: center;
align-items: center;
z-index: 1000;
}

/* Edit User modal */
.edit-user-modal {
background: white;
padding: 20px;
border-radius: 10px;
width: 400px;
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.edit-user-modal h3 {
margin-bottom: 15px;
text-align: center;
}

.edit-user-modal form div {
margin-bottom: 15px;
}

.edit-user-modal form label {
display: block;
margin-bottom: 5px;
font-weight: bold;
}

.edit-user-modal form input {
width: 100%;
padding: 8px;
border: 1px solid #ccc;
border-radius: 5px;
box-sizing: border-box;
}

.edit-user-modal .form-actions {
display: flex;
justify-content: space-between;
gap: 10px;
}

.edit-user-modal .form-actions button {
flex: 1;
padding: 10px;
background-color: #007bff;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
text-align: center;
}

.edit-user-modal .form-actions button:hover {
background-color: #0056b3;
}

.edit-user-modal .form-actions button[type="button"] {
background-color: #d9534f;
}

.edit-user-modal .form-actions button[type="button"]:hover {
background-color: #c9302c;
}

/* Create User form container */
.create-user-form {
background: white;
padding: 20px;
border-radius: 10px;
width: 400px;
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.create-user-form form div {
margin-bottom: 10px;
}

.create-user-form form label {
display: block;
margin-bottom: 5px;
font-weight: bold;
}

.create-user-form form input {
width: 100%;
padding: 8px;
border: 1px solid #ccc;
border-radius: 5px;
box-sizing: border-box;
}

.create-user-form form button {
padding: 10px 20px;
background-color: #007bff;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}

.create-user-form form button:hover {
background-color: #0056b3;
}

.first-section-div-inside-1{
width: 100%;
height: 100%;
background-color: #8E2020;
}

ul{
text-align: center;
text-decoration: none;
padding-left: 0px;

}

li{

padding-left: 15px;
padding-right: 15px;
padding-top: 15px;
padding-bottom: 15px;
text-decoration: none;
list-style: none;
border-bottom: 1px #CAC4D0 solid;
font-size: 16px;
font-family: "Poppins", sans-serif;
font-weight: 400;
font-style: normal;
color: #fff;
}

.first-section-div-inside-2{

width: 1100px;
max-height: 1500px;
height: 800px;
background-color: #d5d5d5;
padding: 60px;
}

.first-section-div-inside-2 h1{

margin: 0px;
font-size: 28px;
font-family: "Poppins", sans-serif;
font-weight: 400;
font-style: normal;
color: #8E2020;
}
.first-section-div-inside-3{
margin-top: 50px;
width: 100%;
height: 659px;
background-color: #fff;
border-radius: 20px;
}

table{
width: 100%;
}

table th{
padding: 20px;
text-align: start;
border-bottom: 1px black solid;
font-size: 16px;
font-family: "Poppins", sans-serif;
font-weight: bold;
font-style: normal;
color: #000
}


table td{
font-size: 16px;
font-family: "Poppins", sans-serif;
font-weight: 400;
font-style: normal;
color: #000;
padding: 20px;
padding-left: 20px;

}

table button{
margin: 20px;
width: 100px;
margin: 0px;
border-radius: 20px;    
font-size: 16px;
font-family: "Poppins", sans-serif;
font-weight: bold;
font-style: normal;
color: #ffffff;
}

table button:hover{
cursor: pointer;
}



</style>
<script>
import axios from "axios";

export default {
  data() {
    return {
      showCreatePetForm: false,
      showEditPetModal: false,
      pets: [],
      newPet: { name: "", breed: "", age: null, gender: "Male" },
      editPetData: { id: null, name: "", breed: "", age: null, gender: "Male" },
    };
  },
  methods: {
    toggleCreatePetForm() {
      this.showCreatePetForm = !this.showCreatePetForm;
    },
    async fetchPets() {
      try {
        const response = await axios.get("/api/admin/pets");
        this.pets = response.data;
      } catch (error) {
        console.error("Error fetching pets:", error);
      }
    },
    async createPet() {
      try {
        await axios.post("/api/admin/pets", this.newPet);
        alert("Pet created successfully!");
        this.toggleCreatePetForm();
        this.fetchPets();
      } catch (error) {
        console.error("Error creating pet:", error);
      }
    },
    openEditPetModal(pet) {
      this.editPetData = { ...pet };
      this.showEditPetModal = true;
    },
    closeEditPetModal() {
      this.showEditPetModal = false;
      this.editPetData = { id: null, name: "", breed: "", age: null, gender: "Male" };
    },
    async updatePet() {
      try {
        await axios.put(`/api/admin/pets/${this.editPetData.id}`, this.editPetData);
        alert("Pet updated successfully!");
        this.closeEditPetModal();
        this.fetchPets();
      } catch (error) {
        console.error("Error updating pet:", error);
      }
    },
    async deletePet(petId) {
      if (confirm("Are you sure you want to delete this pet?")) {
        try {
          await axios.delete(`/api/admin/pets/${petId}`);
          alert("Pet deleted successfully!");
          this.fetchPets();
        } catch (error) {
          console.error("Error deleting pet:", error);
        }
      }
    },
  },
  created() {
    this.fetchPets();
  },
};
</script>
