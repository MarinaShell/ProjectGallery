<?php

namespace App\data;

use RedbeanPHP\R;
use RedbeanPHP\RedExeption;

try{
    R::setUp('sqLite:db.sqlite');
    if (R::testConnection)
    throw new RedException('No connection');
}
catch(RedException $e){
    exit(var_dump($e));
}