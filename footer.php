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
    <title>Document</title>
    <link rel="stylesheet" href="footer.css">

</head>
<body>
    <div class="size">
   
        <footer>
            <div class="left">

        <li>
            <ul> <a href="#">Home</a></ul>
            <ul><a href="#">About us</a></ul>
            <ul> <a href="Resource-centre.html">Resource center</a></ul>
            <ul>  <a href="services.html">Services</a></ul>
            
            <ul><a href="child-safety.html">Child Safety</a></ul>
            <ul> <a href="talk.html">Talk to us</a></ul>
            <ul> <a href="be-alert.html">Be Alert</a></ul>
            
           
            
           
          
           
           
           
            </div>
        </li>

            <div class="center">
                <br>
            <p>
                <a href="copyright.html">Copyright</a><br>
            <a href="disclaimer.html">Disclaimer</a><br>
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


    
</html>