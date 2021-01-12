<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transkrip;
use App\Mahasiswa;
use App\Matkul;



class TranskripController extends Controller
{
    public function createTranskrip(){
        $matkuls = Matkul::all();
        $mahasiswa = Mahasiswa::all();
        return view('transkrip.create', compact('mahasiswa','matkuls'));
    }

    public function store(Request $request){
        // transkrip::create([
        //     'transkrip_name' => $request->transkrip_name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        Transkrip::create($request->all());
        //return back();
        return redirect('/transkrip');
    }

    public function viewTranskrip(){
        //return view('transkrip');
       
        $transkrip = Transkrip::all();
        return view('transkrip.index', compact('transkrip'));
    }
    // public function viewNIM(){
    //     //return view('mahasiswa');
    //     $matkuls = Matkul::all();
    //     $mahasiswa = Mahasiswa::all();
    //     return view('transkrip.home', compact('mahasiswa','matkuls'));
    // }
    // public function viewMatkul(){
    //     //return view('mahasiswa');
    //     $matkuls = Matkul::all();
    //     return view('transkrip.home', compact('matkuls'));
    // }


    
    public function edit($id){
        //return view('edit');
        //$transkrip = transkrip::where('id', $id)->first();
        $transkrip = Transkrip::findOrFail($id);
        //dd($transkrip);
        return view ('transkrip.edit', compact('transkrip'));
    }

    public function update(Request $request, $id)
    {
        // transkrip::where('id',$id)->update([
        //     'transkrip_name' => $request->transkrip_name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        Transkrip::findOrFail($id)->update($request->all());
        return redirect('/transkrip');
    }

    public function delete($id){
        Transkrip::destroy($id);
        return back();
    }
}
