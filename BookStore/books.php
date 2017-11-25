
<?php
include 'header.php';
include 'nav.php';
 $book_isbn = $_GET['bookisbn'];
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  //$book_isbn = $_GET['book_isbn'];              
  $query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty book";
    exit;
  }

  $title = $row['book_title'];
  //require "./template/header.php";
?>
      <!-- Example row of columns -->
   
      <div id="categories">
                   
      <div class="row">
            <ul>
               <li><a href="Fantasy.php">Fantasy</a></li>
                    <li><a href="Romance.php">Romance</a></li>
                    <li><a href="Childhood.php">Childhood</a></li>
                    <li><a href="SF.php">Science Fiction</a></li>
                    <li><a href="Humor.php">Humor</a></li>
                    <li><a href="History.php">History</a></li>
                    <li><a href="Poetry.php">Poetry</a></li>
            </ul>
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="./Images/<?php echo $row['book_image']; ?>">
        </div>
        <div class="col-md-6">
          <h4>Book Description</h4>
          <p><?php echo $row['book_descr']; ?></p>
          <h4>Book Details</h4>
          <table class="table">
          	<?php foreach($row as $key => $value){
              if($key == "book_descr" || $key == "book_image" || $key == "publisherid" || $key == "book_title"){
                continue;
              }
              switch($key){
                case "book_isbn":
                  $key = "ISBN";
                  break;
                case "book_title":
                  $key = "Title";
                  break;
                case "book_author":
                  $key = "Author";
                  break;
                case "book_price":
                  $key = "Price";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
       	</div>
          
      </div>
              </div>
