<?php
// Point to library
require_once '../../vendor/autoload.php';

// Set up Environment
$loader = new \Twig\Loader\FilesystemLoader('.');
$twig = new \Twig\Environment($loader);

// Array of data
$people[0]['FirstName'] = "Mercy";
$people[0]['Surname'] = "Ekuban";
$people[1]['FirstName'] = "Naomi";
$people[1]['Surname'] = "Patel";

// Load and render template
echo $twig->render('template.html', 
                   array('a_variable' => 'Mercy', 
                         'another_variable' => 'Ekuban',
                         'people' => $people));
?>
