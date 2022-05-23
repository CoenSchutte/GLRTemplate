<?php

namespace CoenSchutte\GLRTemplate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CoenSchutte\GLRTemplate\GLRTemplate
 */
class GLRTemplate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'glrtemplate';
    }
}
