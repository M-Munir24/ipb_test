<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;


class MahasiswaController extends Controller
{
    public function createMhs(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        // Mahasiswa::create([
        //     'Mahasiswa_name' => $request->Mahasiswa_name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        Mahasiswa::create($request->all());
        //return back();
        return redirect('/mhs');
    }

    public function viewMahasiswa(){
        //return view('mahasiswa');
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    
    public function edit($id){
        //return view('edit');
        //$Mahasiswa = Mahasiswa::where('id', $id)->first();
        $mahasiswa = Mahasiswa::findOrFail($id);
        //dd($Mahasiswa);
        return view ('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        // Mahasiswa::where('id',$id)->update([
        //     'Mahasiswa_name' => $request->Mahasiswa_name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        Mahasiswa::findOrFail($id)->update($request->all());
        return redirect('/mhs');
    }

    public function delete($id){
        Mahasiswa::destroy($id);
        return back();
    }
}
