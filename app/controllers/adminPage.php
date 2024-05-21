<?php
// The 'admin pannel page'

// Change this to your twig directory
// Its instance is at '/views/'
global $twig;
$twig_dir='/home/'; // meaning /views/home/

// Don't change this!
require_once __DIR__.'/../Helpers/twig.php';
 

// Load the Twig template
$template = $twig->load('AdminPageView.twig');

 // Render the template with variables
 echo $template->render([
    
    'disclaimer' => "No need to wait",
    'theme' => "#0000FF",


]);







