<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    // Relationship with employees
    public function employees() {
        return $this->hasMany(Employee::class, 'project_id');
    }

    // Relationship with the company
    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
