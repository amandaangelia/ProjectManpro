@extends('admin.base')

@section('content')
<style>

    th.sorting::before,th.sorting::after{
        display: none !important;
    }
</style>


<div class="min-h-full">

    <center>
        <div class="pt-24 w-10/12">
            <table id="tableKematians" class="w-full whitespace-nowrap">
                <thead>
                    <tr class="text-left">
                        <th class="border px-6 py-4">No</th>
                        <th class="border px-6 py-4">Nama Lengkap Alm./Almh.</th>
                        <th class="border px-6 py-4">Tanggal Meninggal</th>
                        <th class="border px-6 py-4 w-64 text-wrap">No Telepon Keluarga/Wali</th>
                        <th class="border px-6 py-4">Nama Pemohon</th>
                        <th class="border px-6 py-4">Keterangan</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($kematians as $kematian)
                <tr>
                    <td class="border px-6 py-4">{{ $kematian->id }}</td>
                    <td class="border px-6 py-4">{{ $kematian->namaLengkap}}</td>
                    <td class="border px-6 py-4">{{ date('d F Y', strtotime($kematian->tanggalMeninggal)) }}</td>
                    <td class="border px-6 py-4">+62{{ $kematian->noHp}}</td>
                    <td class="border px-6 py-4">{{ $kematian->namaPemohon}}</td>
                    <td class="border px-6 py-4">{{ $kematian->keterangan}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <script>
                $(document).ready(function () {
                    $('#tableJemaat').DataTable({
                        scrollX: true 
                    });
                });
            </script>
            {{ $kematians->links('vendor.pagination.tailwind') }}
        </div>
    </center>
</div>
@endsection