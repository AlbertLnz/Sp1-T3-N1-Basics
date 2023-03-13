<?php

  $X = array(1,2,3,4,5);
  $Y = array(6,7,8);

  array_push($Y,9); //add 9
  print_r(count(array_merge($X,$Y))."\n"); //join 2 array's
  foreach(array_merge($X,$Y) as $value){ //print 2 array's
    print_r($value);
  }

?>