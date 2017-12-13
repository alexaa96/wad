<?php

function rankings(){
$sql="SELECT AVG(ratings.rating_val) as ave,books.title FROM ratings,books WHERE ratings.book_id = books.bookID ORDER BY ave LIMIT 3";
$res=mysql_query($sql);
if($res){
echo '<table width="100%" border="1">
  <tr>
    <td>Book</td>
    <td>Rank</td>
  </tr>';
  while($row=mysql_fetch_array($res)){
  echo '<tr>
   <td>'.$row['title'].'</td>
    <td>'.$row['ave'].'</td>
  </tr>';
  }
echo '</table>';
}
}
?>