<?php

namespace App;

use AvoRed\Ecommerce\Models\Database\User;
use Illuminate\Database\Eloquent\Model;

class Fidelite extends Model
{
    protected $fillable = ['numero_fidelite'];

    public function user(){
        $this->hasOne(User::class);
    }
}
