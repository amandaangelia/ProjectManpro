<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPPS Mahanaim Surabaya</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <!-- jquery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- jQuery (necessary for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

     @vite('resources/css/app.css') 
</head>

<body class="h-full">   
    <!-- navbar -->
    <div class="navbar fixed top-0 bg-[#125098] shadow-lg md:py-1 z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="/home/admin" class="rounded-md hover:bg-[#113257]">Home</a></li>
                    <li><a href="/dataJemaat" class="rounded-md hover:bg-[#113257]">Data Jemaat</a></li>
                    <li><a href="/pernikahan/admin" class="rounded-md hover:bg-[#113257]">Pernikahan</a></li>
                    <li><a href="/kematian/show" class="rounded-md hover:bg-[#113257]">Kematian</a></li>
                    <li><a href="/admin/addevent" class="rounded-md hover:bg-[#113257]">Event</a></li>
                    <li><a href="/admin/renungan" class="rounded-md hover:bg-[#113257]">Renungan</a></li>
                    @if (Auth::user())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a></li>
                    </form>
                   @else
                    <li><a href="/login">Login</a></li>
                    @endif
                    <li><a href="/registrasi">Add Admin</a></li>
                </ul>
            </div>
            <a href="/home/admin" class="w-16 ml-3 md:w-20 md:ml-10 text-lg font-bold text-white">
                MAHANAIM
            </a>
            <!-- <img src="/logo.png" alt="" class="w-16 ml-3 md:w-20 md:ml-20"> -->
        </div>
            <div class="navbar-center hidden lg:flex text-sm font-semibold text-white">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/home/admin" class="rounded-md hover:bg-[#113257]">Home</a></li>
                    <li><a href="/jemaat" class="rounded-md hover:bg-[#113257]">Data Jemaat</a></li>
                    <li><a href="/pernikahan/admin" class="rounded-md hover:bg-[#113257]">Pernikahan</a></li>
                    <li><a href="/kematian/show" class="rounded-md hover:bg-[#113257]">Kematian</a></li>
                    <li><a href="/admin/event" class="rounded-md hover:bg-[#113257]"> Add Event</a></li>
                    <li><a href="/admin/renungan" class="rounded-md hover:bg-[#113257]">Renungan</a></li>
                    <li><a href="/registrasi" class="rounded-md hover:bg-[#113257]">Add Admin</a></li>
                    @if (Auth::user())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="rounded-md hover:bg-[#113257]">Logout</a></li>
                    </form>
                    @else
                    <li><a href="/login">Login</a></li>
                    @endif
                </ul>
            </div>
    
        <div class="navbar-end">
           
        </div>
    </div>
   
    <div class="">
      @yield('content')
    </div>

</body>

</html>

