<?php

/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 17.05.2016
 * Time: 11:33
 */
class DB
{
    private $dbh;
    private $className = 'stdClass';
    public function __construct()
    {


        $this->dbh =  new PDO('mysql:dbname=test;host=localhost', 'root', '');
    }

    public function setClassName($className) {
        $this->className = $className;

}

    public function query($sql, $params=[]) {

        $sth =  $this->dbh->prepare($sql);
        $sth->execute($params);
       return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
}

   
}
