@extends('base.base')

@section('content')

    <div class="container pt-16 px-12 my-8 mx-auto space-y-6">

        <!-- Kebaktian Umum -->
        <div id="infinite-loop" class="relative w-full h-56 md:h-[550px] overflow-hidden rounded-lg bg-slate-900">
            <!-- Item 1 -->
            <div class="absolute inset-0 opacity-100 animate-fadeLoop" style="animation-delay: 0s;">
                <img src="{{ asset('images/kebaktian-umum/kebaktian-1.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 6.67s;">
                <img src="{{ asset('images/kebaktian-umum/kebaktian-2.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 13.33s;">
                <img src="{{ asset('images/kebaktian-umum/kebaktian-3.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#061e39] to-transparent"></div>
            <div class="informasi-1 absolute inset-0 flex items-end justify-center z-30 pb-14">
                <div class="text-center space-y-2">
                    <p class="font-bold text-6xl text-white">KEBAKTIAN UMUM</p>
                    <p class="font-bold text-3xl text-white">Sabtu, 18.00 WIB</p>
                </div>    
            </div>
        </div> 
        
        <!-- Ibadah Kaum Wanita -->
        <div id="infinite-loop" class="relative w-full h-56 md:h-[550px] overflow-hidden rounded-lg bg-slate-900">
            <!-- Item 1 -->
            <div class="absolute inset-0 opacity-100 animate-fadeLoop" style="animation-delay: 0s;">
                <img src="{{ asset('images/w2m/w2m-1.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 6.67s;">
                <img src="{{ asset('images/w2m/w2m-2.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 13.33s;">
                <img src="{{ asset('images/w2m/w2m-3.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#061e39] to-transparent"></div>
            <div class="informasi-1 absolute inset-0 flex items-end justify-center z-30 pb-14">
                <div class="text-center space-y-2">
                    <p class="font-bold text-6xl text-white">IBADAH KAUM WANITA</p>
                    <p class="font-bold text-3xl text-white">Selasa (Minggu Kedua), 19.00 WIB</p>
                </div>
            </div>
        </div>

        <!-- Doa Puasa -->
        <div id="infinite-loop" class="relative w-full h-56 md:h-[550px] overflow-hidden rounded-lg bg-slate-900">
            <!-- Item 1 -->
            <div class="absolute inset-0 opacity-100 animate-fadeLoop" style="animation-delay: 0s;">
                <img src="{{ asset('images/doa-puasa/doa-puasa-1.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 6.67s;">
                <img src="{{ asset('images/doa-puasa/doa-puasa-2.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 13.33s;">
                <img src="{{ asset('images/doa-puasa/doa-puasa-3.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#061e39] to-transparent"></div>
            <div class="informasi-1 absolute inset-0 flex items-end justify-center z-30 pb-14">
                <div class="text-center space-y-2">
                    <p class="font-bold text-6xl text-white">DOA PUASA</p>
                    <p class="font-bold text-3xl text-white">Jumat, 10.00 WIB</p>
                </div>
            </div>
        </div>

        <!-- Fellowship -->
        <div id="infinite-loop" class="relative w-full h-56 md:h-[550px] overflow-hidden rounded-lg bg-slate-900">
            <!-- Item 1 -->
            <div class="absolute inset-0 opacity-100 animate-fadeLoop" style="animation-delay: 0s;">
                <img src="{{ asset('images/fellowship/fellowship-1.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 6.67s;">
                <img src="{{ asset('images/fellowship/fellowship-2.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 13.33s;">
                <img src="{{ asset('images/fellowship/fellowship-3.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#061e39] to-transparent"></div>
            <div class="informasi-1 absolute inset-0 flex items-end justify-center z-30 pb-14">
                <div class="text-center space-y-2">
                    <p class="font-bold text-6xl text-white">FELLOWSHIP</p>
                    <p class="font-bold text-3xl text-white">Rabu (1 bulan sekali), 19.00 WIB</p>
                </div>
            </div>
        </div>

        <!-- Latihan Paduan Suara -->
        <div id="infinite-loop" class="relative w-full h-56 md:h-[550px] overflow-hidden rounded-lg bg-slate-900">
            <!-- Item 1 -->
            <div class="absolute inset-0 opacity-100 animate-fadeLoop" style="animation-delay: 0s;">
                <img src="{{ asset('images/latihan-padus/latihan-padus-1.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 6.67s;">
                <img src="{{ asset('images/latihan-padus/latihan-padus-2.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 13.33s;">
                <img src="{{ asset('images/latihan-padus/latihan-padus-3.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#061e39] to-transparent"></div>
            <div class="informasi-1 absolute inset-0 flex items-end justify-center z-30 pb-14">
                <div class="text-center space-y-2">
                    <p class="font-bold text-6xl text-white">LATIHAN PADUAN SUARA</p>
                    <p class="font-bold text-3xl text-white">Rabu, 19.00 WIB</p>
                </div>
            </div>
        </div>

        <!-- Latihan PAW -->
        <div id="infinite-loop" class="relative w-full h-56 md:h-[550px] overflow-hidden rounded-lg bg-slate-900">
            <!-- Item 1 -->
            <div class="absolute inset-0 opacity-100 animate-fadeLoop" style="animation-delay: 0s;">
                <img src="{{ asset('images/latihan-paw/latihan-paw-1.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 6.67s;">
                <img src="{{ asset('images/latihan-paw/latihan-paw-2.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="absolute inset-0 opacity-0 animate-fadeLoop" style="animation-delay: 13.33s;">
                <img src="{{ asset('images/latihan-paw/latihan-paw-3.jpg') }}" class="block w-full h-full object-cover" alt="...">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#061e39] to-transparent"></div>
            <div class="informasi-1 absolute inset-0 flex items-end justify-center z-30 pb-14">
                <div class="text-center space-y-2">
                    <p class="font-bold text-6xl text-white">LATIHAN PRAISE & WORSHIP</p>
                    <p class="font-bold text-3xl text-white">Jumat, 18.30 WIB</p>
                </div>
            </div>
        </div>


        @foreach ($events as $event)

        <div class="relative w-full h-56 md:h-[550px] overflow-hidden rounded-lg bg-slate-900">
            <div class="absolute inset-0 opacity-100">
                <img src="{{ asset('storage/'. $event->image)}}" class="block w-full h-full object-cover" alt="...">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#061e39] to-transparent"></div>
            <div class="informasi-1 absolute inset-0 flex items-end justify-center z-30 pb-14">
                <div class="text-center space-y-2">
                    <a href="" class="font-bold text-6xl text-white uppercase">{{ $event->title}}</a>
                    <p class="font-bold text-3xl text-white uppercase">{{  $event->days }} , {{ $event->startTime }} wib - {{ $event->endTime}} wib</p>
                    <p class="font-bold text-3xl text-white uppercase">{{  $event->speaker }}</p>

                </div>
            </div>
        </div>


        @endforeach
        
    </div>     

@endsection