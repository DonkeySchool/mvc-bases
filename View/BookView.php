<?php

class BookView
{
    public static function render(array $vars)
    {
        var_dump('books are ', $vars['books']);
    }
}