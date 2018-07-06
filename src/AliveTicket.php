<?php

namespace Alive2212\LaravelTicketService;

use Alive2212\LaravelSmartRestful\BaseModel;

class AliveTicket extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ticket_id',
        'author_id',
        'responsible_id',
        'customer_id',
        'category_id',
        'title',
        'subtitle',
        'description',
        'status',
        'priority',
        'revoked',
    ];

    /**
     * @return null
     */
    public function getQueueableRelations()
    {
        return null;
        // TODO: Implement getQueueableRelations() method.
    }
}
