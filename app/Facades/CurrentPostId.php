<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CurrentPostId extends Facade
{
    protected static function getFacadeAccessor(){return 'currentPostId';}

}