<?php
//Connection to bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=blog_ahd;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}