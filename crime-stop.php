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
    <link rel="stylesheet" href="crime-stop.css">
    <link rel="stylesheet" href="footer.c>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="me"> <a href="">Home</a></div>
        <div class="cent"><h2>CRIME</h2></div>
    </header>
    <main>
        <div class="tip">
       <h3> Report information of destructive gangs to Crime Stop 08600 10111 or SMS the Crime Line at 32211.</h3>
       <h4>- Anonymous tip</h4>
        </div><br><br>

        <img src="inye.jpg" alt="" class="center"><br><br>

        <p class="mo">South Africa's trusted tip-off service since 1992.<br>
            In two decades the anonymity of not even one informer has been compromised.<br>
            We all have a responsibility to make South Africa safer<br>
            for our children and every law-abiding citizen.<br>
            If you have information that can assist in exposing people<br>
            involved in illegal activities, please contact us anonymously when you know:</p>
            <br>
        <p class="ma">WHO DID WHAT TO WHOM, WHEN, WHERE, WHY AND HOW?</p><br><br>

        <div class="images"><img src="traf.jpg" alt="" class="eyokuqala">
        <img src="gbv.jpg" alt="" class="eyesibini">
    </div>
    </main>
    
</body>
</html>