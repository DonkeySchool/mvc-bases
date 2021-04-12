<?php

class Book
{
    private static function getTableName()
    {
        return 'book';
    }

    public static function getList()
    {
        return Database::getInstance()->getList(self::getTableName());
    }
}