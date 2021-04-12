<?php

class BookView
{
    public static function render(array $vars)
    {
        var_dump('books are ', $vars['books']);
    }

    public static function renderOne(array $vars)
    {
        var_dump('book is ', $vars['book']);
    }
}