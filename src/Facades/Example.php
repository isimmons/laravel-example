<?php

namespace Isimmons\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Isimmons\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Isimmons\Example\Example::class;
    }
}
