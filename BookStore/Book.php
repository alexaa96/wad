<?php

require 'Controller/BookController.php';
$bookController = new bookController();

if(isset($_POST['types']))
{
    //Fill page with books of the selected type
    $bookTables = $bookController->CreateBookTables($_POST['types']);
}
else 
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $bookTables = $bookController->CreateBookTables('%');
}

//Output page data
$title = 'Book overview';
$content = $bookController->CreateBookDropdownList(). $bookTables;

include 'Template.php';
?>
