<?php
include 'head.php';
include 'banner.php';
include 'nav.php';
include 'allbooksindex.php';
?>

<html>
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <form action="search.php" method="GET">
        <input type="text2" name="name" />
        <input type="submit" value="Search" />
        </form>
    </head>
    <body>
            <div id="content_area">
              <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
                        <div class="row1">
                            <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
                                <div class="col-md-31">
                                    <a href="books.php?bookisbn=<?php echo $query_row['book_isbn']; ?> ">
                                        <img class="img_childhood" src="./Images/<?php echo $query_row['book_image']; ?>" height="250">
                                    </a>
                                </div>
                            <?php
                                $count++;
                                if($count >= 6){
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
    </body>
</html>


    

<?php
include 'footer.php';
?>


