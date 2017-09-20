<?php


require ('../../manager/manager_ticket.php');

$tickets = getTickets();
ob_start();
require('../../view/blog/homepage.twig');
ob_get_clean();
