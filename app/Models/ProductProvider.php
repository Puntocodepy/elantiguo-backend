<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProvider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'product_provider';

    #Relaciones -------------------------------------------------------------------------------
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function provider() {
        return $this->belongsTo(Provider::class, 'provider_id');
    }

    public function measures() {
        return $this->belongsTo(Measure::class, 'measure_id');
    }

}
