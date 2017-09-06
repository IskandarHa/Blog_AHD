<?php


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controller/blog/index.php');
}