<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function employee(){
        return $this->belongsTo('\App\Models\Employee','idEmployee');
    }

    public function client(){
        return $this->belongsTo('\App\Models\User','idUser');
    }

    public function details(){
        return $this->hasMany('\App\Models\OrderDetail','idOrder');
    }
}
