<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable=['title', 'completed','Details'];

   // public function getRouteKeyName()
    //{
      // return 'title';
    //}
}