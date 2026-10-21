@extends('layouts.main')

@section('title', 'Hubungi Kami')

@section('content')
    <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200">
        <h1 class="text-3xl font-extrabold text-slate-900 mb-3">Halaman Kontak</h1>
        <p class="text-slate-600 mb-6">Silakan hubungi kami melalui formulir di bawah ini:</p>
        
        <form class="space-y-4 max-w-md">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Nama</label>
                <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Nama lengkap">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Pesan</label>
                <textarea rows="3" class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Tulis pesan..."></textarea>
            </div>
            <button type="button" class="bg-indigo-600 text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700">Kirim Pesan</button>
        </form>
    </div>
@endsection