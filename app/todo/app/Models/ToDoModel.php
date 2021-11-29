<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoModel extends Model
{
    use HasFactory;

    public $table = 'todotable';
    protected $fillable = ['status'];
}
