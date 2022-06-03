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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>TALK TO US</title>
    <link rel="stylesheet" href="talk.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <header>
        <div class="cent"><h2>Talk to us</h2></div>
    </header>
    
    <main>
        <div class="yhea">     
            <br>  
            <p>The South African Police Service is committed to create a safe and secure environment for all the people in South Africa. Your feedback is welcome and important to us. You can contribute towards the enhancement and development of the South African Police Service.</p>     
            <p><b>This TALK TO US page is not for emergencies and you cannot report a crime on the SAPS website.</b></p>     
            <p>The following contact numbers can be used for the purposes of emergencies, to report a crime or to register a complaint:</p>
            <ul>
                <li>For emergencies or to report a crime, call 10111 or contact your nearest <b><a href="/contacts/index.php">Police Station.</a></b></li>
                <li>If you know of any criminal activities or want to report a crime anonymously, you can contact <b><a href="/crimestop/crimestop.php">Crime Stop</a></b> – 08600 10111.</li>
                <li>You can contact the SAPS Service Complaints Centre to register a complaint on SAPS service delivery, call 0800 333 177 or fax to 012 393 5452 or email: <b><a href="mailto:ComplaintsNodalPoint@saps.gov.za?subject=Website:  Report poor service delivery">Service Complaints</a></b></li>
                
                
                <li>You can also view our <b><a href="../faq.php"><strong>Frequently Asked Questions</strong></a></b> to answer some of the queries that       you might have.</li>
            
           <li> For any general enquiries, suggestions and/or compliments, feel free to contact us at <a href="mailto:marketing@saps.gov.za?subject=Talk to us">SAPS Corporate Communications</a></li> </ul>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </main>
    <div class="size">
   
        <footer>
            <div class="left">

        <li>
        <a href="Reportcrime.php">Home</a></ul>
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