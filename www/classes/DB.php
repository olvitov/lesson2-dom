<?php

/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 17.05.2016
 * Time: 11:33
 */
class DB
{
    public function __construct()
    {
      mysql_connect('localhost', 'root', '');
        mysql_select_db('test');
    }

    public function queryAll($sql, $class = 'stdClass') {

        $res = mysql_query($sql);
        if (false === $res) {
            return false;

        }
        $ret = [];
        while ($row = mysql_fetch_object($res, $class)) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryOne($sql, $class = 'stdClass') {

    return $this->queryAll($sql, $class)[0];
    }
}
