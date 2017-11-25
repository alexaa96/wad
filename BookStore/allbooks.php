<?php
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
    $book_cat = $_GET['cat'];
  $conn = db_connect();
  $query = "SELECT * FROM books WHERE Category = '$book_cat'";
 // $query = "SELECT book_isbn, book_image FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of Books";
  require_once "header.php";
?>
