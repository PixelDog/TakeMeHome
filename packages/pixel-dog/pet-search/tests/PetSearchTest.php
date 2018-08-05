<?php

namespace PixelDog\PetSearch\Tests;

use PixelDog\PetSearch\Facades\PetSearch;
use PixelDog\PetSearch\ServiceProvider;
use Orchestra\Testbench\TestCase;

class PetSearchTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'pet-search' => PetSearch::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
