<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;


class MatkulController extends Controller
{
    public function createMatkul(){
        return view('matkul.create');
    }

    public function store(Request $request){
        // matkul::create([
        //     'matkul_name' => $request->matkul_name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        Matkul::create($request->all());
        //return back();
        return redirect('/matkul');
    }

    public function viewMatkuls(){
        //return view('matkuls');
        $matkuls = Matkul::all();
        return view('matkul.index', compact('matkuls'));
    }
    
    public function edit($id){
        //return view('edit');
        //$matkul = matkul::where('id', $id)->first();
        $matkul = Matkul::findOrFail($id);
        //dd($matkul);
        return view ('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        // matkul::where('id',$id)->update([
        //     'matkul_name' => $request->matkul_name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        Matkul::findOrFail($id)->update($request->all());
        return redirect('/matkul');
    }

    public function delete($id){
        Matkul::destroy($id);
        return back();
    }
}
