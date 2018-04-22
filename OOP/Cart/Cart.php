<?php
/*
Корзина используется в интернет магазинах для помещения в них товаров, которые посетитель собирается приобрести.
Cart.php

Реализуйте класс корзины Cart, объявив в нем публичное поле items, в котором должен храниться список товаров. Инициализируйте поле пустым массивом.
Solution.php

Реализуйте следующие функции:

    addToCart, которая добавляет в корзину товар, переданный в качестве второго аргумента
    getCount, которая возвращает количество товаров, помещенных в корзину
    getTotal, которая возвращает суммарную стоимость товаров, помещенных в корзину

Пример:

use Shop\Cart;
use function Solution\addToCart;
use function Solution\getCount;
use function Solution\getTotal;

$cart = new Cart();

addToCart($cart, new Item("milk", 5))
addToCart($cart, new Item("water", 2));

getCount($cart); // 2
getTotal($cart); // 7

addToCart($cart, new Item("juice", 10));

getCount($cart); // 3
getTotal($cart); // 17

*/

namespace Shop;

// BEGIN (write your solution here)
class Cart
{
    public $items=[];
}
// END
