<?php

namespace Mgcodeur\LaravelAttributes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mgcodeur\LaravelAttributes\LaravelAttributes
 */
class LaravelAttributes extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mgcodeur\LaravelAttributes\LaravelAttributes::class;
    }
}
