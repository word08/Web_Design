<h1>類型語法(Type Juggling)</h1>
PHP 不需要（或支持）在變量聲明中顯式定義類型；變量的類型由使用變量的上下文決定。也就是說，如果給變量$var賦值一個字符串值，那麼$var就變成了一個 字符串。如果將一個int值分配給 $var，它就會變成一個int。
<?php
$foo = "1";  // 字串
$foo *= 2;   // 整數
$foo = $foo * 1.3;  // 浮點數
$foo = 5 * "10 Little Piggies"; // 數字字串
$foo = 5 * "10 Small Pigs";     // 數字字串
?>