<?php

namespace Horsefly;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;  

class JobSource extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'job_sources';
    protected $fillable = [
        'name',
        'description',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'job_source_id');
    }
    public function jobTitle()
    {
        return $this->hasMany(JobTitle::class, 'job_title_id');
    }
    public function jobCategory()
    {
        return $this->hasMany(JobCategory::class, 'job_category_id');
    }
}
