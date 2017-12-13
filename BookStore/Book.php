<?php
include 'head.php';
include 'nav.php';
?>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="categories">
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

    </body>
</html>
