@extends('admin.layout')

@section('title', 'Login Admin')

@section('content')
   
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login Admin</h2>
  </div>
    
  <!-- <div class="mt-20">
      @if (session()->has("success"))
      <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
        <span class="inline-block align-middle mr-8">
          <b class="capitalize">{{ session('success') }}</b>
        </span>

        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
          <span>×</span>
        </button>
      </div>
      <script>
        function closeAlert(event){
          let element = event.target;
          while(element.nodeName !== "BUTTON"){
            element = element.parentNode;
          }
          element.parentNode.parentNode.removeChild(element.parentNode);
        }
      </script>
      @endif

      @if (session()->has('loginError'))
        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
          <span class="inline-block align-middle mr-8">
            <b class="capitalize">{{ session('loginError') }}</b>
          </span>
          <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
            <span>×</span>
        
          </button>
        </div>
        <script>
          function closeAlert(event){
            let element = event.target;
            while(element.nodeName !== "BUTTON"){
              element = element.parentNode;
            }
            element.parentNode.parentNode.removeChild(element.parentNode);
          }
        </script>
      @endif
  </div> -->

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('login.post') }}" method="POST">
        @csrf
        <div>
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900 is-invalid">Username</label>
             <div class="mt-2">
            <input id="username" name="username" placeholder="Username"  autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-1 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password"  class="block text-sm font-medium leading-6 text-gray-900">Kata Sandi</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-blue-600 hover:text-blue-400">Lupa Kata Sandi?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="mt-4 w-full  bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-800">Sign in</button>
        </div>
      </form>
      
      <button type="submit" onclick="window.location='{{ url('/') }}'" class=" mt-4 w-full  bg-slate-600 text-white font-semibold py-2 rounded-md hover:bg-slate-700">
            Back
        </button>
    </div>
  

</div>
@endsection