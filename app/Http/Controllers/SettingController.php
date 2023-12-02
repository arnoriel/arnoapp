<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting=Setting::all();
        return view ('setting.index', compact ('setting'));
    }

    public function indexset()
    {
        $setting=Setting::all();
        return view ('beranda.index', compact ('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'title' => 'required',
            'cover' => 'required',
            'info' => 'required',
            'bio' => 'required',
            'about' => 'required',
         ]);

         $setting = new Setting;
         $setting->title = $request->title;
         if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/aset/', $name);
            $setting->cover = $name;
            } 
        $setting->info = $request->info;
        $setting->bio = $request->bio;
        $setting->about = $request->about;
        $setting->save();
        return redirect()->route('setting.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('book.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('setting.edit', compact('setting'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $validated = $request->validate([
            'title' => 'required',
            'cover' => 'required',
            'info' => 'required',
            'bio' => 'required',
            'about' => 'required',
         ]);

         $setting = Setting::findOrFail($id);
         $setting->title = $request->title;
         if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/aset/', $name);
            $setting->cover = $name;
            } 
        $setting->info = $request->info;
        $setting->bio = $request->bio;
        $setting->about = $request->about;
        $setting->save();
        return redirect()->route('setting.index');
    }
    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        $setting = setting::findOrFail($id);
        $setting->delete();
        return redirect()->route('setting.index');
    }
}
