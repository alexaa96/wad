<?php
//include "./functions/database_functions.php";
$err=false;
$errmsg="";
//rating has been submitted
if(isset($_POST['submit'])){
//clean them first
//The check below will fail if the user does not select a rating before submitting the form
if(empty($_POST['radiobutton'])){
$err=true;
$errmsg="Please select a rating before submitting the data";
}
//The check below will fail if the application does not pick up a bookid
if(!is_numeric($_POST['id'])){
$err=true;
$errmsg="An internal error has occurred. Our apologies for the inconvenience";
}
//if no errors then insert the rating into the ratings table
if(!$err){
insert_rating($_POST['id'],$_POST['radiobutton']);
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ratings::main</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="1" class="brdr">
  <tr>
    <td height="34" colspan="3" valign="top" class="hdr">Please rate this book </td>
  </tr>
  <?php 
  if(isset($errmsg)){
  echo '<tr>
    <td height="38" colspan="2" valign="top"> <b>'.$errmsg.'</b></td>
  </tr>';
  } ?>
  <tr>
    <td width="19%" valign="top"><table width="100%" border="0">
      <tr>
        <td><a href="ranking.php">View Ratings</a></td>
      </tr>
      <tr>
        <td> </td>
      </tr>
        </table></td>
    <td width="100%" valign="top"><?php showbox($book_isbn);?>	</td>
  </tr>
    </table>
</body>
</html> 
