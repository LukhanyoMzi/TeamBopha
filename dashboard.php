<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "saps_database";

$conn = new mysqli($hostName, $userName, $password, $databaseName);
if ($conn->connect_error){
  die ('Connection failed : ' .$conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.dash.css">
    

<script src='https://api.mapbox.com/mapbox-gl-js/v2.8.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.8.0/mapbox-gl.css' rel='stylesheet' />

    <script src="dashboard.js"></script>
</head>

<style>
    /* nav {
  background: black;
  top: 0;
  width: 100%;
  height: 60px;
  transition: all 0.5s;
  position: relative;
  z-index: 1;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
}

nav li {
  flex: 1;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: baseline; 
  
}

li.logo {
  max-width: 0;
  overflow: hidden;
  background: white;
  transition: all 0.5s ease-in-out;
  font-weight: 600;
  font-size: 18px;
}

li.logo a {
  color: black;
}

.fixed-nav li.logo {
  max-width: 500px;
}

nav a {
  text-decoration: none;
  padding: 20px;
  display: inline-block;
  color: white;
  transition: all 0.5s;
  text-transform: uppercase;
}

header {
  text-align: center;
  height: 50vh;
  background:url('flag.jpg');
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
}

h1 {
  color: white;
  font-size: 7vw;
  text-shadow: 3px 4px 0 rgba(0, 0, 0, 0.2);
}

/* body.fixed-nav .site-wrap {
  transform: scale(1);
} */

/* body.fixed-nav nav {
  position: fixed;
  /* box-shadow: 0 5px 0 rgba(0, 0, 0, 0.1);
}
img{
  opacity: 0.5;
} */

*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Poppins' ,sans-serif;
}
nav {
  background: black;
  top: 0;
  width: 100%;
  height: 60px;
  transition: all 0.5s;
  position: relative;
  z-index: 1;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
}

nav li {
  flex: 1;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: baseline; 
  
}

li.logo {
  max-width: 0;
  overflow: hidden;
  background: white;
  transition: all 0.5s ease-in-out;
  font-weight: 600;
  font-size: 18px;
}

li.logo a {
  color: black;
}

.fixed-nav li.logo {
  max-width: 500px;
}

nav a {
  text-decoration: none;
  padding: 20px;
  display: inline-block;
  color: white;
  transition: all 0.5s;
  text-transform: uppercase;
}

header{
  background: #fff;
  display: flex;
  justify-content: space-between;
  padding: 10px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

header h2{
    padding: 10px;
    margin: auto;
    margin-right: 70%;
}

.user-name{
    margin: auto;
    margin-right: 20px;
}




</style>
<nav id="Header1">
    <header>
    <img src="zSAPS logo.png" alt="SAPS logo" id="logo">

        <h2>
          Dashboard
        </h2>
    
        <div class="user-name">
            <h4>Mbali Khumalo</h4>
            <small>Case Number: </small>
         </div>
      </header>
    
</nav>

<body>
    <!-- <div id="pageLinks">
        <table>
            <tr>
                <td><button>Case Information</button></td>
                <td><button>Personal Information</button></td>
            </tr>
        </table>  
    </div> -->

    <!-- Requires data from the Home page, description page, and location from user device -->
    <div id="content1">
        <!-- adding a map tha has the location of all Police Stattions relative to users device -->
        <div id="mapContent">
            <h3>Nearest Police Station</h3> <br>

            <div id="map"  style="height: 350px; width: auto;"></div>
        </div>

        <div id="officer-assigned">
            <h3>Assigned Officer</h3> <br>
            <img src="profile.png" alt="profile image" class="profile-image">
            <p>Name: </p>
            <p>Rank: </p>
            <p>Station: </p>
            <p><u>Contact details </u></p>
            <p>Cell Phone:</p>
            <p>Email: </p>
        </div>
    </div>

    <div class="section-center">
        <div class="tabs">
          
          <div class="btn-container">
            <button class="button live" data-id="step1">Case Information</button>
            <button class="button" data-id="step2">Personal Information</button>
          </div>
          <div class="tabs-content">
            
            <div class="content live" id="step1">


              <!-- case information  -->
              <div id="mainContent">
                <h1>Case Information</h1>
                <!-- adding location  -->
                <h3 id="location">Brixton Police Station</h3>
                <h3 id="caseNo">CAS 36/05/2022</h3>
                
                <div id="crimeDetails">
                    <h3 style="margin-top: 15px; margin-bottom: 15px;">Details of Crime</h3>
            
                    <div id="details">
                    <!-- add device location  -->
                    <span><p class="detailName">Location: </p> Menton & Napier rd, Richmond, Johaneesburg, 2092</span>
                    <!-- add date and time of which crime was reported  -->
                    <span><p class="detailName">Date: </p>15/05/2022</span>
                    <span><p class="detailName">Time: </p>16:55</span>
                    <!-- add crime commited -->
                    <span><p class="detailName">Type of Crime: </p>Theft, smuggling and vandalism - Vehicle theft or scams</span>
                    </div>
            
                    <div id="descriptionBox">
                        <h4>Description</h4>
                        <p id="description">
                            
                            - Description of place <br>
                            - Description of people involved <br>
                            - Description of actions taken during and after incident
                        <br><br>
        
                        <!-- new text added by victim  -->
                            <p id="addedText"></p>
        
        
        
                            <!-- onclick create textarea  -->
                            <button onclick="addText()">Add information</button>
        
                            <div id="addText"></div>
                        </p>
                        
                    </div>
                </div>
            </div>
           
        
            <script>
                       
                // Create a break line element
                var br = document.createElement("br");
                function addText() {
                           
                // Create a form dynamically
                var form = document.createElement("form");
                form.setAttribute("method", "post");
             
                // Create an input element for Full Name
                var textarea = document.createElement("textarea");
                textarea.setAttribute("id", "newText")
             
                            // create a submit button
                            var submit = document.createElement("input");
                            submit.setAttribute("type", "submit");
                            submit.setAttribute("value", "Submit");
                            submit.setAttribute("id", "appendText");
                             
                            // Append text area
                            form.appendChild(textarea);
                             
                            // Append the submit button to the form
                            form.appendChild(submit);
             
                            document.getElementById("addText").appendChild(form);
                            
        
                        }
    
        
        
                    </script>

            </div>
            
            <div class="content" id="step2">
                
                        <form class="PersonalDetails" action="#" method="post">
                            <!-- <h1 class="PersonalD">Personal Details</h1> -->
                    
                            <div id="section-container">
                                <div class="section">
                                    <h4>Personal Details</h4> <br>
                                    <!-- Name -->
                                    <div class="group">
                                        <input type="text" id="name" name="name" required>
                                        <label>Name</label>
                                    </div>
                        
                                    <!-- Surname -->
                                    <div class="group">
                                        <input type="text" id="surname" name="surname" required>
                                        <label>Surname</label>
                                    </div>
                        
                                    <!-- ID Number/Passport Number -->
                                    <div class="group">
                                        <input type="number" id="id/passport" name="id/passport" required>
                                        <label>ID Number/Passport Number</label>
                                    </div>
                        
                                    <!-- Cell Number -->
                                    <div class="group">
                                        <input type="number" id="cellnumber" name="cellnumber" required>
                                        <label>Phone Number</label>
                                    </div>
                        
                                    <!-- Alternative Number -->
                                    <div class="group">
                                        <input type="number" id="altcellnumber" name="altcellnumber" required>
                                        <label>Alternative Number</label>
                                    </div>
                                    
                        
                                    <!-- email -->
                                    <div class="group">
                                        <input type="email" id="email" name="email" required>
                                        <label>Email</label>
                                    </div>
                                    
                        
                                    
                                </div>
                               
                                
                                <div class="section">
                                    <!-- Next of kin Names -->
                                    <div class="group">
                                        <input type="text" id="nextofkin" name="nextofkin" required>
                                        <label>Next Of Kin Full Name</label>
                                    </div>
                        
                        
                                    <!-- Next of kin cell number  -->
                                    <div class="group">
                                        <input type="number" id="kincellnumber" name="kincellnumber" required>
                                        <label>Kin Phone Number</label>
                                    </div>
                                    
                                    <h4>Home Address</h4> <br>
                        
                                    <!-- Street Name -->
                                    <div class="group">
                                        <input type="text" id="streetname" name="streetname" required>
                                        <label>Street Name</label>
                                    </div>
                                    
                            
                                    <!-- Town  -->
                                    <div class="group">
                                        <input type="text" id="town/suburb" name="town/suburb" required>
                                        <label>Town</label>
                                    </div>
                                    
                            
                                    <!-- City  -->
                                    <div class="group">
                                        <input type="text" id="city" name="city" required>
                                        <label>City</label>
                                    </div>
                                    
                            
                                    <!-- Postal Code  -->
                                    <div class="group">
                                        <input type="number" id="postalcode" name="postalcode" required>
                                        <label>Postal Code</label>
                                    </div>
                                    
                                </div>
                            </div>
            
                  
            </div>
           
            <!-- end of single item -->
        
          </div>
        </div>
      </div>
  
      <script>
mapboxgl.accessToken = 'pk.eyJ1Ijoia2F0LW1hbG9wZSIsImEiOiJjbDF4OTBwNGswMGo5M2JvMHdqZjAwM3duIn0.3kggYLI8ZRCust-xJap61w';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});

// Create a new marker.
const marker = new mapboxgl.Marker()
    .setLngLat([-26.1452310, 28.0384710])
    .addTo(map);





          //tabs
const tabs = document.querySelector(".tabs");
const btns = document.querySelectorAll(".button");
const articles = document.querySelectorAll(".content");
tabs.addEventListener("click", function (e) {
  const id = e.target.dataset.id;
  if (id) {
    // remove selected from other buttons
    btns.forEach(function (btn) {
      btn.classList.remove("live");
    });
    e.target.classList.add("live");
    // hide other articles
    articles.forEach(function (article) {
      article.classList.remove("live");
    });
    const element = document.getElementById(id);
    element.classList.add("live");
  }
});


      </script>



<script src="dashboard.js"></script>  
        
</body>

</html>
