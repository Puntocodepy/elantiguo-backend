<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseDetail extends Model
{
    use HasFactory;

    protected $table = 'detalle_pasivo';
    protected $guarded = ['iddetalle_pasivo'];
    protected $primaryKey = 'iddetalle_pasivo';

    public $timestamps = false;

}
