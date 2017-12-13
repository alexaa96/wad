<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
	function db_connect(){
		$conn = mysqli_connect("localhost", "root", "ponton1mai", "book");
		if(!$conn){
			echo "Can't connect database " . mysqli_connect_error($conn);
			exit;
		}
		return $conn;
	}

     function getBookByIsbn($conn, $isbn){
		$query = "SELECT book_title, book_author, book_price FROM books WHERE book_isbn = '$isbn'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}
        
	function getbookprice($isbn){
		$conn = db_connect();
		$query = "SELECT book_price FROM books WHERE book_isbn = '$isbn'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "get book price failed! " . mysqli_error($conn);
			exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row['book_price'];
	}
function getPubName($conn, $pubid){
		$query = "SELECT publisher_name FROM publisher WHERE publisherid = '$pubid'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		if(mysqli_num_rows($result) == 0){
			echo "Empty books ! Something wrong! check again";
			exit;
		}

		$row = mysqli_fetch_assoc($result);
		return $row['publisher_name'];
	}
        function getAll($conn){
		$query = "SELECT * from books ORDER BY book_isbn DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}
        function showbox($aID){
echo '<form id="form1" name="form1" method="post" action="' .$_SERVER['PHP_SELF']. '">
<table width="90%" border="0">
  <tr>
    <td bgcolor="#CCCCCC">Please select a rating </td>
  </tr>
  <tr>
    <td><label>
      <input name="radiobutton" type="radio" value="5" />
      5 - Excellent</label></td>
  </tr>
  <tr>
    <td><label>
      <input name="radiobutton" type="radio" value="4" />
      4 - 
      Very Good</label></td>
  </tr>
  <tr>
    <td>
      <input name="radiobutton" type="radio" value="3" />
      3 - Good</td>
  </tr>
  <tr>
    <td><label>
      <input name="radiobutton" type="radio" value="2" />
      2 - Between Good and Bad</label></td>
  </tr>
  <tr>
    <td><label>
      <input name="radiobutton" type="radio" value="1" />
      1 - Bad</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="submit" name="submit" value="submit" />
      <input type="hidden" name="id" value="'.$aID.'" />
    </label></td>
  </tr>
</table>
</form>';
}
function insert_rating($bookid,$rating){
$currdate = date('Y-m-d');
$sql="INSERT INTO rating(book_id,rating_val,rating_date)values($bookid,$rating,NOW())";
mysql_query($sql);
}
function insert_book_details($title,$description){
$sql="INSERT INTO books(title,description)values($title,$description)";
mysql_query($sql);
}

	function setCustomerId($name, $address, $city, $zip_code, $country){
		$conn = db_connect();
		$query = "INSERT INTO customers VALUES 
			('0', '" . $name . "', '" . $address . "', '" . $city . "', '" . $zip_code . "', '" . $country . "')";

		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "insert false !" . mysqli_error($conn);
			exit;
		}
		$customerid = mysqli_insert_id($conn);
		return $customerid;
	}
         function getCustomerId($name, $address, $city, $zip_code, $country){
		$conn = db_connect();
		$query = "SELECT customerid from customers WHERE 
		name = '$name' AND 
		address= '$address' AND 
		city = '$city' AND 
		zip_code = '$zip_code' AND 
		country = '$country'";
		$result = mysqli_query($conn, $query);
		// if there is customer in db, take it out
		if($result){
			$row = mysqli_fetch_assoc($result);
			return $row['customerid'];
		} else {
			return null;
		}
	}
        function getOrderId($conn, $customerid){
		$query = "SELECT orderid FROM orders WHERE customerid = '$customerid'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "retrieve data failed!" . mysqli_error($conn);
			exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row['orderid'];
	}

	
?>
