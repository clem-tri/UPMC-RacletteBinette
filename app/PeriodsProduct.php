<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AvoRed\Framework\Models\Database\Product;
class PeriodsProduct extends Model
{

    protected $fillable = ['date_db', 'date_fin'];

    /**
     * Get the product record associated with the user.
     */
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
