<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CreditForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class FormController extends Controller
{
    public function form(int $carId, Request $request) {
        $init = $request->initial_payment;
        $monthPay = $request->monthly_payment;
        $loanTerm = $request->loan_term;
        $price = Car::find($carId)->price;
        $form = CreditForm::
        select()->
        where('initial_payment', '<=', $init)->
        where('monthly_payment', '<=', $monthPay)->
        where('loan_term', '>=', $loanTerm)->
        orderBy('interest_rate', 'asc')->
        first();
        if ($form == null) {
            return "Некорректные данные";
        }

        $monthRate = $form->interest_rate / 12;
        $monthPayment = (int)($price * ($monthRate + ($monthRate / (1 + $monthRate) + $loanTerm - 1)));
        $form = [
            'overPay' => $monthPay * $loanTerm - $price,
            'interestRate' => $form->interest_rate,
            'monthPayment' => $monthPayment,
            'carId' => $carId,
            'programId' => $form->programId,
            'loanTerm' => $loanTerm
        ];
        return view('credit_form', compact('form'));
    }
}
