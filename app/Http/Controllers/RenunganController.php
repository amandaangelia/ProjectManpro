<?php

namespace App\Http\Controllers;

use App\Models\Renungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.renungan.addRenungan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'ayat'=>'required',
            'judul'=>'required',
            'isiRenungan'=>'required',
            'isiRenungan2'=>'required',
            'pembuat'=>'required',
            'poster'=>'required|image',
            'tanggal'=>'required'
        ]);

        $validatedData['poster'] = $request->file('poster')->store('upload');
       
        
        Renungan::create($validatedData);
        
        return redirect('/admin/renungan');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $renungans = DB::table('renungans')->paginate(5);
        return view('renungan',["renungans"=>$renungans]);
    }

    public function showDetail(Renungan $renungan)
    {

        return view('renunganDetail',["renungan"=>$renungan]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Renungan $renungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Renungan $renungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Renungan $renungan)
    {
        //
    }
}
