<?php

namespace Solution;

use Shop\Cart;
use Shop\Item;

function addToCart(Cart $cart, Item $item)
{
  // BEGIN (write your solution here)
  $cart->items[]=$item;  
  // END
}

function getCount(Cart $cart)
{
  // BEGIN (write your solution here)
  return count($cart->items);
  // END
}

function getTotal(Cart $cart)
{
  // BEGIN (write your solution here)
  return array_reduce($cart->items, function ($sum, $item) {
    return $sum + $item->price;
  }, 0);
  // END
}

