<?php

function getDatabase()
{
    $bdd = new PDO('mysql:host=localhost;dbname=ceta_container;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getcountry()
{
    $bdd = getDatabase();
    $result= $bdd->query('SELECT country,country_id  FROM country ORDER BY country');
    return $result;
}

function getharbor()
{
    $test = $_POST['id'];
    $bdd = getDatabase();
    $result = $bdd->query('SELECT harbor FROM harbor WHERE harbor_country_id="'.$test.'"');
    return $result;
}

function insert_container($loc)
{
    $rfid = $_POST['nom'];
    $harbor = $_POST['harbor'];
    $bdd = getDatabase();
    $result = $bdd->query('INSERT INTO data_container(rfid, data_loc, data_harbor) VALUES("'.$rfid.'","'.$loc.'","'.$harbor.'")');
    return $result;
}

function list_all()
{
	$bdd=getDatabase();
    $result = $bdd->query('Select loc_id,x,y,z,empty FROM loc');
    return $result;
}

function list_full()
{
    $bdd=getDatabase();
    $result = $bdd->query('Select loc_id,x,y,z,empty FROM loc WHERE empty=1');
    return $result;
}

function list_empty()
{
    $bdd=getDatabase();
    $result = $bdd->query('Select loc_id,x,y,z,empty FROM loc WHERE empty=0');
    return $result;
}

function get_first_empty_loc()
{
    $bdd=getDatabase();
    $result = $bdd->query('Select loc_id FROM loc WHERE empty=0');
    return $result;
}

function fill_pos($res)
{
    $bdd=getDatabase();
    $nb = 1;
    $empty = (int)$res;
    $bdd->query('UPDATE loc SET empty='.$nb.' WHERE loc_id = '.$empty.'');
}

function find_container()
{
	$bdd=getDatabase();
    $id = $_POST['nom'];
    $result = $bdd->query('SELECT data_harbor,data_loc FROM data_container WHERE rfid="'.$id.'"');
    return $result;
}

function find_country_by_harbor($harbor)
{
    $bdd=getDatabase();
    $id = $bdd->query('SELECT harbor_country_id FROM harbor WHERE harbor="'.$harbor.'"');
    $result = $bdd->query('SELECT country FROM country WHERE country_id=int('.$id.')');
    return $result;
}