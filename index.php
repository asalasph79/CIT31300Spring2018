<?php
   include("_includes/config.php");
   include(ABSOLUTE_PATH . "/_includes/header.inc.php");
 ?>
 



<?php

$preferences=array("<h1>Angel I Salas-Phillips</h1>"," Favorite Color = Black","Favorite Movie = Star Wars","Favorite Book = World War Z", "Favorite Website = Facebook");
$arrlength=count($preferences);

for($x=0;$x<$arrlength;$x++)
  {
  echo $preferences[$x];
    echo "<ul></ul>";
  }


?>














 <?php
   include(ABSOLUTEPATH ."/_includes/footer.inc.php");
 ?>
