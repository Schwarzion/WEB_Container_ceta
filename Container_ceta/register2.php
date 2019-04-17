<html>
<head>
    <title>Register</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="register.css" />
</head>

<body>
    <header id="top"><p id="head">Registering a container</p></header>
    <br /><br /><br />
    <form method="post" action="register3.php">
        <p><b>Please fill the blank with the container RFID</b></p>
        <input type="text" name="nom" />
        <p><b>Harbor of origin</b></p>
        <select name="harbor">            
            <?php
            require 'tools.php';
            $harb=getharbor();
            foreach($harb as $item): ?>
                <option class="reg"><?= $item['harbor'] ?></option>
            <?php endforeach; ?>
        </select>
        <br /><br />
        <input type="submit" name="submit" value="send" />
    </form>
    <footer><p id="foot">Site created with PHP, HTML and CSS</p></footer>
</body>
</html>