<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Http\Requests\CreateAgentRequest;
use App\Http\Requests\UpdateAgentRequest;


class AgentController extends Controller
{
    public function index()
    {
        return view('agent.index')->with('agents' , Agent::all());
    }

    // public function create(Request $request)
    // {
        
    // }

    public function store(CreateAgentRequest $request)
    {
        $data = $request->validated();
        Agent::create($data);
        return redirect(route('agent.index'));
    }

    public function show(Agent $agent)
    {
        return view('agent.shoe')->with('agents' , $agent);
    }

    public function update(UpdateAgentRequest $request , Agent $agent)
    {
        $data = $request->validated();
        $agent->update($data);
        return redirect(route('agent.index'));
    }

    public function delete(Agent $agent)
    {
        $agent->delete();
        return redirect(route('agent.index'));
    }
}
