
<html>
<head>
    <title>List_container</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="list_container.css" />
</head>


<body>
    <header id="top">
        <p id="head">Listing container</p>
    </header>
    <?php
    require 'tools.php';
    $list=list_full(); ?>
    <br />
    <br />
    <br />
    <p id="info1">Occupied Places :</p>
    <?php foreach($list as $item):?>
    <p id="info2">
        <?php echo str_repeat('&nbsp;', 4),$item['loc_id'],str_repeat('&nbsp;', 3);?>
    </p>
    <?php endforeach; ?>
    <footer>
        <p id="foot">Site created with PHP, HTML and CSS</p>
    </footer>
</body>
</html>