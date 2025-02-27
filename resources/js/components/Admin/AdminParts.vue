<template>
     <section class="first-section">
        <div class="first-section-div">
           <div class="first-section-div-inside">
                <div class="first-section-div-inside-1">
                    <img src="/public/Assets/images/logo.png" alt="">
                    <ul>
                    <router-link to="/adminview">
                        <li>
                            Dashboard
                        </li>
                    </router-link>
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
                        Dashboard
                    </h1>

                    <div class="first-section-div-inside-2-div">
                        <div class="first-section-div-inside-2-div-1">
                            <div style="align-items: center; align-content: center;">
                                <img width="69px" height="67.31px" src="/public/Assets/images/pet_11762453.png" alt="">
                            </div>
                            <div class="first-section-div-inside-2-div-1-content">
                                <p>
                                    Number of Pets<br> Available
                                </p>
                                <h1>
                                    00
                                </h1>
                            </div>
                        </div>
                        <div class="first-section-div-inside-2-div-2">
                            <div style="align-items: center; align-content: center;">
                                <img width="69px" height="67.31px" src="/public/Assets/images/dog_10657884.png" alt="">
                            </div>
                            <div class="first-section-div-inside-2-div-1-content">
                                <p>
                                    Successful<br> adoptions
                                </p>
                                <h1>
                                    00
                                </h1>
                            </div>
                        </div>
                        <div class="first-section-div-inside-2-div-3">
                            <div style="align-items: center; align-content: center;">
                                <img width="69px" height="67.31px" src="https://cdn-icons-png.freepik.com/256/1687/1687978.png?uid=R116457652&ga=GA1.1.390817905.1726707646&semt=ais_hybrid" alt="">
                            </div>
                            <div class="first-section-div-inside-2-div-1-content">
                                <p>
                                    Adoption<br> request
                                </p>
                                <h1>
                                    00
                                </h1>
                            </div>
                        </div>
                        <div class="first-section-div-inside-2-div-3">
                            <div style="align-items: center; align-content: center;">
                                <img width="69px" height="67.31px" src="https://cdn-icons-png.freepik.com/256/12112/12112619.png?uid=R116457652&ga=GA1.1.390817905.1726707646&semt=ais_hybrid" alt="">
                            </div>
                            <div class="first-section-div-inside-2-div-1-content">
                                <p>
                                    Registered<br> user
                                </p>
                                <h1>
                                    00
                                </h1>
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

.first-section-div-inside-2-div {
    margin-top: 30px;
    width: 1100px;

    height: 500px;
    display: grid;
    grid-template-columns: 297px 297px 297px;
    justify-content: space-between;
}

.first-section-div-inside-2-div-1{
    width: 297.5px;
    height: 175px;
    background-color: #40189D;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px;
    display: grid;
    grid-template-columns: 69px 1fr;
}

.first-section-div-inside-2-div-1-content p{
    font-size: 18px;
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    color: #fff;
    font-style: normal;
    margin: 0px;
}

.first-section-div-inside-2-div-1-content{
    text-align: end;
}

.first-section-div-inside-2-div-1-content h1{
    
    margin: 0px;
    margin-top: 20px;
    font-size: 48px;
    font-family: "Poppins", sans-serif;
    font-weight: bold;
    color: #fff;
    font-style: normal;

}
.first-section-div-inside-2-div-2{
    width: 297.5px;
    height: 175px;
    background-color: #48A9F8;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px;
    display: grid;
    grid-template-columns: 69px 1fr;
}

.first-section-div-inside-2-div-3{
    width: 297.5px;
    height: 175px;
    background-color: #1BD084;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px;
    display: grid;
    grid-template-columns: 69px 1fr;
}
</style>