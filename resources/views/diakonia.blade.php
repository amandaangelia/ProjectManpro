@extends('base.base')


@section('content')

<div class="container m-auto pt-16">
        <h1 class="text-center font-bold mt-10 text-4xl">LAYANAN DIAKONIA</h1>
</div>

<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 gap-8 md:grid-cols-4 text-center">
        
        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl flex flex-col min-h-[300px]">
            <div class="w-full">
                <img src="{{URL::asset('/images/death.jpg')}}" alt="Layanan Penghiburan">
            </div>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">
                Layanan Penghiburan
            </h3>
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                Dalam masa-masa yang penuh duka, kami hadir untuk membawa cahaya kasih Tuhan. Setiap langkah yang Anda tempuh dalam kesedihan tidak perlu dijalani sendirian. Tekan tombol di bawah ini, dan bersama-sama kita akan berjalan dalam penghiburan serta kekuatan yang diberikan oleh kasih-Nya.
            </p>
            <div class="mt-auto pt-5 flex items-center justify-center">
                <a href="/kematian" class="rounded-md bg-indigo-500 hover:bg-indigo-600  px-3 py-3 text-sm font-semibold text-white">
                    Selengkapnya
                </a>
            </div>
        </div>


        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl flex flex-col min-h-[300px]">
            <div class="w-full">
                <img src="{{URL::asset('/images/married.jpg')}}" alt="Layanan Pernikahan">
            </div>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Layanan Pernikahan</h3>
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                Pernikahan adalah wujud kasih Tuhan yang kudus, sebuah ikatan suci yang dipenuhi dengan cinta dan komitmen. Kami siap membantu Anda mempersiapkan momen istimewa ini dengan bimbingan rohani dan dukungan penuh kasih. Tekan tombol di bawah ini untuk mendapatkan panduan dalam perjalanan menuju hari yang penuh berkat.
            </p>
            <div class="mt-auto pt-5 flex items-center justify-center">
                <a href="/pernikahan" class="rounded-md bg-indigo-500 hover:bg-indigo-600 px-3 py-3 text-sm font-semibold text-white">Selengkapnya</a>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl flex flex-col min-h-[300px]">
            <div class="w-full">
                <img src="{{URL::asset('/images/pray.jpg')}}" alt="Permohonan Pokok Doa">
            </div>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Permohonan Pokok Doa</h3>
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                Di saat-saat Anda membutuhkan kekuatan dalam doa, kami siap untuk berjalan bersama Anda dalam iman. Melalui doa yang tulus, kita akan mencari kedamaian dan pengharapan di hadapan Tuhan. Tekan tombol di bawah ini untuk terhubung dengan tim doa kami, dan mari kita bersama-sama menaikkan doa ini dalam kasih-Nya yang tak terbatas.
            </p>
            <div class="mt-auto pt-5 flex items-center justify-center">
                <a href="/pokokdoa" class="rounded-md bg-indigo-500 bg-indigo-500 hover:bg-indigo-600  px-3 py-3 text-sm font-semibold text-white">Selengkapnya</a>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl flex flex-col min-h-[300px]">
            <div class="w-full">
                <img src="{{URL::asset('/images/konseling.jpg')}}" alt="Permohonan Pokok Doa">
            </div>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Permohonan Konseling</h3>
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                Hidup terkadang membawa kita ke jalan yang penuh tantangan dan pertanyaan. Dalam setiap langkah yang penuh makna, kami hadir untuk mendampingi Anda menemukan kedamaian dan arah. Klik tombol di bawah ini untuk terhubung dengan konselor kami yang siap membantu Anda menapaki perjalanan ini dengan penuh pengertian dan kasih.
            </p>
            <div class="mt-auto pt-5 flex items-center justify-center">
                <a href="/konseling" class="rounded-md bg-indigo-500 hover:bg-indigo-600 px-3 py-3 text-sm font-semibold text-white">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
@endsection