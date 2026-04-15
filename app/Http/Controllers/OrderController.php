<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Rice;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('rice')->get();

        return view('order.index', [
            'items' => $orders,
        ]);
    }

    public function create()
    {
        $rices = Rice::all();

        return view('order.create', [
            'rices' => $rices,
        ]);
    }

    public function store(Request $request)
    {
        $rice = Rice::findOrFail($request->rice_id);
        $totalPrice = $rice->price_per_kg * $request->quantity_kg;

        // Creating Order
        $order = Order::create([
            'rice_id' => $request->rice_id,
            'customer_name' => $request->customer_name,
            'quantity_kg' => $request->quantity_kg,
            'total_price' => $totalPrice,
        ]);

        // Payment Record
        \App\Models\Payment::create([
            'order_id' => $order->id,
            'amount' => $totalPrice,
            'status' => 'Unpaid'
        ]);

        return redirect('/orders');
    }


}
