<?php
require_once './functions/database_functions.php';
require_once 'books.php';
$name=$_POST['name'];
$comment=$_POST['comment'];
$empty='notempty';
$conn= db_connect();
 
if($name&&$comment)
{
    $query3="INSERT INTO comment (name,comment,bookid) VALUES ('$name','$comment', '$book_isbn')";
$insert=mysqli_query($conn, $query);
}
else
{
$empty='empty';
}
header('location: books.php?bookisbn=1');

?>