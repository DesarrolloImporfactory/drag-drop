@extends('layouts.templates.page')
@section('title', 'Iniciar sesión')
@section('content')
   <section class="grid place-content-center h-screen  items-center bg-gray-100">
    <article class="max-w-[280px] " >
        <img src="{{asset('images/builder.png')}}" alt="builder">
    </article>
    <article class="rounded-3xl shadow-xl border-4 border-t-blue-400 px-5 py-5 bg-white">

        <form action="{{ route('login') }}" method="post" class="grid gap-4">
            @csrf
            <h1 class="text-2xl font-bold text-center">Iniciar sesión</h1>
            <input type="email" name="email" placeholder="Correo electrónico" class="p-2 border border-gray-300 rounded">
            <input type="password" name="password" placeholder="Contraseña" class="p-2 border border-gray-300 rounded">
            <button type="submit" class="p-2 bg-blue-500 text-white rounded-2xl">Iniciar sesión</button>
        </form>
    </article>
    </section>
@endsection

