<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'type', 'ingredients', 'price'];

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class);
    }
}
