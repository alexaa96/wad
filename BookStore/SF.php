<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'header.php';
include 'nav.php';
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
                  <div id="banner_sf">
                      
                  </div>
              <ul>
                  <li><a href="Fantasy.php">Fantasy</a></li>
                    <li><a href="Romance.php">Romance</a></li>
                    <li><a href="Childhood.php">Childhood</a></li>
                    <li><a href="SF.php">Science Fiction</a></li>
                    <li><a href="Humor.php">Humor</a></li>
                    <li><a href="History.php">History</a></li>
                    <li><a href="Poetry.php">Poetry</a></li>
              </ul>
             </div>
       
         </div>
    </body>
</html>
<?php
include 'footer.php';
?>
