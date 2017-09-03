<?php
require_once("model/connection_sql.php");

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controller/blog/index.php');
}