<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employees;

    public function __construct(Employee $employees){
        $this->employees = $employees;
    }


    public function list(){
        $employees = $this->employees->all();
        return response()->json($employees);
    }
}
