<?php


abstract class AbstractModel
{
    static protected $table;

    public static function geTable()
    {
        return static::$table;
    }
}
