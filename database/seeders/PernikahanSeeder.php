<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PernikahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('weddings')->insert([
            [ 'namaP'=>'Joy Felicia',
            'alamatP'=>'Jl. Nuri no. 15',
            'gerejaP'=>'GPPS MAHANAIM',
            'noHpP'=>'089612345678',
            'tempatLahirP'=>'Jakarta',
            'tanggalLahirP'=>'1997-12-03',
            'menikahP'=>'0',
            
            'namaL'=>'Marvel Justin',
            'alamatL'=>'Jl. Kutilang no. 85',
            'gerejaL'=>'GPPS MAHANAIM',
            'noHpL'=>'08133367998',
            'tempatLahirL'=>'Solo',
            'tanggalLahirL'=>'1994-09-08',
            'menikahL'=>'0',

            'tanggalPernikahan'=>'2025-01-09',        
            ],

            [ 'namaP'=>'Maria Anderson',
            'alamatP'=>'Jl. Ahmad Yani no. 10',
            'gerejaP'=>'GPPS MAHANAIM',
            'noHpP'=>'08117765008',
            'tempatLahirP'=>'Surabaya',
            'tanggalLahirP'=>'1999-12-13',
            'menikahP'=>'0',
            
            'namaL'=>'Martin Hartono',
            'alamatL'=>'Jl. Sosrokartono no. 125',
            'gerejaL'=>'GPPS MAHANAIM',
            'noHpL'=>'081311259987',
            'tempatLahirL'=>'Jogja',
            'tanggalLahirL'=>'1993-10-08',
            'menikahL'=>'0',

            'tanggalPernikahan'=>'2025-02-19',        
            ],
        ]);
    }
}
