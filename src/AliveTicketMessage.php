<?php

namespace Alive2212\LaravelTicketService;

use Alive2212\LaravelSmartRestful\BaseModel;

class AliveTicketMessage extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id',
        'ticket_id',
        'body',
        'revoked',
    ];

    public function getQueueableRelations()
    {
        return null;
        // TODO: Implement getQueueableRelations() method.
    }
}
