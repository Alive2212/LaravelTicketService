<?php

namespace Alive2212\LaravelTicketService\Http\Controllers;

use Alive2212\LaravelSmartRestful\BaseController;
use Alive2212\LaravelTicketService\AliveTicketMessage;

class AliveTicketMessageController extends BaseController
{
    /**
     *
     */
    public function initController()
    {
        $this->model = new AliveTicketMessage();
    }
}