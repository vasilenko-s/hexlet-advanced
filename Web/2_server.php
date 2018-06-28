<?php
/*
Реализуйте маршрут /about, по которому будет отдаваться строка <h1>about company</h1>. Выполните сопоставление с REQUEST_URI используя регулярные выражения, так чтобы один маршрут обрабатывал и концевой слеш (/about/ тоже самое что /about), и различный регистр (/abOuT, /ABout, /about).
Подсказка

    Для регулярных выражений используйте preg_match.

*/

// BEGIN
function server($url)
{
    if (preg_match('/^\/about\/?$/i', $url)) {
        return "<h1>about company</h1>";
    }
}

echo server($_SERVER['REQUEST_URI']);
// END
