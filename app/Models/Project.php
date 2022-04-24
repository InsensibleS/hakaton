<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function files()
    {
        return $this->hasMany(Files::class, 'project_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
