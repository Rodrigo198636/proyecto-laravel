<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
 
    protected $fillable = ['nombre', 'Descripcion', 'categoria']; 
    /* protected $guarded=[]; */

     public function getRouteKeyName()
    {
        return 'slug';
    } 

}
