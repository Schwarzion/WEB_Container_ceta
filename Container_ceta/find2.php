<html>
    <head>
        <title>Find a container</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="find.css" />
    </head>
    <body>
        <header id="top"><p id="head">Find a container</p></header>
        <br /><br /><br />
        <?php
        require 'tools.php';
        $cont = find_container();
        foreach ($cont as $item):
        ?> 
        <h3><b>Found it!<br /></b></h3>
        <p><b>RFID : <?= $_POST['nom'] ?></b></p>
        <p><b>Harbor :  <?=$item['data_harbor'];?> </b></p>
        <p><b>Location :  <?=$item['data_loc']; ?> </b></p>
        <?php endforeach;
        $country = find_country_by_harbor($item['data_harbor']);
        foreach ($country as $item):
        ?>
        <p><b>Country : <?= $item['country'] ?></b></p>
        <?php endforeach; ?> 
        <footer><p id="foot">Site created with PHP, HTML and CSS</p></footer>
    </body>
</html>