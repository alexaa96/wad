<?php
include 'head.php';
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
  if((isset($_SESSION['username']) && !empty($_SESSION['username'])))
      $goto = 'action=cart.php?empty=';
  else
      $goto = 'action=index.php';
  require_once './functions/database_functions.php';
 
  
  //require "./template/header.php";
?>
      <!-- Example row of columns -->
   
      <div id="categories">
                   
      <div class="row">
            <ul>
                    <li><a href="Fantasy.php?cat=Fantasy">Fantasy</a></li>
                    <li><a href="Romance.php?cat=Romance">Romance</a></li>
                    <li><a href="Childhood.php?cat=Childhood">Childhood</a></li>
                    <li><a href="SF.php?cat=SF">Science Fiction</a></li>
                    <li><a href="Humor.php?cat=Humor">Humor</a></li>
                    <li><a href="History.php?cat=History">History</a></li>
                    <li><a href="Poetry.php?cat=Poetry">Poetry</a></li>
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
                <?php } ?>
            
            <form method="post" <?php echo $goto;?>>
            <input type="hidden" name="bookisbn" value="<?php echo $book_isbn;?>">
            <input type="submit" value="Purchase / Add to cart" name="cart" class="btn btn-primary">
          </form>
           
            <form action="books.php?bookisbn=<?php echo $_GET['bookisbn'];?>" method="POST">
                
                <table style="margin-left: 50px;">
                    <?php if($empty='empty') 
                    echo "Please fill all forms";
                       ?>
                <tr><td>Name: <br><input type="text" name="name"/></td></tr>
                <tr><td colspan="2">Comment: </td></tr>
                <tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
                <tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
                </table>
            </form>
             
            