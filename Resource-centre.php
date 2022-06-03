<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "saps_client";

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
    <title>RESOURCE CENTRE</title>
    <link rel="stylesheet" href="resource.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
   <header> <div class="black">
    <div class="cent">
        <h2>Resource Center</h2>
    </div></header>
    <br><br>
    <main>
    <div class="black">
    <ul>
        <li><a href="#">Acts</a></li>
        <li><a href="#">Agreements, Memorandums of Understanding and Declarations of Intent</a></li>
        
        <li><a href="#">Bills</a></li>
        <li>Policy Documents 
        <ul>
        <li><a href="#" target="_blank">Reservists Policy</a></li>
        </ul></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">National Safer City Summit</a></li>
        
        <li><a href="#">Publications</a></li>
        <li><a href="#"> Crime Statistics </a></li>
       
     
        <li><a href="#">Access to Information</a></li>
        <li><a href="#">Woman and Children</a></li>
        </ul>
    </div>
</main>

        
            <div class="size">
           
                <footer>
                    <div class="left">
        
                <li>
                <ul> <a href="Reportcrime.php">Home</a></ul>
                <ul> <a href="Resource-centre.php">Resource center</a></ul>
                <ul>  <a href="services.php">Services</a></ul>
                <ul><a href="child-safety.php">Child Safety</a></ul>
                <ul> <a href="talk.php">Talk to us</a></ul>
                <ul> <a href="be-alert.php">Be Alert</a></ul>
                   
                    
                   
                  
                   
                   
                   
                    </div>
                </li>
        
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