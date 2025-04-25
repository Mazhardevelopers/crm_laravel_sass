<?php

namespace Horsefly;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'job_categories';
    protected $fillable = [
        'name',
        'description',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'job_category_id');
    }

}
