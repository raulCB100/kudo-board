<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kudo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description','board_id','created_by'];
}
