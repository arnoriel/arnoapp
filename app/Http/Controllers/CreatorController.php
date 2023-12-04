<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $creator = Creator::all();
        return view('creator.index', compact ('creator'));
    }

    public function creatormain()
    {
        $creator = Creator::all();
        return view('main.index', compact ('creator'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creator.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
        ]);

        $creator = new Creator;
        $creator->name = $request->name;
        $creator->email = $request->email;
        $creator->phone = $request->phone;
        $creator->dob = $request->dob;
        $creator->save();
        return redirect()->route('creator.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $creator=Creator::findOrFail($id);
        return view('creator.show', compact('creator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $creator=Creator::findOrFail($id);
        return view('creator.edit', compact('creator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
        ]);

        $creator=Creator::findOrFail($id);
        $creator->name = $request->name;
        $creator->email = $request->email;
        $creator->phone = $request->phone;
        $creator->dob = $request->dob;
        $creator->save();
        return redirect()->route('creator.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $creator = Creator::findOrFail($id);
        $creator->delete();
        return redirect()->route('creator.index');
    }
}
