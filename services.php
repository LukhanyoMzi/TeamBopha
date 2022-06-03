<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "saps_client";

$conn = new mysqli($hostName, $userName, $password, $databaseName);
if (!$conn) {
echo "There were problems connecting";

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>SERVICES</title>
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="footer.c">
</head>
<body>
    
    <main>


   <p><b>The South African Police Service does not just investigate cases and do crime prevention, we also provide a range of services and resources to our many partners and to <br>the general public.</b>
    <br>
    <br>

    <h3>Call centres</h3>: There are three call centres that you may contact.</p>
    <div class="yep">
     <div class="ten"><img src="10111.png" alt=""></div>
     <div class="crime"><img src="crimestop_button.jpg" alt=""></div>
     <div class="complaints"><img src="complaints.jpg" alt=""></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="man">

    <div class="police"><img src="police.jpg" alt=""></div>

    <div class="first">
        <li>
            <ul>-<a href="https://businesstech.co.za/news/lifestyle/349001/south-african-police-service-and-vodacom-launch-new-crime-fighting-app/#:~:text=The%20app%2C%20called%20MySAPS%2C%20aims,with%20their%20local%20police%20stations.">South African Police services mobile app</a></ul>
            <ul>-<a href="https://www.saps.gov.za/services/service_complaints_centre.php">Services complaints</a></ul>
            <ul>-<a href="https://www.tears.co.za/">Reporting of sexual offences</a></ul>
            <ul>-<a href="https://www.saps.gov.za/services/doc_certification.php#:~:text=The%20certification%20of%20copies%20is,requesting%20to%20have%20copies%20certified.">certification of Documents</a></ul>
            <ul>-<a href="https://www.saps.gov.za/services/protection_order.php">applying for protection order</a></ul>
            <ul>-<a href="https://www.saps.gov.za/services/reservist.php#:~:text=Be%20at%20least%2025%2C%20but,of%20good%20and%20sound%20character">How to become a reservist</a></ul>
            <ul> -<a href="https://www.saps.gov.za/services/risk_cat.php">Event categorisation</a></ul>
            
        </li>
   </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
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