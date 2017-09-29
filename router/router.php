<?php
$route = require_once( __DIR__ . '\..\config\rout.php');

switch ($route)
{
    case $route['home']['path'] == $_SERVER["REQUEST_URI"]:
        return $route['home']['controller'];
        break;
    case $route['blogs']['path'] == $_SERVER["REQUEST_URI"]:
        return $route['blogs']['controller'];
        break;
    case $route['contact']['path'] == $_SERVER["REQUEST_URI"]:
    	return $route['contact']['controller'];
    	break;
}