<?php

namespace Horsefly;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $table = 'audits';
    protected $fillable = [
        'user_id',
        'data',
        'message',
        'auditable_id',
        'auditable_type'
    ];

}
