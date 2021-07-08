<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Note;
use App\Models\Day;

class Category extends Model
{
    
    
    use HasFactory;

    protected $guarded = ['id'];

    public function note(){
        return $this->hasMany(Note::class);
    }

       
}
