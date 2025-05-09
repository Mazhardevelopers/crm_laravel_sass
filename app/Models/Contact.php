<?php

namespace Horsefly;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone',
        'contact_landline',
        'contactable_id',
        'contactable_type'
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function contactable()
    {
        return $this->morphTo();
    }
}
