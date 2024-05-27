<?php

namespace App\Http\Controllers;

use App\Mail\BudgetMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BiolimpiezaController extends Controller
{
    public function sendBudget(Request $request){
        $this->sendMail($request->all(), 'SOLICITAR PRESUPUESTO');
        return response()->json(['message' => 'Correo enviado']);
    }

    public function sendPlan(Request $request){
        $this->sendMail($request->all(), 'SOLICITAR PLAN');
        return response()->json(['message' => 'Correo enviado']);
    }

    public function sendQuestion(Request $request){
        $this->sendMail($request->all(), 'PREGUNTAS FRECUENTES');
        return response()->json(['message' => 'Correo enviado']);
    }

    public function sendContact(Request $request){
        $this->sendMail($request->all(), 'CONTACTO');
        return response()->json(['message' => 'Correo enviado']);
    }

    private function sendMail(array $data, string $subject){
        $data['subject'] = $subject;
        $mail = new BudgetMailable($data, $subject);	  
        Mail::to(['biolimpiezapy@gmail.com', 'vazquez182@gmail.com'])->send($mail);
    }
}


