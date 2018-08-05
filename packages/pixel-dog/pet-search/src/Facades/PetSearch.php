<?php

namespace PixelDog\PetSearch\Facades;

use Illuminate\Support\Facades\Facade;

class PetSearch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pet-search';
    }
}
