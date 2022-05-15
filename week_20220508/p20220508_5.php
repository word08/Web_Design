<h1>Iterables(可迭代物件)</h1>
<h2>使用可迭代的物件:</h2>
<h3>Iterable 可以用作參數類型來指示函數需要一組值，但不按值集的形式，因為它將與foreach一起使用。如果值不是Traversable的數組或實例， 則會拋出 TypeError 。</h3>
<?php
function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}//可迭代參數類型示例

?>