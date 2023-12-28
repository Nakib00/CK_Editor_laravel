<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentTable extends Model
{
    use HasFactory;
    protected $table = 'student_tables';

    protected $fillable = [
        'title',
        'description',
    ];

}
