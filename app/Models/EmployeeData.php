<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeData extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'attendance',
        'status'
    ];

    /*
    prevent Laravel Eloquent Model from creating created_at and update_at columns 
    carbon automatically at preparing sql query 
    */
    public $timestamps = false;

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

}
