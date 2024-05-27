<?php

namespace App\Http\Controllers;

use App\Models\Measure;
use Illuminate\Http\Request;

class MeasureController extends Controller
{

    protected $measure;

    public function __construct(Measure $measure){
        $this->measure = $measure;
    }

    /**
     * Retorna las medidas existentes en el sistema
     * @return JsonResponse
     */
    public function getList(){
        $measures = $this->measure->where('active', true)->get();
        return response()->json($measures);
    }
}
