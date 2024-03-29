<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_menu extends Model
{
    use HasFactory;

    protected $table = 'menu_models'; 
    
    protected $fillable = [
     'menu', 
     'status', 
     'url', 
    ];
}
