<h1>Objects(物件)</h1>
<h2>物件初始化</h2>
要創建一個新物件，請使用以下new語句實例化一個類：(要看php)<a href="https://www.php.net/manual/en/language.types.object.php">物件</a>
<br>
<?php//常用的物件語法
    class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

    $bar = new foo;
    $bar->do_foo();
?>