<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "saps_client"; 

$conn = new mysqli($host,$user,$pass,$db);
if (!$conn) {
echo "There was problems connecting";

} 
$ID = $_POST['ID'];
// $email = $_POST['email'];
$CellNum = $_POST['Cell'];
$Crime = $_POST['crimes'];
// $Gender = $_POST['gender'];
$query2 = "INSERT INTO `report_crime`(`ID_Num`, `Cell_Num`) VALUES ($ID,$CellNum);";
$query = "INSERT INTO `crime_details`(`Crime_type`) VALUES ('$Crime');";
$insert2 = mysqli_query($conn,$query2);
$insert = mysqli_query($conn,$query);

if (!$insert) {
    echo "Problems";
}else {
    echo "";
}

if (!$insert2) {
    echo "Problems";
}else {
    echo "";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAPS Personal Details</title>
    <link href="footer.css" rel="stylesheet">
    <link href="Personal details.css" rel="stylesheet">
</head>

<main>
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

body.fixed-nav .site-wrap {
  transform: scale(1);
}

body.fixed-nav nav {
  position: fixed;
  /* box-shadow: 0 5px 0 rgba(0, 0, 0, 0.1); */
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
    <li class="logo"><a href="Personal details.php">Personal Details</a></li>
    <li><a href="Reportcrime.php">Home</a></li>
    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="Resource-centre.php">Resources</a></li>
  </ul>
</nav>
<body>
    <div id="form">
        <form class="PersonalDetails" action="detailsOfCrime.php" method="post" style="margin-top: 200px;">
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
                        <input type="number" id="id/passport" name="idNum" required>
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
                </div>
               
                
                <div class="section">
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
                    
            
                    <!-- password creation -->
                    <div class="group">
                        <input id="pass" type="password" name="pass" required>
                        <label>Password</label>
                        
                        
                    </div>
                        <!-- show password  -->
                        <input type="checkbox" onclick="show_password()">
    
                     <!-- Password confirmation  -->
                     <div class="group">
                        <input id="confirm_pass" type="password" name="confirm_pass" required onkeyup="validate_password()">
                        <label>Confirm Password</label>
    
                        
                    </div>
                    <p>
                        
                        
                    </p>
                    
    
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p> <br>
                    </div>
            
                    <span id="wrong_pass_alert"></span>
                    <button type="submit" name="submit">Submit</a>
                    </button>
                    
                </div>
            </div>
            
            
            <!-- <a href="#" class="pwd">Forgot password</a> -->
    
            </div>
            
             <!-- links
       https://www.w3schools.com/html/html_forms.asp
       https://www.w3schools.com/html/html_form_input_types.asp
       https://www.w3schools.com/css/default.asp
       https://www.youtube.com/watch?v=8yrTnjo0TWw
       https://www.youtube.com/watch?v=7EEwkQ2cIVE
       https://www.youtube.com/watch?v=pQN-pnXPaVg&t=5890s -->
        </form>
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




        // hide/show 
        function show_password(){
            let password = document.getElementById("pass");
            let confirmPass = document.getElementById("confirm_pass");

            if (password.type === "password" && confirmPass.type == "password") {
                password.type = "text";
                confirmPass.type = "text";
            } 
            else {
                password.type = "password";
                confirmPass.type = "password";
            }

        }


		function validate_password() {

			var pass = document.getElementById('pass').value;
			var confirm_pass = document.getElementById('confirm_pass').value;
			if (pass != confirm_pass) {
				document.getElementById('wrong_pass_alert').style.color = 'red';
				document.getElementById('wrong_pass_alert').innerHTML
				= '☒ Use same password';
				document.getElementById('submit').disabled = true;
				document.getElementById('submit').style.opacity = (0.4);
			} else {
				document.getElementById('wrong_pass_alert').style.color = 'green';
				document.getElementById('wrong_pass_alert').innerHTML =
					'🗹 Password Matched';
				document.getElementById('submit').disabled = false;
				document.getElementById('submit').style.opacity = (1);
			}
		}

		function wrong_pass_alert() {
			if (document.getElementById('pass').value != "" &&
				document.getElementById('confirm_pass').value != "") {
				alert("Your response is submitted");
			} else {
				alert("Please fill all the fields");
			}
		}



        // password verification
        var myInput = document.getElementById("pass");
        var myInput2 = document.getElementById("confirm_pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}
myInput2.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</main>

</div>
</body>
</html>