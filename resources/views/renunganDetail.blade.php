@extends('base.base')

@section('content')

<div id="top" class="container m-auto px-24 pt-16">
    <div class="judul">
        <h1 class="text-center font-bold mt-10 text-3xl">{{ $renungan->judul }}</h1>
        <p class="text-center text-lg font-normal py-3">{{ date('d F Y', strtotime($renungan->tanggal)) }}</p>
        <p class="text-center text-sm font-normal">Renungan oleh: {{ $renungan->pembuat }}</p>
    </div>
    <div class="gambar flex justify-center items-center pt-3">
        <img src="{{ asset('storage/'. $renungan->poster) }}" height="500" width="500" alt="Ilustrasi Kasih">
    </div>
    <div class="isi">
        <p class="pt-12 text-2xl font-medium text-left"><span class="font-semibold">Bacaan: </span>{{ $renungan->ayat }}</p>
        <div class="paragraf text-justify pt-2 pb-8">
            {{ $renungan->isiRenungan }}
            <br>
            {{ $renungan->isiRenungan2 }}
        </div>
    </div>
</div>

<!-- Back to top button -->
 <a href="#top" class="fixed bottom-4 right-4 p-3 z-10 border-2 border-[#125098] bg-white hover:bg-blue-100 rounded-full shadow-md">
    <img src="{{ asset('images/arrow-up-no-bg.png') }}" alt="back to top button" class="w-5 h-5">
 </a>

@endsection