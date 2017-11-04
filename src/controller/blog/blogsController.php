<?php

require (__DIR__.'/../../manager/manager_ticket.php');
require (__DIR__ . '/../../../twig.php');

$tickets = getTickets();

echo $twig->render('blog/blogs_page.twig', array(
    'pageData' => array(
        'title'     => 'Blog',
        'tickets'    => $tickets
    ),
    // ...
));