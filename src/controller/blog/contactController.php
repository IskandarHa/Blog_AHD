<?php 

require_once (__DIR__ . '/../../../twig.php');



echo $twig->render('blog/contact_page.twig', array(
    'pageData' => array(
        'title'     => 'Contact',
        
    ),
    // ...
));