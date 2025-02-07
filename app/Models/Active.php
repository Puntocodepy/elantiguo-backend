<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    use HasFactory;

    protected $table = 'activo';
    protected $guarded = ['idactivo'];
    protected $primaryKey = 'idactivo';
    public $timestamps = false;

    #Relaciones ----------------------------------------------------------------------------

    public function detail(){
        return $this->hasMany(ActiveDetail::class, 'idactivo');
    }

}
