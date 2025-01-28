<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    // Mostrar todos los agentes
    public function index()
    {
        $agents = Agent::all();
        return view('agents.index', compact('agents'));
    }

    // Mostrar un agente con sus transacciones
    public function show($id)
    {
        $agent = Agent::with('transactions')->find($id);
        if (!$agent) {
            return redirect()->back()->with('error', 'Agente no encontrado.');
        }
        return view('agents.show', compact('agent'));
    }
}
