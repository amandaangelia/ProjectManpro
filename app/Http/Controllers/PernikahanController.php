<?php

namespace App\Http\Controllers;

use App\Models\Pernikahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class PernikahanController extends Controller
{
    //
    public function show(Pernikahan $pernikahan){

        return view('admin.pernikahanDetail', 
        // yg kiri nama yg dipanggil di webnya kanan itu asalnya
        ['wedding'=>$pernikahan]);
    }
    
    public function view(pernikahan $pernikahan)
    {
        $pernikahan = DB::table('weddings')->paginate(10);

        // $paginator = Pernikahan::paginate(10);
        // $items = $paginator->items(); // Get the collection of models
        
        return view('admin.pernikahan', ["weddings"=>$pernikahan]);
    }

    public function insert(Request $request){
        // dd($request);
        $validatedata = $request->validate([
            'namaP'=>'required',
            'alamatP'=>'required',
            'gerejaP'=>'required',
            'noHpP'=>'required',
            'tempatLahirP'=>'required',
            'tanggalLahirP'=>'required',
            'menikahP'=>'required',
            
            'namaL'=>'required',
            'alamatL'=>'required',
            'gerejaL'=>'required',
            'noHpL'=>'required',
            'tempatLahirL'=>'required',
            'tanggalLahirL'=>'required',
            'menikahL'=>'required',

            'tanggalPernikahan'=>'required',

            'allows'=>'required',

        ], [
            'namaP.required'=>'Nama Lengkap Perempuan Harus diisi',
            'alamatP.required'=>'Alamat Perempuan Harus diisi',
            'gerejaP.required'=>'Asal Gereja Perempuan Harus diisi',
            'noHpP.required'=>'Nomor Telepon Perempuan Harus diisi',
            'tempatLahirP.required'=>'Tempat Lahir Perempuan Harus diisi',
            'tanggalLahirP.required'=>'Tanggal Lahir Perempuan Harus diisi',
            'menikahP.required'=>'Pernah Menikah sebelumnya(Perempuan) Harus diisi',
            
            'namaL.required'=>'Nama Lengkap Laki-laki Harus diisi',
            'alamatL.required'=>'Alamat Laki-laki Harus diisi',
            'gerejaL.required'=>'Asal Gereja Laki-laki Harus diisi',
            'noHpL.required'=>'Nomor Telepon Laki-laki Harus diisi',
            'tempatLahirL.required'=>'Tempat Lahir Laki-laki Harus diisi',
            'tanggalLahirL.required'=>'Tanggal Lahir Laki-laki Harus diisi',
            'menikahL.required'=>'Pernah Menikah sebelumnya(Laki-laki) Harus diisi',

            'tanggalPernikahan.required'=>'Rencana Tanggal Pernikahan Harus diisi',

            // 'alamatP.size'=>'Alamat Perempuan tidak boleh lebih dari 255 Char',
            // 'alamatL.size'=>'Alamat Laki-laki tidak boleh lebih dari 255 Char',
            // 'noHpL.numeric'=>'Nomor Telepon Laki-laki Harus Berupa Angka',
            // 'noHpP.numeric'=>'Nomor Telepon Perempuan Harus Berupa Angka',
            // 'tanggalLahirL.date_format' => 'Tanggal Lahir Laki-laki harus mengikuti format dd/mm/yyyy.',
            // 'tanggalLahirP.date_format' => 'Tanggal Lahir perempuan harus mengikuti format dd/mm/yyyy.',
            // 'tanggalPernikahan.date_format' => 'The date must be in the format dd/mm/yyyy.',
        ]);

        try{
            $pernikahan = Pernikahan::create([
                'namaP' => $validatedata['namaP'],
                'alamatP' => $validatedata['alamatP'],
                'gerejaP' => $validatedata['gerejaP'],
                'noHpP' => $validatedata['noHpP'],
                'tempatLahirP' => $validatedata['tempatLahirP'],
                'tanggalLahirP' => $validatedata['tanggalLahirP'],
                'menikahP' => $validatedata['menikahP'],
                'namaL' => $validatedata['namaL'],
                'alamatL' => $validatedata['alamatL'],
                'gerejaL' => $validatedata['gerejaL'],
                'noHpL' => $validatedata['noHpL'],
                'tempatLahirL' => $validatedata['tempatLahirL'],
                'tanggalLahirL' => $validatedata['tanggalLahirL'],
                'menikahL' => $validatedata['menikahL'],
                'tanggalPernikahan' => $validatedata['tanggalPernikahan'],
                'allow'=>$validatedata['allow'],
                'updated_at' => now(),
                'created_at' => now(),
            ]);

            Session::flash('title', 'Input Data Pernikahan Berhasil!');
            Session::flash('message', 'Data Berhasil Diinput.');
            Session::flash('icon', 'success');
            return redirect('/pernikahan')->with('success', 'Pernikahan berhasil Diinput');

        }catch(\Exception $e) {
            Session::flash('title', 'Input Data Pernikahan Gagal!');
            Session::flash('message', 'Terjadi Kesalahan Saat Proses Penginputan Data.');
            Session::flash('icon', 'error');
            return back()->withInput();
        }
        
    }
}
