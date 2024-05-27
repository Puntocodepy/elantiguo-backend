<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'pasivo';
    protected $guarded = ['idpasivo'];
    protected $primaryKey = 'idpasivo';

    public $timestamps = false;

    #Relaciones ----------------------------------------------------------------------------

    public function detail(){
        return $this->hasMany(ExpenseDetail::class, 'idpasivo');
    }

    #Metodos -------------------------------------------------------------------------------

    public function store($request){
        $expense = self::create($request->all());
        $expense->detail()->createMany($request->detallePasivo);
        return $expense;
    }
}
