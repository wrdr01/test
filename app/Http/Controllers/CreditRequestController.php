<?php

namespace App\Http\Controllers;

use App\Models\CreditRequest;
use Illuminate\Http\Request;

class CreditRequestController extends Controller
{
    public function requestCreate(Request $request) {
        $requestArr = [
            'monthly_payment' => $request->monthlyPayment,
            'interest_rate' => $request->interestRate,
            'loan_term' => $request->loanTerm,
            'program_id' => $request->programId,
            'car_id' => $request->carId,
            'user_id' => 0
        ];
        CreditRequest::create($requestArr);
        return view('confirm_request');
    }
}
