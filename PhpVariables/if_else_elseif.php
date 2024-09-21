<?php
 $per =110;

 if($per >= 80 && $per <=100){
    echo "Your are merit.";
 } elseif($per >= 60 && $per <=80){
    echo "Your are first division.";
 } elseif($per >= 45 && $per <=60){
    echo "Your are second division.";
 }  elseif($per >= 33 && $per <=45){
    echo "Your are third division.";
 } elseif($per < 33){
    echo "Your are fail.";
 } else{
    echo"please enter valid percentage.";
 }




?>