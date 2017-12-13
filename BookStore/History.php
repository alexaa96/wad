<?php
include 'head.php';
include 'nav.php';
include 'allbooks.php';
?>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
         <div class="container">
           
             <div id="categories">
                  <div id="banner_history">
                  
                        <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
                        <div class="row">
                            <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
                                <div class="col-md-3">
                                    <a href="books.php?bookisbn=<?php echo $query_row['book_isbn']; ?> ">
                                        <img class="img_childhood" src="./Images/<?php echo $query_row['book_image']; ?>" height="250">
                                    </a>
                                </div>
                            <?php
                                $count++;
                                if($count >= 4){
                                $count = 0;
                                break;
                                }
                            } ?> 
                        </div>
                        <?php
                        }
                            if(isset($conn)) { mysqli_close($conn); }
                        ?>
                    </div>
                    <ul>
                        <li><a href="Fantasy.php?cat=Fantasy">Fantasy</a></li>
                        <li><a href="Romance.php?cat=Romance">Romance</a></li>
                        <li><a href="Childhood.php?cat=Childhood">Childhood</a></li>
                        <li><a href="SF.php?cat=SF">Science Fiction</a></li>
                        <li><a href="Humor.php?cat=Humor">Humor</a></li>
                        <li><a href="History.php?cat=History">History</a></li>
                        <li><a href="Poetry.php?cat=Poetry">Poetry</a></li>
                    </ul>
                </div>  
            </div>  
        <?php
             require_once "footer.php"
        ?>
    </body>
</html>