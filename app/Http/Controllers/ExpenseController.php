<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    protected $expense;

    public function __construct(
        Expense $expense
    ){
        $this->expense = $expense;
    }

    /**
     * Busqueda de egresos para la tabla
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request){
        $expenses = $this->expense
            ->with('detail')
            ->orderBy('idpasivo', 'desc')
            ->paginate($request->per_page);

        return response()->json($expenses);
    }
}
