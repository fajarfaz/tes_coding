<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nur Fajar Faizurrosyid</title>
  <meta name="description" content="Instalasi Teknologi Komunikasi dan Informasi ">
  <meta name="keywords" content="ITKI, RSDS">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <!-- Styles -->


  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>
<body class="antialiased">
        <!-- <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif            
          </div> -->
          <div class="w-max-7xl bg-gray-200 h-min-screen h-screen relative flex flex-col justify-between text-gray-700 ">
            <div class="bg-purple-400 text-white text-center w-full font-semibold text-2xl py-5 top-0">HEADER</div>
            <div class="grid grid-cols-4 gap-4 px-4 my-8 tracking-wider ">
              <div class="bg-white rounded-lg flex flex-col px-4 space-y-2 py-7">
                <a href="" class="bg-blue-400 text-white w-full px-4 py-1.5"> Form Input </a>
                <a href="" class="bg-blue-400 text-white w-full px-4 py-1.5"> lorem </a>
              </div>
              <div class="col-span-3 bg-white rounded-lg px-5 py-3">
                <label class="font-bold text-2xl">INPUT</label>
                @if (session('success'))
                <div class="text-green-500">
                  <p>{{ session('success') }}</p>
                </div>
                @endif

                @if ($errors->any())
                <div class="text-red-500">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <form method="POST" action="{{ url('app-table') }}">
                  @csrf
                  <div class="grid-rows-2 grid gap-4 pt-4 pb-8">
                    <div class="flex flex-col w-min">
                      <label>First Name :</label>
                      <input type="text" name="firstname" class="border border-gray-400 bg-gray-100 py-0.5 px-2 rounded-md">
                    </div>
                    <div class="flex flex-col w-min">
                      <label>Last Name :</label>
                      <input type="text" name="lastname" class="border border-gray-400 bg-gray-100 py-0.5 px-2 rounded-md">
                    </div>
                    <button type="submit" class="border rounded-md w-min px-5 py-1.5 tracking-wider bg-blue-400 text-white font-semibold">Submit</button>
                  </div>  
                </form>   
                <label class="font-bold text-2xl">HASIL</label>
                <table class="table-auto border w-full  mt-2">
                  <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b-2 border-gray-600 ">
                      <th class="px-4 py-2 border">First Name</th>
                      <th class="px-4 py-2 border">last Name</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach($posts as $post)
                   <tr>
                    <td class="px-4 py-2 border">{{ $post->firstname }}</td>
                    <td class="px-4 py-2 border">{{ $post->lastname }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>               
            </div>
          </div>
          <div class="bg-blue-400 text-white text-center w-full font-semibold text-2xl py-5 bottom-0 -mt-2">FOOTER</div>
        </div>
      </div>
    </body>
    </html>
