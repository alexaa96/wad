<?php

require ("Entities/BookEntity.php");

//Contains database related code for the Book page.
class BookModel {

    //Get all book authors from the database and return them in an array.
    function GetBookTypes() {
        require 'Credentials.php';

        //Open connection and Select database.   
        $con = mysqli_connect($host, $user, $passwd) or die(mysqli_error($con));
        $sql = mysqli_select_db($con,$database);
        $result = mysqli_query($con,"SELECT DISTINCT title FROM books") or die(mysqli_error($con));         
        $titles = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            array_push($titles, $row[0]);
        }

        //Close connection and return result.
        mysql_close($con);
        return $titles;
    }

    //Get bookEntity objects from the database and return them in an array.
    function GetBookByType($author) {
        require 'Credentials.php';

        //Open connection and Select database.
               $con = mysqli_connect($host, $user, $passwd) or die(mysqli_error);
               $sql = mysqli_select_db($con,$database);
               $query = "SELECT * FROM books WHERE title LIKE '$title'";
               $result = mysqli_query($con,$query) or die(mysqli_error($con));
               $bookArray = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $title = $row[1];
            $author = $row[2];
            $price = $row[3];
            $category = $row[4];
            $year = $row[5];
            $image = $row[6];
            $description = $row[7];

            //Create book objects and store them in an array.
            $book = new BookEntity(-1, $title, $author, $price, $category, $year, $image, $description);
            array_push($bookArray, $book);
        }
        //Close connection and return result
        mysql_close();
        return $bookArray;
    }

}

?>
