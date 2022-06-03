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
    <title>COPYRIGHT</title>
    <link rel="stylesheet" href="copyright.css">
</head>
<body>
    <header>
        <div class="cent"><h2>Copyright</h2></div>
    </header>
    <main>
        <p>
            All material on this site is subject to copyright.<br><br>Links<br> It is not necessary to request permission to link to any pages on this site.<br><br>Privacy<br> Information provided to the South African Police Service by users through this site will be treated in confidence.<br><br>The South African Police Badge<br> The badge of the South African Police Service (SAPS) was registered on 31 October 1995 at the Bureau of Heraldry in terms of Section 5 (a) of the Heraldry Act. (Act No.18 of 1962).<br> The purpose of the registration is to protect the badge against unauthorised use. Sections 21 and 22 of the same Act allow the SAPS to formulate control measures in<br> the usage of its official badge. Written permission must be obtained from the National Commissioner of the SAPS to use the badge (or any badge similar in appearance)<br> internally and/or externally on the basis thereof that the status and dignity of this badge, is to be guided by the principle that the status and dignity of this badge, which <br>symbolizes the corporate character and identity of the SAPS, must at all times be safeguarded and protected with pride.
        </p>
    </main>
    
</body>
</html>