<?php

namespace Helilabs\FlashMessages\Facades;

use Illuminate\Support\Facades\Facade;

class FlashMessages extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Helilabs\FlashMessages'; }
}