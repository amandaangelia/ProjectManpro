@extends('base.base')

@section('content')
<style>
  #alertBox {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #4CAF50;
      color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 1000;
    }

    /* Overlay untuk latar belakang ketika pop-up muncul */
    #overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 999;
    }

    .submit-btn {
      padding: 10px 20px;
      background-color: #4F46E5;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      text-align: center;
    }
    
    .cancel-btn {
      padding: 10px 20px;
      background-color: #ff000f;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      text-align: center;
    }
</style>

  <div class="container m-auto pt-16">
    <h1 class="text-center font-bold mt-10 text-4xl">Layanan Penghiburan</h1>
  </div>
  <div>
    <form action="{{ route('kematian.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-10">
      @csrf
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
          <label for="nama-lengkap" class="block text-sm font-semibold leading-6 text-gray-900">Nama Lengkap Alm./Almh.</label>
          <div class="mt-2.5">
            <input type="text" name="namaLengkap" id="namaLengkap" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="lahir" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Meninggal Dunia</label>
          <div class="mt-2.5">
            <input type="date" name="tanggalMeninggal" id="tanggalKematian" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
      </div>

      <div class="sm:col-span-2 py-2">
          <label for="noHpL" class="block text-sm font-semibold leading-6 text-gray-900">No Telepon Keluarga/Wali</label>
          <div class="mt-2 5">
            <input type="number" name="noHp" id="noHp" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
      </div>

      <div class="sm:col-span-2 py-2">
          <label for="gereja" class="block text-sm font-semibold leading-6 text-gray-900">Nama Lengkap Pemohon</label>
          <div class="mt-2.5">
            <input type="text" name="namaPemohon" id="namaPemohon" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>

        <div class="sm:col-span-2 py-2">
          <label for="gereja" class="block text-sm font-semibold leading-6 text-gray-900">Keterangan Tambahan</label>
          <div class="mt-2.5">
            <input type="text" name="keterangan" id="keterangan" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Cth: Disemayamkan di....">
          </div>
        </div>

      <!-- submit button -->
      <div class="my-8 flex items-center justify-center d-grid gap-8">
        <!-- Show alert after press the button -->
        <button class="cancel-btn">
          <a href="/diakonia">Batal</a>
        </button>

        <button class="submit-btn" onclick="showAlert(event)">Kirim</button>
      </div>

      <!-- alert box -->
      <div id="alertBox" class="mt-3 relative flex flex-col w-auto p-3 text-sm text-white bg-green-600 rounded-md">
        <p class="flex text-base">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 mr-2 mt-0.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path>
            </svg>
            Data telah diterima, terima kasih!
        </p>
      </div>

      <!-- Overlay -->
      <div id="overlay"></div>

      <script>
        function showAlert(event) {
          event.preventDefault();  // Mencegah form dikirim langsung, biar pop-up kelihatan

          document.getElementById('alertBox').style.display = 'block';
          document.getElementById('overlay').style.display = 'block';

          setTimeout(function() {
            document.getElementById('alertBox').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';

            document.querySelector('form').submit();
          }, 5000);
        }
      </script>
    </form>
  </div>
</div>
@endsection