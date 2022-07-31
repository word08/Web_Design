<?php
$arr=1;
for($i=1;$i<10;$i++){
       for ($j=1; $j <10 ; $j++) { 
              $num=$i*$j;
              echo"{$i}x{$j}={$num}";
              echo"         ";
       if ($j%9==0) {
              echo"<br>";
       }
       }
}