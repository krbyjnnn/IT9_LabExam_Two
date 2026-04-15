<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rice;

class RiceController extends Controller
{
    public function index()
    {
        $rices = Rice::all();

        return view('rice.index', [
            'items' => $rices,
        ]);
    }

    public function store(Request $request)
    {
        Rice::create([
            'rice_name' => $request->rice_name,
            'price_per_kg' => $request->price_per_kg,
            'stock_quantity' => $request->stock_quantity,
            'description' => $request->description
        ]);

        return redirect('/rices');
    }

    public function edit($id)
    {
        $rice = Rice::findOrFail($id);

        return view('rice.edit', [
            'item' => $rice,
        ]);
    }

    public function update(Request $request, $id)
    {
        $rice = Rice::findOrFail($id);

        $rice->update([
            'rice_name' => $request->rice_name,
            'price_per_kg' => $request->price_per_kg,
            'stock_quantity' => $request->stock_quantity,
            'description' => $request->description
        ]);

        return redirect('/rices');
    }

    public function destroy($id)
    {
        $rice = Rice::findOrFail($id);
        $rice->delete();

        return redirect('/rices');
    }
}
