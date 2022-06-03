<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "saps_client";

$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn,"SELECT * FROM Report_Crime");

if (isset($_GET["ID"], $_GET["Cell"], $_GET["crimes"], $_GET["othercrimes"])){
  $ID = $_GET["ID"];
  $Cell = $_GET["Cell"];
  $othercrimes = $_GET["othercrimes"];
}

  

$query = "INSERT INTO report_crime(ID_NUM,CELL_NUM) VALUES ("$ID", "$Cell")";
$query2 = "INSERT INTO crime_details(Crime_type) values ('$Crime');"; 
  

$run = mysqli_query($conn,$query) or die(mysqli_error()); 
 
if ($run) {
  echo "form submitted succeffuly"; 
} else {
  echo "all fields required ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Reportcrime.css">
  <link rel="stylesheet" href="footer.css">
  <title>Report Crime</title>
</head>
<style>
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

body.fixed-nav nav {
  position: fixed;
}
img{
  opacity: 0.5;
}
</style>

<header>  
  <img src="zSAPS logo.png" alt="">
  <h1>South African </h1>
</header>
<main>
<nav id="nav-content">

  <ul>
    <li class="logo"><a href="Reportcrime.php">Report Crime</a></li>
    <li><a href="#">Home</a></li>
    <!-- <li><a href="detailsOfCrime.php">Details Of Crime</a></li> -->
    <!-- <li><a href="dashboard.php">Dashboard</a></li> -->
    <!-- <li><a href="Personal details.php">Personal Details</a></li> -->
    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="Resource-center.php">Resources</a></li>
  </ul>
</nav>

<body>
  <div id="reportCrime">
    <form action="Personal details.php" method="post">
      <!-- add method attribute to form -->
      <!-- https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_tel -->

    <div class="group">
      <input type="text" name="ID" placeholder="ID No. / Passport No." required>
      <label>ID Number/Passport Number</label>
    </div>

    <div class="group">
      <input type="tel" name="Cell" placeholder="123-45-678" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
      <label>Cell Number</label>
    </div>

      <!-- dropdown -->
    <div id="dropdown">
      <select name="crimes" onchange="check(this)" id="crimeOptions" required>
        <option value="" disabled selected hidden>Crime Commited</option>
        <option value="other">Other</option>
          <!-- option group1: violent crimes -->
        <optgroup label="Violent crimes">
          <option value="murder">Murder</option>
          <option value="Rape">Rape</option>
          <option value="vehical-hijacking">Vehical Hijacking</option>
          <option value="taxi-violence">Taxi Violence</option>
          <option value="cash-in-transit">Cash-in-transit Heist</option>
          <option value="cash-point-robberies">Cash point Robberies</option>
          <option value="farm-attacks">Farm Attacks</option>
          <option value="kidnapping">Kidnapping</option>
          <option value="gang-violence">Gang Violence</option>
          <option value="xenophobic-violence">Xenophobic Violence</option>
        </optgroup>

        <!-- option group2: finacial and property crimes -->
        <optgroup label="Financial and property srimes">
          <option value="bank-and-credit-card-fraud">Bank and credit card fraud</option>
          <option value="residential-and-farm-land">Residential and farm land</option>
          <option value="building-hijacking">Building Hijacking</option>
          <option value="anti-competitive-practices">Anti competitive practices</option>
          <option value="asset-stripping">Asset stripping</option>
          <option value="pension-and-welfare-fraud">Pension and welfare fraud</option>
          <option value="confidence-tricks">Confidence tricks</option>
          <option value="employment-scams-and-fake-professionals">Employment scams and fake professionals</option>
          <option value="municipalities">Municipalities</option>
          <option value="large-parastatals">Large parastatals</option>
          <option value="targeting-of-government-auditors">Targeting of government auditors</option>
          <option value="lawyers-scams">Lawyers scams</option>
          <option value="covid-19-scams">Covid 19 scams</option>
          <option value="cybercrimes">Cybercrimes</option>   
        </optgroup>

        <!-- option group3: Theft, smuggling and vandalism -->
        <optgroup label="Theft, smuggling and vandalism">
          <option value="vehicle-theft-or-scam">Vehicle theft or scam</option>
          <option value="arson">Arson</option>
          <option value="explosives">Emplosives</option>
          <option value="illegal-mining">Illegal mining</option>
          <option value="livestock-and-produce-theft">Livestock and produce theft</option>
          <option value="housebreaking">Housebreaking</option>
          <option value="municipal-property">Municipal property</option>
          <option value="power-grid">Power grid</option>
          <option value="electricity-theft">Electricity theft</option>
          <option value="fuel-theft">Fuel theft</option>
          <option value="school-plunder-and-vandalisms">Scholl plunder and vandalisms</option>
          <option value="drug-smuggling-and-consumption">Drug smuggling and consumption</option>
          <option value="cigerette-smuggling">Cigerette smuggling</option>
          <option value="cultural-artifacts">Cultural-artifacts</option>   
        </optgroup>

        </select>
            <div id="specify" style="display: none;">
              <input type="text" id="otherCrime" name="othercrimes" placeholder="Specify Crime">
            </div>
      </div>

            
      <button type="submit" name="submit">
        Submit
      </button>
      </form>

        
        
    </div>

    <div id="media">
        <!-- user guide and other SAP related news -->
    </div>
   
<script>

 // nav 
const nav = document.querySelector("#nav-content");
let topOfNav = nav.offsetTop;

function fixNav() {
  if (window.scrollY >= topOfNav) {
    document.body.style.paddingTop = nav.offsetHeight + "px";
    document.body.classList.add("fixed-nav");
  } else {
    document.body.classList.remove("fixed-nav");
    document.body.style.paddingTop = 0;
  }
}

window.addEventListener("scroll", fixNav);


        function check(elem) {
    // use one of possible conditions
    if (elem.selectedIndex == 1) {
        document.getElementById("specify").style.display = 'block';
    } else {
        document.getElementById("specify").style.display = 'none';
    }

    
}


</script>
</main>
<div class="size">
   
  <footer>
    <div class="left">
      <li>
        <ul> <a href="Reportcrime.php">Home</a></ul>
        <ul><a href="Contact.php">Contact us</a></ul>
        <ul> <a href="Resource-centre.php">Resource center</a></ul>
        <ul>  <a href="services.php">Services</a></ul>
            
        <ul><a href="child-safety.php">Child Safety</a></ul>
        <ul> <a href="talk.php">Talk to us</a></ul>
        <ul> <a href="be-alert.php">Be Alert</a></ul>
      </li>
    </div>

    <div class="center">
      <br>
      <p>
        <a href="copyright.php">Copyright</a><br>
        <a href="disclaimer.php">Disclaimer</a><br>
        <a href="mailto:karabomarope07@gmail.com;">Web Content Manager : Col S Werber</a><br>
        <a href="mailto:lukhanyo81mzi@gmail.com;">For Technical Assistance: Web Team </a><br><br><br><br><br>
          Copyright @2014 South African Police Service (SAPS) <br> Maintained by: SITA SAPS Webteam (SITA TIS) Best <br> viewed at a screen resolution of 1026 x 800 Most <br> compatible with IE 7 and higher
      </p>
    </div>

    <div class="right">
      <p id="">
        <br>
        Head Office<Br><br>Tel: +27 (0) 12 393 1000 <br>SAPS Head Office <br>Koedoe Building<br>236 Pretorius Street<br>Pretoria<br>Private Bag X94<br>Pretoria<br>0001<br>GPS Coordinates: S25.74790 E28.18901
      </p>
    </div>

  </footer>
</div>
</body>
</html>


<!-- 
https://www.w3schools.com/howto/howto_js_dropdown.asp
https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_optgroup -->
