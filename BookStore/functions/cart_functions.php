<?php
	/*
		loop through array of $_SESSION['cart'][book_isbn] => number
		get isbn => take from database => take book price
		price * number (quantity)
		return sum of price
	*/
	function total_price($cart){
		$price = 0.0;
		if(is_array($cart)){
		  	foreach($cart as $isbn => $qty){
		  		$bookprice = getbookprice($isbn);
		  		if($bookprice){
		  			$price += $bookprice * $qty;
		  		}
		  	}
		}
		return $price;
	}

	/*
		loop through array of $_SESSION['cart'][book_isbn] => number
		$_SESSION['cart'] is associative array which is [book_isbn] => number of books for each book_isbn
		calculate sum of books 
	*/
	function total_items($cart){
		$items = 0;
		if(is_array($cart)){
			foreach($cart as $isbn => $qty){
				$items += $qty;
			}
		}
		return $items;
	}
        
function insertIntoOrder($conn, $customerid, $total_price, $date, $ship_name, $ship_address, $ship_city, $ship_zip_code, $ship_country){
		$query = "INSERT INTO orders VALUES 
		('0', '" . $customerid . "', '" . $total_price . "', '" . $date . "', '" . $ship_name . "', '" . $ship_address . "', '" . $ship_city . "', '" . $ship_zip_code . "', '" . $ship_country . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Insert orders failed " . mysqli_error($conn);
			exit;
		}
	}
        ?>