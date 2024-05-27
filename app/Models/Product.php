<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    #Relaciones -------------------------------------------------------------------------------

    public function productProvider() {
        return $this->hasMany(ProductProvider::class, 'product_id');
    }

    public function measures() {
        return $this->belongsTo(Measure::class, 'measure_id');
    }

    # Metodos ---------------------------------------------------------------------------------
    public function decrementStock($id, $quantity) {
        $product = $this->findOrFail($id);
        $product->stock -= $quantity;
        $product->save();
    }

}

