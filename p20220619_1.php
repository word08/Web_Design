常量是簡單值的標識符（名稱）。顧名思義，該值在腳本執行期間不能更改（ 魔術常數除外，它們實際上不是常量）。常數區分大小寫。按照慣例，常數標識符總是大寫的。
<h1>define定義常數</h1> 
<a href=https://www.php.net/manual/en/language.constants.magic.php>魔術常數</a>
我不知道Predefined constants怎麼解釋

<?php
    define("2FOO",    "something");//有效名子
    define("__FOO__", "something"); //無效名子
?> 