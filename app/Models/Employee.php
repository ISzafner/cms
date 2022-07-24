<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'description',
        'testingSystem',
        'reportingSystems',
        'selenium',
        'ide',
        'programmingLanguages',
        'mysql',
        'projectManagementMethodologies',
        'scrum',
    ];

    public function position(){
        return $this->belongsTo(Position::class);
    }
}
