<?php

namespace App\Http\Controllers;

use App\Models\Kematian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorekematianRequest;
use App\Http\Requests\UpdatekematianRequest;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //dd($request);
        $request->validate([
            'namaLengkap'=>'required',
            'tanggalMeninggal'=>'required',
            'noHp'=>'required',
            'namaPemohon'=>'required',
            'keterangan'=>'required',
        ]);

       Kematian::create($request->all());
       return view('kematian');
    }


    /**
     * Display the specified resource.
     */
    public function show(kematian $kematian)
    {
        $kematians = DB::table('kematians')->paginate(10);
        return view('admin.kematian.show',["kematians"=>$kematians]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kematian $kematian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekematianRequest $request, kematian $kematian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kematian $kematian)
    {
        //
    }
}
