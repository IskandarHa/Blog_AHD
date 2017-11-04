<?php

require (__DIR__ . '/../../../twig.php');



echo $twig->render('blog/home_page.twig', array(
    'pageData' => array(
        'title'     => 'Accueil',
    ),
    // ...
));

