<? echo"<h1> hello   </h1>";?><br>
可以省去 php 和 echo,但xampp不允許使用這種程式碼,使用的話會出現錯誤,所以還是使用?php? or ?=?(因為沒法用<>包裹所以只好打語法)<br>

以下是可以打的兩個語法↓<br>
?php?<?php echo"<h1>hello</h1>";?>
 ?=?<?= "<h1>hello</h1>" ?>