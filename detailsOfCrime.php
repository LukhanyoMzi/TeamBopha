<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "saps_client";

$conn = new mysqli($hostName, $userName, $password, $databaseName);
if (!$conn) {
echo "There were problems connecting";

} 
$IDNo = $_POST['idNum']; 
$Name = $_POST['name'];
$email = $_POST['email'];
$CellNum = $_POST['cellnumber'];
$surname = $_POST['surname'];
// $Gender = $_POST['gender'];

// $AltNumber = $_POST['altcellnumber']; 
// $NextofKin = $_POST['nextofkin']; 
// $KindCellNum = $_POST['kincellnumber']; 
$StreetName = $_POST['streetname']; 
$Town_Surbub = $_POST['town/suburb']; 
$City = $_POST['city']; 
$Postalcode = $_POST['postalcode']; 
$Passw = $_POST['pass']; 

// $query2 = "INSERT INTO `report_crime`(`ID_Num`, `Cell_Num`) VALUES ($ID,$CellNum);";
// $query = "INSERT INTO `registration`(`First_Name`, `ID_Num`, `Password`, `Last_Name`, `Address`, `Town_Name`, `City_Name`, `Postal_Code`, `email`)
//  VALUES ('$Name',$IDNo,'$Passw','$surname','$StreetName','$Town_Surbub','$City',$Postalcode,'$email');";
// $insert2 = mysqli_query($conn,$query2);
// $insert = mysqli_query($conn,$query);

// if (!$insert) {
//     echo "Problems";
// }else {
//     echo "";
// }

// if (!$insert2) {
//     echo "Problems";
// }else {
//     echo "";
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=500, initial-scale=1">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="detailsofcrime.css">
    <title>Details of Crime</title>
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
<nav id="nav-content">


<ul>
    <li class="logo"><a href="detailsOfCrime.php">Details Of Crime</a></li>
    <li><a href="Reportcrime.php">Home</a></li>
    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="Resource-center.php">Resources</a></li>
 </ul>
</nav>

<body>

    <div id="descriptionBox">
        <form action="dashboard.php" method="post" name="dashboard">
            <!-- add method attribute to form -->
            <textarea name="description" id="descriptionText" cols="30" rows="10" placeholder="Please provide a detailed desciption of the incident" required></textarea>
            <div>
              <button type="submit" name="submit">Submit</button>
            </div>
        </form>

        
    </div>
</body>
 

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

</script>

</div>

</html>

