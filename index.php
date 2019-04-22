<?php

// Set default value
$current_page = 'homepage';

// Change value if `page` is specified
if(array_key_exists('page',$_GET)) {
    $current_page = $_GET['page'];
}

// Check page
switch ($current_page) {
    case 'about':
        include 'contents/about.php';
        break;
    case 'contacts':
        include 'contents/contacts.php';
        break;
    case 'homepage':
    default:
        include 'contents/homepage.php';
}


?>