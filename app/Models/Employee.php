<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'role',
        'email',
        'company_id',
        'project_id'
    ];

    // Relationship to Company
    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }

    // Relationship to Project
    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
