@extends('layouts.appp')

@section('title', 'Login')

@section('content')
    <style>
        body {
            background-color: black;

        }
        .m{
       margin-left: 25%;
            width: 50%;
            height: 50%;

        }


    </style>

    <div style="background: rgba(255, 255, 255, 0.6) "
          class="block mx-auto my-12 p-8  w-1/3 border border-gray-200
    round-lg shadow-lg" >
        <h1 class="text-3xl text-center font-bold">INICAR SESION</h1>
        <div class="ima" >
            <img class="m offset-2" src=" https://cdn-icons-png.flaticon.com/512/1000/1000946.png">
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">

            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">

            @error('message')

            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">El correo y la contraseña son requeridos</p>
            @enderror


            <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-indigo-600">Registrar</button>
        </form>
    </div>

@endsection


