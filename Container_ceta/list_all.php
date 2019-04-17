<html>
<head>
    <title>List_container</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="list_container.css" />
</head>


<body>
    <header id="top" ><p id="head">Listing container</p></header>
    <?php
    require 'tools.php';
    $list=list_all(); ?>
    <br /> <br /> <br />
    <p id="info1">Position&nbsp;&nbsp;|&nbsp;&nbsp;Capacity</p>
    <?php foreach($list as $item):?>
        <p id="info2"><?php echo str_repeat('&nbsp;', 6),$item['loc_id'],str_repeat('&nbsp;', 7),"|",str_repeat('&nbsp;', 4);
            if ($item['empty'] == 0)
                echo "Empty";
            if ($item['empty'] == 1)
                echo "Full";
?></p>
    <?php endforeach; ?>

    <footer><p id="foot">Site created with PHP, HTML and CSS</p></footer>
</body>
</html>