@extends('admin.base')
@section('content')
<div class="min-h-full">

    <br>
    <br>
    <br>
    <div class="py-10 w-3/5 max-w-full mx-auto">
        <a href="/admin/addevent">
            <button type="submit" class="w-full bg-[#125098] text-white font-semibold py-2 rounded-md  hover:bg[#113257] shadow-md">
                ADD Event
            </button> 
        </a>
    </div>



    <div class="ml-10 py-4 w-10/12">
        <table id="tableJemaat" class="w-full whitespace-nowrap">
            <thead>
                <tr class="text-left">
                    <th class="border px-6 py-4">No</th>
                    <th class="border px-6 py-4">Nama Kegiatan</th>
                    <th class="border px-6 py-4">Hari Kegiatan</th>
                    <th class="border px-6 py-4 w-64 text-wrap">Pembicara</th>
                    <th class="border px-6 py-4">Tanggal Kegiatan</th>
                    <th class="border px-6 py-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                        <td class="border px-6 py-4">{{ $event->id }}</td>
                        <td class="border px-6 py-4">{{ $event->title}}</td>
                        <td class="border px-6 py-4">{{ $event->days}}</td>
                        <td class="border px-6 py-4">{{ $event->speaker}}</td>
                        <td class="border px-6 py-4">{{ date('d F Y', strtotime($event->date)) }}</td>
                        <td class="border px-6 py-4">
                            <form id="checkin-form-{{ $event->id }}" action="{{ route('event.edit', $event->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</button>
                            </form>
                            <form id="delete-form-{{ $event->id }}" action="{{ route('event.delete', $event->id) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>

    @endforeach

    {{-- @foreach ($renungans as $renungan)

        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl w-80 flex flex-col">
            

            <h5 class="text-slate-700 font-bold text-xl mt-2 py-2">{{ $renungan->judul }}</h5>
            <h6 class="text-slate-700 font-bold my-1">Renungan Oleh: {{ $renungan->pembuat }}</h6>
            <p class="text-center text-slate-500 my-1">
                {{ Str::limit($renungan->isiRenungan, 200) }}
            </p>
            
            <div class="mt-auto pt-5 flex items-center justify-center">
                <a href="/renungan/{{$renungan->id  }}" class="rounded-md bg-indigo-500 hover:bg-indigo-600 px-3 py-3 text-sm font-semibold text-white">Klik untuk membaca!</a>
            </div>
        </div>
        @endforeach --}}
</div>
@endsection

