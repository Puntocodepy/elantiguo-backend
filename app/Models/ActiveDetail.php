<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveDetail extends Model
{
    use HasFactory;

    protected $table = 'detalle_activo';
    protected $guarded = ['iddetalle_activo'];
    protected $primaryKey = 'iddetalle_activo';
    public $timestamps = false;

    #Relaciones ----------------------------------------------------------------------------

    public function detail(){
        return $this->belongsTo(Active::class, 'idactivo');
    }
}
