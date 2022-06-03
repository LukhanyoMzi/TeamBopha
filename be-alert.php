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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAY ALERT</title>
    <link rel="stylesheet" href="be-alert.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <header>
        <div class="cent"><h2>Be Alert</h2></div>
    </header>

    <main>
        <div class="first">
            <li>
                <ul><a href="#">Be on the lookout for Phishing, Vishing and SMishing scams</a></ul>
                <ul><a href="#">Basic security precautions when you live in a remote area</a></ul>
                <ul><a href="#">Beware of phishing scams</a></ul>
                <ul><a href="#">Community participation in the fight against crime can save lives</a></ul>
                <ul><a href="#">Trafficking in persons is a crime</a></ul>
                <ul><a href="#">Cybercrime prevention tips</a></ul>
                <ul><a href="#">General personal safety awareness</a></ul>
                <ul><a href="#">Zero tolerance against drinking and driving</a></ul>
            </li>
        </div>

        <div class="second">
            <img src="donotx.png" alt="">
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