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
    <title>CHILD SAFETY</title>
    <link rel="stylesheet" href="child-safety.css">
    <!-- <link rel="stylesheet" href="footer.css"> -->
</head>
<body>
    <div class="panel-panel-default" >
       
        <div class="panel" >
            <h2>Child Safety</h2>
        </div>
        
            <br><br>
            <p align="center"><font color="#FF0000" size="3"><b>CALL 08 600 10111</b></font></p>
            <table width="98%" border="0" align="center" cellpadding="4">
              <tbody><tr>
                <td align="center"><table cellpadding="4" cellspacing="0">
                  <tbody><tr>
                    <td><img border="0" src="one.gif" width="56" height="50"></td>
                    <td><b>NEVER GET INTO A CAR WITH SOMEONE YOU DO NOT KNOW.</b></td>
                  </tr>
                  <tr>
                    <td><img border="0" src="two.gif" width="50" height="38"></td>
                    <td><b>DO NOT ACCEPT GIFTS FROM A PERSON 
                      YOU DO NOT KNOW.</b></td>
                  </tr>
                  <tr>
                    <td><img border="0" src="three.gif" width="56" height="50"></td>
                    <td><b>NEVER OPEN YOUR FRONT DOOR TO 
                      PEOPLE YOU DO NOT KNOW.</b></td>
                  </tr>
                  <tr>
                    <td><img border="0" src="four.gif" width="50" height="50"></td>
                    <td><b>TELL AN ADULT WHERE YOU ARE GOING 
                      AND WHEN YOU WILL RETURN.</b></td>
                  </tr>
                  <tr>
                    <td><img border="0" src="five.gif" width="56" height="50"></td>
                    <td><b>YOUR BODY IS PRIVATE YOU HAVE THE 
                      RIGHT TO SAY NO!</b></td>
                  </tr>
                </tbody></table></td>
              </tr>
            </tbody></table>
            
            
        </div>
    </div>
   


    <div class="size">
   
        <footer>
            <div class="left">

        <li>
          <ul> <a href="ReportCrime.php">Home</a></ul>
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