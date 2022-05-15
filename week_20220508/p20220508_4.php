<h1>陣列(Arrays )</h1>
<h3>PHP 中的數組實際上是一個有序映射。映射是將值與鍵相關聯的類型。這種類型針對幾種不同的用途進行了優化；它可以被視為陣列、列表（向量）、複雜表（圖的執行）、字典、集合、堆棧、順序等等。由於陣列可以是其他陣列，因此多維陣列也是可能的。</h3>
<h2>Syntax (語法)</h2>
可以使用 array ( ) 語言結構創建數組。它接受任何數量的逗號分隔 對作為參數。 key => value
<h2>範例:</h2>
array(
<br>
    key  => value,
<br>
    key2 => value2,
<br>
    key3 => value3,
<br>
    ...
<br>
)

<?php   //常用的陣列
    $array = array(
        "foo" => "bar",
        "bar" => "foo",
);

// Using the short array syntax
    $array = [
        "foo" => "bar",
         "bar" => "foo",
];
?>