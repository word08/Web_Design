例舉是類和類常量之上的一個限制層，旨在提供一種為類型定義一組可能值的方法。
case是舉例前一定要打的
<?php
enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $s)
{
    // ...
}

do_stuff(Suit::Spades);
?>