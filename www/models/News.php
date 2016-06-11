<?php

namespace Application\Models;

class News
extends \AbstractModel
{

    protected static $table = 'news';

    

    
   public $id;
  public $title;
    public $text;
   public $author;

}
