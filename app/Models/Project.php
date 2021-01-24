<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // protected $fillable = ['title','slug','description'];
    // Esto se puede activar siempre que no mandesmos request()->all() 
    // a la BD, debo incluir una validacion en el metoro "store"
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
