<?php

namespace Alive2212\LaravelTicketService\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelTicketService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelticketservice';
    }
}
