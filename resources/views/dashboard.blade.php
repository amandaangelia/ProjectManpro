@extends('base.base')

@section('content')
<div class="dashboard">
    <div class="relative h-screen overflow-hidden">
        <img src="{{ asset('images/cover-4.jpg') }}" alt="Foto Gereja" class="absolute inset-0 w-full h-full object-cover z-10">
        <div class="absolute inset-0 bg-[#071525] opacity-30 z-20"></div>
        <div class="relative z-30 flex flex-col items-center justify-center h-full text-center">
            <h1 class="mt-10 font-bold text-6xl text-white">GPPS MAHANAIM DD-8</h1>
            <h2 class="mt-2 text-xl font-semibold text-white">WE ARE FAMILY</h2>
            <a href="#tema-tahunan">
                <img src="{{ asset('images/arrow-down.png') }}" alt="arrow-down" class="animate-bounce w-8 h-8 absolute bottom-7 left-1/2">
            </a>
        </div>
    </div>

    <div id="tema-tahunan" class="tema-tahunan">
        <div class="moving-text relative overflow-hidden whitespace-nowrap py-5 bg-white text-[#125098]">
            <div class="flex animate-slide-left-infinite w-max">
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
                <p class="text-center font-bold text-2xl mx-2">Roma 8:29</p>
                <p class="text-center font-bold text-2xl mx-2">Sebab semua orang yang dipilih-Nya dari semula, mereka juga ditentukan-Nya dari semula untuk menjadi serupa dengan gambaran Anak-Nya, supaya Ia, Anak-Nya itu, menjadi yang sulung di antara banyak saudara.</p>
            </div>
        </div>
        <img src="{{ asset('images/imago-dei.png') }}" alt="Tema Tahunan Gereja" class="w-full h-auto">
    </div>

    <div class="sejarah-gereja">
        <div class="headline bg-[#125098] text-white py-20 ">
            <div id="scroll-target" class="opacity-0 translate-y-10 transition-all duration-700">
                <h1 class="text-center font-semibold text-3xl">SEJARAH GEREJA</h1>
                <p class="text-base text-center font-normal mx-10 mt-6">GPPS Mahanaim adalah salah satu gereja lokal yang berada di bawah naungan sinode Gereja Pantekosta Pusat Surabaya (GPPS). Sebagai bagian dari gereja Pantekosta di Indonesia, GPPS Mahanaim memiliki akar sejarah yang erat dengan gerakan Pantekosta yang pertama kali masuk ke Indonesia pada awal abad ke-20. Gerakan ini dikenal dengan penekanan pada kebangkitan rohani, pengajaran tentang baptisan Roh Kudus, serta karunia-karunia Roh Kudus seperti berbahasa roh dan penyembuhan.</p>
            </div>
        </div>
    </div>

    <div class="visi-misi">
        <div class="relative h-30 overflow-hidden py-24 px-10 text-[#125098]">
            <img src="{{ asset('images/content-1.jpg') }}" alt="PAW" class="absolute inset-0 w-full h-full object-cover z-10 blur-md">
            <div class="absolute inset-0 bg-white opacity-80 z-20"></div>
            <div class="relative z-30 flex flex-col items-center justify-center h-full text-center">
                <h1 id="move-left" class="text-center font-bold text-3xl opacity-0">VISI & MISI GPPS Mahanaim</h1>
                <p id="move-right" class="text-lg text-center font-semibold mt-2 opacity-0">Membawa gereja sebagai keluarga Allah di tengah-tengah dunia</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const movingTexts = document.querySelectorAll('.moving-text .flex');
        
        movingTexts.forEach((movingText) => {
            const originalContent = movingText.innerHTML;

            // Duplikasikan konten
            movingText.innerHTML += originalContent;
        });
    });
    document.addEventListener("scroll", function() {
        const target = document.getElementById("scroll-target");
        const targetPosition = target.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (targetPosition < windowHeight) {
            target.classList.add("opacity-100", "translate-y-0");
            target.classList.remove("opacity-0", "translate-y-10");
        } else {
            target.classList.remove("opacity-100", "translate-y-0");
            target.classList.add("opacity-0", "translate-y-10");
        }
    });
    document.addEventListener("scroll", function() {
        const visiTextLeft = document.getElementById("move-left");
        const misiTextRight = document.getElementById("move-right");
        const visiPosition = visiTextLeft.getBoundingClientRect().top;
        const misiPosition = misiTextRight.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        // Cek apakah elemen berada di dalam viewport
        if (visiPosition < windowHeight && visiPosition > 0) {
            visiTextLeft.classList.add("animate-slideInLeft", "opacity-100");
            visiTextLeft.classList.remove("opacity-0");
        } else {
            // Jika elemen keluar dari viewport, tambahkan animasi keluar
            visiTextLeft.classList.remove("animate-slideInLeft", "opacity-100");
            visiTextLeft.classList.add("opacity-0");
        }

        if (misiPosition < windowHeight && misiPosition > 0) {
            misiTextRight.classList.add("animate-slideInRight", "opacity-100");
            misiTextRight.classList.remove("opacity-0");
        } else {
            misiTextRight.classList.remove("animate-slideInRight", "opacity-100");
            misiTextRight.classList.add("opacity-0");
        }
    });
    document.querySelector('a[href="#tema-tahunan"]').addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    const offset = 60;
    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;

    window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
    });
});
</script>
@endsection