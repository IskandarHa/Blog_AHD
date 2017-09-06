<?php
//Connection to bdd
function getPDO()
{
    try
    {
        return new PDO('mysql:host=localhost;dbname=blog_ahd;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
}

