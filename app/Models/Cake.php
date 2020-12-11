<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cake extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stock'
    ];

    public function getDescriptionAttribute($value)
    {
        return \ucfirst(\strtolower($value));
    }

    // public function setDescriptionAttribute($value)
    // {
    //     $this->attributes['name'] = \strtoupper($value);
    // }
}
