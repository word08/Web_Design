<h1>STRINGS</h1>
<h4>字串是一系列字串，其中文字與一個字節相同。 PHP 僅支持 256 個字符集，因此不提供原來 Unicode 支持。</h4>
<h3>注意： 在 32 位構建中，字符串最大可達 2GB(最大 2147483647 字節）</h3>
指定字符串的最簡單方法是將其括在單引號（字符'）中。

要指定文字單引號，請使用反斜杠 ( \) 對其進行轉義。
<br>
要指定文字反斜杠，請將其加倍 ( \\)。所有其他反斜杠實例將被視為文字反斜杠：這意味著您可能習慣的其他轉義序列，例如\ror \n，將按指定的字面輸出而不是具有任何特殊含義。
<h3>注意： 與雙引號 和heredoc語法 不同，特殊字符的變量和轉義序列在出現在單引號字符串s 中時不會被擴展。</h3>
<br>
<?php
    echo 'this is a simple string';//單引號
    echo"<br>";

// Outputs: Arnold once said: "I'll be back"
    echo 'Arnold once said: "I\'ll be back"';//雙引號加單引號和斜線
    echo"<br>";
// Outputs: You deleted C:\*.*?
    echo 'You deleted C:\\*.*?';//單引號加兩條斜線
    echo"<br>";
?>