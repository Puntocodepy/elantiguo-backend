<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    # Relationships----------------------------------------------------------------------------
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function machine(){
        return $this->belongsTo(Machine::class);
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
