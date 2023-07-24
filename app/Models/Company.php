<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cui'
    ];

    // Relationship with employees
    public function employees() {
        return $this->hasMany(Employee::class, 'company_id');
    }

    // Relationship with projects
    public function projects() {
        return $this->hasMany(Project::class, 'project_id');
    }
}
