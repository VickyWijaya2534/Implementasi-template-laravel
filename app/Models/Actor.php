<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';
    public $timestamps = false; // Sakila tidak menggunakan timestamps Laravel
    
    protected $fillable = ['first_name', 'last_name', 'last_update'];
}
