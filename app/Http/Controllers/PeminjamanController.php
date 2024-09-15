<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        $data = Peminjaman::all();
        return view('datapinjam', compact('data'));
    }
    public function tambahpinjam(){
        return view('tambahdata');
    }

    public function insertdata(Request $request) {
        // dd($request->all());
        $data = Peminjaman::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('fotopinjam/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('peminjaman')->with('success', 'Data Berhasil Di tambahkan');
    }

    public function tampilkandata($id) {
        $data = Peminjaman::find($id);    
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Peminjaman::find($id);
        $data->update($request->all());
        return redirect()->route('peminjaman')->with('success', 'Data Berhasil Di Update');
    }

    public function delete($id){
        $data = Peminjaman::find($id);
        $data->delete();
        return redirect()->route('peminjaman')->with('success', 'Data Berhasil Di Hapus');
    }

}
