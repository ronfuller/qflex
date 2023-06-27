<?php

namespace Psi\Qflex\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Psi\Qflex\Qflex
 */
class Qflex extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Psi\Qflex\Qflex::class;
    }
}
