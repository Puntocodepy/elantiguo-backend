<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    protected $machines;

    public function __construct(Machine $machines){
        $this->machines = $machines;
    }


    public function list(){
        $data = $this->machines->all();
        return response()->json($data);
    }
}
