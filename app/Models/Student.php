<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'stu_name',
        'stu_id',
        'stu_primaryid',
        'stu_primaryidtype',
        'stu_gender',
        'stu_email',
        'stu_phonenum',
        'stu_enrollmentdate',
        'stu_address'
    ];
}
