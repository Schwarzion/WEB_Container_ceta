<html>
<head>
    <title>Register</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="register.css" />
</head>


<body>
    <header id="top"><p id="head">Registering a container</p></header>
    <br /><br /><br />
    <form method="post" action="register2.php">
        <p><b>Select the country of origin</b></p>
        <select name="id">            <?php
            require 'tools.php';
            $count=getcountry();
            foreach($count as $item): ?>
            <option value="<?= $item['country_id']; ?>"><?= $item['country'] ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="submit" value="send" />
    </form>
    

    <footer><p id="foot">Site created with PHP, HTML and CSS</p></footer>
</body>
</html>