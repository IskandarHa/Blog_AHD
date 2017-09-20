<?php


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controller/blog/index.php');
}
if($_GET['section'] == 'home')
{
    include_once ('controller/blog/home.php');
}