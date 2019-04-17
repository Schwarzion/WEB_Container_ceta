<?php 
require 'tools.php';
$rfid = $_POST['nom'];
$harbor = $_POST['harbor'];
$loc = get_first_empty_loc();
$res = $loc->fetchColumn(0);
insert_container($res);
fill_pos($res);
?>

<html>
<head>
    <title>Register</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="register.css" />
</head>

<body>
    <header id="top"><p id="head">Registering a container</p></header>
    <br /><br /><br />
    <p>Data saved!</p>
 
    <footer><p id="foot">Site created with PHP, HTML and CSS</p></footer>
</body>
</html>