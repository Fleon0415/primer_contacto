<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Mostrar todas las transacciones
    public function index()
    {
        $transactions = Transaction::with(['property', 'client', 'agent'])->get();
        return view('transactions.index', compact('transactions'));
    }

    // Crear una nueva transacción
    public function create()
    {
        return view('transactions.create');
    }

    // Almacenar una nueva transacción
    public function store(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'client_id' => 'required|exists:clients,id',
            'agent_id' => 'required|exists:agents,id',
            'transaction_date' => 'required|date',
            'type' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transacción creada con éxito.');
    }
}
