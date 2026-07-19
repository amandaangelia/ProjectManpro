@extends('admin.base')

@section('title', 'View Pernikahan')

@section('content')

<div class="min-h-full">
    <br>

    <div class="pt-20 w-3/5 max-w-full mx-auto">
        <h1 class="text-2xl font-bold text-center">Data Pernikahan</h1>
    </div>

    <br>

    <center>
        <div class="py-4 w-10/12">
            <table id="tablePernikahan" class="display nowrap w-full whitespace-nowrap">
                <thead>
                    <tr class="text-left">
                        <th class="border px-6 py-4">Tanggal Pernikahan</th>
                        <th class="border px-6 py-4">Nama Laki-Laki</th>
                        <th class="border px-6 py-4">Nama Perempuan</th>
                        <th class="border px-6 py-4">Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($weddings as $wedding)
                    <tr>
                        <td class="border px-6 py-4">{{ date('d F Y', strtotime($wedding->tanggalPernikahan)) }}</td>
                        <td class="border px-6 py-4">{{ $wedding->namaL}}</td>
                        <td class="border px-6 py-4">{{ $wedding->namaP}}</td>
                        <td class="border px-6 py-4">
                    
                        <button type="submit" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-800">
                            <a href="/pernikahan/view/{{$wedding->id}}" >Details</a>
                        </button>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                $(document).ready(function () {
                    $('#tablePernikahan').DataTable({
                        scrollX: true,
                        autoWidth: false,
                        columnDefs: [
                            { targets: '_all', className: 'align-middle' }
                        ]
                    });
                });
            </script>
            {{ $weddings->links('vendor.pagination.tailwind') }}
        </div>
    </center>

</div>
@endsection