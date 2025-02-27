<template>
    
  <section class="first-section">
  <div class="first-section-div">
     <div class="first-section-div-inside">
          <div class="first-section-div-inside-1">
              <img src="/public/Assets/images/logo.png" alt="">
              <ul>
              
              <router-link to="/adminuserview">
                  <li>
                      User Management
                  </li>
              </router-link>
              <router-link to="/adminpetview">
                  <li>
                      Pet Management
                  </li>
              </router-link>
              <router-link to="/adminadoptapplicationview">
                  <li>
                      Adoption Application Management
                  </li>
              </router-link>
                  <li style="border: 0px;">
                      Log out
                  </li>
          </ul>
      
          </div>
          <div class="first-section-div-inside-2">
              <h1>
                  User Management
              </h1>
              <div style="margin-left: -300px;" >
                      <button @click="toggleCreateForm">
                      {{ showCreateForm ? "Cancel" : "Create New User" }}
                      </button>

                      <div v-if="showCreateForm" class="create-user-overlay">
                      <div class="create-user-form">
                          <h2>Create New User</h2>
                          <form @submit.prevent="createUser">
                          <div>
                              <label for="fname">First Name:</label>
                              <input type="text" v-model="newUser.fname" required />
                          </div>
                          <div>
                              <label for="lname">Last Name:</label>
                              <input type="text" v-model="newUser.lname" required />
                          </div>
                          <div>
                              <label for="email">Email:</label>
                              <input type="email" v-model="newUser.email" required />
                          </div>
                          <div>
                              <label for="password">Password:</label>
                              <input type="password" v-model="newUser.password" required />
                          </div>
                          <div>
                              <label for="password_confirmation">Confirm Password:</label>
                              <input
                              type="password"
                              v-model="newUser.password_confirmation"
                              required
                              />
                          </div>
                          <button style="margin-left: 100px;" type="submit">Create User</button>
                          </form>
                      </div>
                      </div>
                  </div>
              <div class="first-section-div-inside-3">
                <table style="box-sizing: border-box;">
                  <thead>
                    <tr>
                      <th> ID</th>
                      <th style="padding-left: 50px;">FULL NAME</th>
                      <th style="padding-left: 80px;">EMAIL</th>
                      <th style="padding-left: 80px;">CONTROL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <td style="padding-right: 50px;">{{ user.user_id }}</td>
                      <td>{{ user.fname }} {{ user.lname }}</td>
                      <td>{{ user.email }}</td>
                      <td style="column-gap: 10px;">
                        <button @click="openEditModal(user)" style="margin-left: 10px; margin-right: 10px;">Edit</button>
                        <button @click="deleteUser(user.id)">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                   <!-- Edit Modal -->
                   <div>
                      <!-- Other UI elements -->

                      <div v-if="showEditModal" class="edit-user-overlay">
                      <div class="edit-user-modal">
                          <h3>Edit User</h3>
                          <form @submit.prevent="updateUser">
                          <div>
                              <label for="fname">First Name:</label>
                              <input
                              id="fname"
                              type="text"
                              v-model="editUserData.fname"
                              placeholder="First Name"
                              required
                              />
                          </div>
                          <div>
                              <label for="lname">Last Name:</label>
                              <input
                              id="lname"
                              type="text"
                              v-model="editUserData.lname"
                              placeholder="Last Name"
                              required
                              />
                          </div>
                          <div>
                              <label for="email">Email:</label>
                              <input
                              id="email"
                              type="email"
                              v-model="editUserData.email"
                              placeholder="Email"
                              required
                              />
                          </div>
                          <div>
                              <label for="password">Password:</label>
                              <input
                              id="password"
                              type="password"
                              v-model="editUserData.password"
                              placeholder="Password"
                              />
                          </div>
                          <div class="form-actions">
                              <button style="margin:0px;" type="submit">Save</button>
                              <button style="margin: 0px;;" type="button" @click="closeEditModal">Cancel</button>
                          </div>
                          </form>
                      </div>
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
import axios from 'axios';

export default {
data() {
return {
showCreateForm: false, 
users: [],
showEditModal: false,
editUserData: {
  id: null,
  fname: '',
  lname: '',
  email: '',
  password: '',
},
};
},
created() {
this.fetchUsers();
},
methods: {
async fetchUsers() {
try {
  const response = await axios.get('/api/admin/users');
  this.users = response.data;
} catch (error) {
  console.error('Error fetching users:', error);
}
},
toggleCreateForm() {
this.showCreateForm = !this.showCreateForm;
if (!this.showCreateForm) {
  this.resetForm(); // Clear the form when toggling off
}
},
  openEditModal(user) {
  this.editUserData = { ...user, password: '' }; // Pre-fill the data
  this.showEditModal = true;
},
closeEditModal() {
this.showEditModal = false;
this.editUserData = { id: null, fname: '',lname: '', email: '', password: '' };
},
async updateUser() {
try {
  const data = {
      fname: this.editUserData.fname,
      lname: this.editUserData.lname,
      email: this.editUserData.email,
  };

  // Only include password if it's being updated
  if (this.editUserData.password) {
      data.password = this.editUserData.password;
      data.password_confirmation = this.editUserData.password; // Required for confirmation
  }

  await axios.put(`/api/admin/users/${this.editUserData.id}`, data);
  alert('User updated successfully');
  this.closeEditModal();
  this.fetchUsers(); // Refresh the list
} catch (error) {
  console.error('Error updating user:', error.response?.data || error);
}
},
async deleteUser(userId) {
if (confirm('Are you sure you want to delete this user?')) {
  try {
    await axios.delete(`/api/admin/users/${userId}`);
    alert('User deleted successfully');
    this.fetchUsers(); // Refresh the user list
  } catch (error) {
    console.error('Error deleting user:', error);
  }
}
},
async createUser() {
try {
  const response = await axios.post("/api/admin/users", this.newUser);
  alert("User created successfully!");
  this.fetchUsers(); // Refresh the user list
  this.toggleCreateForm(); // Close the form after success
} catch (error) {
  console.error("Error creating user:", error.response?.data || error);
  alert("Failed to create user. Please check the inputs.");
}
},
resetForm() {
this.newUser = {
  fname: "",
  lname: "",
  email: "",
  password: "",
  password_confirmation: "",
};
},
},
};
</script>