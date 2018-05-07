<?php

namespace App\Http\Controllers;

use App\Soil;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SoilsController extends Controller
{
    
    public function index() {
        $soils = Soil::where('systemID', app('system')->id)->get();
        return view('soils.index', compact('soils'));
    }

    public function create() {

        return view('soils.create');
    }

    public function store(Request $request) 
    {
        // dd($request->all());
        $newSoil = soil::create([
            'name' => $request['name'],
            'comments' => $request['comments'],
            'systemID' => app('system')->id, // from appServiceprovider
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('soils');
    }


/**
     * Display a page to edit a new soil
     *
     */
    public function edit($id) 
    {
        $soil = soil::find($id);
        return view('soils.edit')->with('soil', $soil);
    }

    public function update(Request $request) 
    {
       //print_r($_POST); 
       //dd($request->all()); 
       //dd($request->hasFile('imageFile'));
       // dd($request['imageFile']);
        $soil = soil::find($request['id']);
        
            $soil->name = $request['name'];
            $soil->comments = $request['comments'];
            
            $soil->updated_at = Carbon::now()->toDateTimeString();
            $soil->save();
            return redirect('soils');
    }

    /**
     * Display a page to delete a new soil
     *
     */
    public function destroy($id) 
    {
        soil::destroy($id);

        $soil = planttype::all();
        return view('soils.index', compact('soil'));
    }
}
