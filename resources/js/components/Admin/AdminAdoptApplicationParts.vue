<template>
    <section class="first-section">
        <div class="first-section-div">
            <div class="first-section-div-inside">
                <!-- Sidebar Menu -->
                <div class="first-section-div-inside-1">
                    <img src="/public/Assets/images/logo.png" alt="">
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
                        <li style="border: 0px;" @click="logout">Log out</li>
                    </ul>
                </div>

                <!-- Main Content -->
                <div class="first-section-div-inside-2">
                    <h1>Adoption Application Management</h1>
                    <div class="first-section-div-inside-3">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Adopter Name</th>
                <th>Pet Name</th>
                <th>Date</th>
                <th>Status</th>
                <th style="margin-left: -300px;">Control</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="application in applications" :key="application.id">
                <td style="padding-left: 40px;">{{ application.id }}</td>
                <td style="width: 250px; padding-left: 40px;">{{ application.user_name }}</td>
                <td >{{ application.dog_name }}</td>
                <td>{{ application.created_at }}</td>
                <td >{{ application.status }}</td>
                <td  style="text-align: start; width: 200px;">
                  <button  style="color: #fff; " @click="approveRequest(application.id)">Approve</button>
                  <button style="color: #fff;" @click="rejectRequest(application.id)">Reject</button>
                </td>
              </tr>
            </tbody>
          </table>
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
padding-left: 50px;
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
text-align: center;
justify-content: center;
}

table button{

padding: 10px 30px 10px 30px;
border-radius: 20px;
font-size: 16px;
font-family: "Poppins", sans-serif;
font-weight: bold;
font-style: normal;
color: #000;
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
      applications: [],
    };
  },
  mounted() {
    this.fetchApplications();
  },
  methods: {
  async fetchApplications() {
    try {
      const response = await axios.get('http://localhost:8000/api/adoption-requests');
      this.applications = response.data;
    } catch (error) {
      console.error('Error fetching adoption requests:', error);
    }
  },
  async approveRequest(id) {
    try {
      const response = await axios.put(`http://localhost:8000/api/adoption-requests/${id}/approve`);
      this.fetchApplications();  // Re-fetch the applications to reflect changes
      alert('Adoption request approved.');
    } catch (error) {
      console.error('Error approving adoption request:', error);
      alert('There was an error approving the request.');
    }
  },
  async rejectRequest(id) {
    try {
      const response = await axios.put(`http://localhost:8000/api/adoption-requests/${id}/reject`);
      this.fetchApplications();  // Re-fetch the applications to reflect changes
      alert('Adoption request rejected.');
    } catch (error) {
      console.error('Error rejecting adoption request:', error);
      alert('There was an error rejecting the request.');
    }
  },
},
};
</script>
