<?php

namespace Alive2212\LaravelTicketService;

use Alive2212\LaravelSmartRestful\BaseModel;

class AliveTicketCategory extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id',
        'title',
        'subtitle',
        'description',
        'revoked',
    ];

    public function getQueueableRelations()
    {
        return null;
        // TODO: Implement getQueueableRelations() method.
    }
}
