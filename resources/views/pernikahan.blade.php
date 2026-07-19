@extends('base.base')

@section('content')
@include('components.swallalert')

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
    <h1 class="text-center font-bold mt-10 text-4xl">Layanan Pernikahan</h1>
  </div>


  <form id="pernikahan-form" onsubmit="return confirmDialog(event)" action="{{ route('pernikahan.post') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-10">
    @csrf
    <div class="px-7 sm:px-0">

      <center>
      <h2 class="text-xl font-bold text-gray-900 mb-4">Data Perempuan</h2>
      </center>

        <div class="sm:col-span-2 pb-2">
          <label for="namaP" class="block text-sm font-semibold leading-6 text-gray-900">Nama Lengkap Perempuan</label>
          <div class="mt-1.5">
            <input type="text" name="namaP" id="namaP" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="tempatLahirP" class="block text-sm font-semibold leading-6 text-gray-900">Tempat Lahir Perempuan</label>
          <div class="mt-1.5">
            <input type="text" name="tempatLahirP" id="tempatLahirP" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="tanggalLahirP" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Lahir Perempuan</label>
          <div class="mt-1.5">
            <input type="date" name="tanggalLahirP" id="tanggalLahirP" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="gerejaP" class="block text-sm font-semibold leading-6 text-gray-900">Asal Gereja Perempuan</label>
          <div class="mt-1.5">
            <input type="text" name="gerejaP" id="gerejaP" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="noHpP" class="block text-sm font-semibold leading-6 text-gray-900">No Telepon Perempuan</label>
          <div class="mt-1.5">
            <input type="number" name="noHpP" id="noHpP" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="alamatP" class="block text-sm font-semibold leading-6 text-gray-900">Alamat Perempuan</label>
          <div class="mt-1.5">
            <input type="text" name="alamatP" id="alamatP" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <fieldset class="mb-4">
          <label for="menikahP" class="block text-sm font-semibold leading-6 text-gray-900">Pernah Menikah Sebelumnya</label>
            
          <div class="flex space-x-4">
              <label class="flex items-center">
                  <input type="radio" name="menikahP" value="yes" required class="mr-2">
                  Yes
              </label>
              
              <label class="flex items-center">
                  <input type="radio" name="menikahP" value="no" required class="mr-2">
                  No
              </label>
          </div>
        </fieldset>
        
    </div>

    <hr>

    <div class="px-7 sm:px-0 pt-4">
        <center>
        <h2 class="text-xl font-bold text-gray-900 mb-4">Data Laki-Laki</h2>
        </center>

        <div class="sm:col-span-2 pb-2">
          <label for="namaL" class="block text-sm font-semibold leading-6 text-gray-900">Nama Lengkap Laki-Laki</label>
          <div class="mt-1.5">
          <input type="text" name="namaL" id="namaL" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="tempatLahirL" class="block text-sm font-semibold leading-6 text-gray-900">Tempat Lahir Laki-Laki</label>
          <div class="mt-1.5">
            <input type="text" name="tempatLahirL" id="tempatLahirL" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="tanggalLahirL" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Lahir Laki-Laki</label>
          <div class="mt-1.5">
            <input type="date" name="tanggalLahirL" id="tanggalLahirL" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="gerejaL" class="block text-sm font-semibold leading-6 text-gray-900">Asal Gereja Laki-Laki</label>
          <div class="mt-1.5">
          <input type="text" name="gerejaL" id="gerejaL" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="noHpL" class="block text-sm font-semibold leading-6 text-gray-900">No Telepon Laki-Laki</label>
            <input type="number" name="noHpL" id="noHpL" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

        <div class="sm:col-span-2 pb-2">
          <label for="alamatL" class="block text-sm font-semibold leading-6 text-gray-900">Alamat Laki-Laki</label>
          <div class="mt-1.5">
            <input type="text" name="alamatL" id="alamatL" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <fieldset class="mb-4">
          <label for="menikahL" class="block text-sm font-semibold leading-6 text-gray-900">Pernah Menikah Sebelumnya</label>
            
          <div class="flex space-x-4">
              <label class="flex items-center">
                  <input type="radio" name="menikahL" value="yes" required class="mr-2">
                  Yes
              </label>
              
              <label class="flex items-center">
                  <input type="radio" name="menikahL" value="no" required class="mr-2">
                  No
              </label>
          </div>
        </fieldset>
        
    </div>

    <hr class="mt-4">

        <div class="mt-7 px-7 sm:px-0">
          <label for="tanggalPernikahan" class="block text-sm font-semibold leading-6 text-gray-900">Rencana Tanggal Pernikahan</label>
          <div class="mt-1.5">
            <input type="date" name="tanggalPernikahan" id="tanggalPernikahan" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>


        <!-- <div class="flex items-center my-4">
          <input id="default-checkbox" name="allow" type="checkbox" value="yes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-checkbox" class="ms-2 text-sm font-semibold text-red-600 dark:text-red-600">Menampilkan informasi pernikahan di halaman informasi</label>
        </div> -->


    <!-- submit button -->
    <div class="my-8 flex items-center justify-center d-grid gap-8">
        <!-- Show alert after press the button -->
      <button class="cancel-btn">
        <a href="/diakonia">Back</a>
      </button>

      <button type="submit" class="submit-btn">Submit</button>
    </div>

    <!-- alert box -->
    <div id="alertBox" class="mt-3 relative flex flex-col w-full p-3 text-sm text-white bg-green-600 rounded-md">
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
        // menampilkan pop-up
        function showAlert() {
            document.getElementById('alertBox').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';

            // Menghilangkan pop-up setelah 3 detik
            setTimeout(function() {
                document.getElementById('alertBox').style.display = 'none';
                document.getElementById('overlay').style.display = 'none';
            }, 3000);
        }
      </script> 
  </form>

  </div>
</div>

    
<script>
    function confirmDialog(event) {
        event.preventDefault();
        
        var namaP = document.getElementById('namaP').value;
        var namaL = document.getElementById('namaL').value;

        if(namaP && namaL){
          document.getElementById('pernikahan-form').submit();
        }else{
          alert('kosong');
        }
    }
</script>
@endsection