@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
    <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200">
        <h1 class="text-3xl font-extrabold text-slate-900 mb-3">Selamat Datang di Beranda</h1>
        <p class="text-slate-600 leading-relaxed">
            Halaman ini dibangun dengan konsep arsitektur Laravel: Routing mengarahkan ke Controller, lalu Controller menampilkan view Blade ini.
        </p>
    </div>
@endsection