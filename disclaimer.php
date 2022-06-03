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
    <title>DISCLAIMER</title>
    <link rel="stylesheet" href="disclaimer.css">
</head>
<body>
    <header>
        <div class="cent"><h2>Disclaimer</h2></div>
    </header>
    <main>
        <p>
            Disclaimer to the official Web site of the SAPS <br>This Web site is the only official Web site of the South African Police Service (which is the only police service of the Republic of South Africa in terms of section 199(1) of the Constitution of the Republic of South Africa, 1996 (Act No. 108 of 1996))<br><br>.The South African Police Service accepts no liability with respect to any other Web site which professes to be the official or unofficial Web site of the South African Police Service.<br> The South African Police Service's Web site is provided for use "as is" and "as available", and is subject to your acceptance of the following terms and conditions.<br> The sole purpose of this Web site is to provide information to anyone who enters the South African Police Service Web site. The South African Police Service, its employees and all<br> other persons connected with this Web site, disclaim all warranties, express or implied, with respect to this Web site and any Web site with which it is linked.<br><br>The South African Police Service, its employees and all other persons connected with this Web site, are not responsible for any direct, indirect, special consequential<br> damages or any consequences resulting from the use of this Web site and any Web site with which it is linked, or any interruption, error or inaccuracy in the service provided.<br> The South African Police Service, its employees and all other persons connected with this Web site, also make no representations or warranties as to whether the information <br>accessible via the Web site with which it is linked, is accurate, complete or current.
        </p>
    </main>
</body>
</html>