@extends('admin.layout')

@section('title', 'Regist Admin')

@section('content')
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Add Admin</h2>
    </div>

    @if (session()->has("error"))
        <div class="alert alert-error">
          {{ session()->get("error") }}
        </div>
    @endif

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route("reg.post") }}" method="POST">
        @csrf
        <div>
          <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
          <div class="mt-2">
            <input id="nama" name="nama"  placeholder="Masukkan Nama Anda" type="text" autocomplete="nama" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-1 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 required:border-red-500">
          </div>
        </div>
        <div>
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
          <div class="mt-2">
            <input id="username" name="username" type="text" placeholder="Masukkan Username Anda" autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-1 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="mt-4 w-full  bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700">Register</button>
        </div>
      </form>

      <button type="submit" onclick="window.location='{{ url('/home/admin') }}'" class=" mt-4 w-full  bg-slate-600 text-white font-semibold py-2 rounded-md hover:bg-slate-700">
            Back
      </button>

      <!-- <button type="submit" onclick="window.location='{{ url('/login') }}'" class=" mt-4 w-full bg-slate-600 text-white font-semibold py-2 rounded-md hover:bg-slate-900">
          Login
      </button> -->

    </div>
  </div>

@endsection