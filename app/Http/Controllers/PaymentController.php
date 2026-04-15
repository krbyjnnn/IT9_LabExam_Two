<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        // Load payments with their orders and the rice details
        $payments = Payment::with('order.rice')->get();

        return view('payment.index', [
            'items' => $payments
        ]);
    }

    public function updateStatus($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->status = 'Paid';
        $payment->save();

        return redirect('/payments');
    }
}