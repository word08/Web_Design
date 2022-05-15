<h1>Numeric strings(數字字串)</h1>
如果 PHP字串可以解釋為int或float ，則它被視為數字。
<br>
數字常使用的字串
<br>
當需要將字串評估為數字時（例如算術運算、int類型聲明等），將採取以下步驟來確定結果：
<br>

1.如果字串是數字，則解析為int如果字串是數字字串並且符合int類型的限制，否則解析為 float。
<br>
2.如果允許前導數字字串並且字符串 為 1，如果字串的前導部分是整數字串並且符合int類型限制，則解釋為int，否則解釋為 float . 此外，還會引發錯誤。
<br>
3.字串不是數字時，會顯示錯誤。
<br>
<?php
    $foo = 1 + "10.5";                // $foo is float (11.5)
    $foo = 1 + "-1.3e3";              // $foo is float (-1299)        
    $foo = 1 + "10 Small Pigs";       // $foo is integer (11) 
    $foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2) 
    $foo = "10.0 pigs " + 1;          // $foo is float (11) 
    $foo = "10.0 pigs " + 1.0;        // $foo is float (11)
?>