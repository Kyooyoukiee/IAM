@extends('layout.app')

@section('title', 'Dashboard admin')

@section('content')
    <section class="mx-auto max-w-5xl py-2 sm:py-6 md:py-8">
        <div class="motion-enter grid gap-8 border-b-2 border-ink pb-8 sm:grid-cols-[1fr_auto] sm:items-end sm:gap-12 sm:pb-10">
            <div>
                <p class="text-sm font-semibold text-signal">Dashboard <span class="mx-1 text-line">/</span> Admin</p>
                <h1 class="mt-4 font-editorial text-4xl leading-tight tracking-tight sm:text-5xl">Selamat datang, {{ Auth::user()->name }}.</h1>
                <p class="mt-3 max-w-xl text-base leading-7 text-[#4b514f]">Ini adalah ruang akun admin. Gunakan navigasi di atas untuk kembali ke beranda atau keluar.</p>
            </div>
            <div class="border-l-2 border-signal pl-4 sm:min-w-48">
                <p class="text-xs font-semibold text-[#4b514f]">Peran akun</p>
                <p class="mt-1 font-editorial text-2xl">Administrator</p>
            </div>
        </div>

        <div class="motion-enter-late grid gap-0 sm:grid-cols-2 sm:divide-x sm:divide-line">
            <div class="py-6 sm:pr-8 sm:py-8">
                <p class="text-xs font-semibold text-signal">Informasi akun</p>
                <h2 class="mt-2 font-editorial text-2xl">Detail masuk</h2>
                <dl class="mt-5 grid gap-4 border-t border-line pt-4 text-sm sm:grid-cols-[7rem_1fr]">
                    <dt class="font-semibold text-[#4b514f]">Nama</dt><dd class="break-words">{{ Auth::user()->name }}</dd>
                    <dt class="font-semibold text-[#4b514f]">Email</dt><dd class="break-all">{{ Auth::user()->email }}</dd>
                </dl>
            </div>
            <div class="border-t border-line py-6 sm:border-t-0 sm:pl-8 sm:py-8">
                <p class="text-xs font-semibold text-signal">Ruang admin</p>
                <h2 class="mt-2 font-editorial text-2xl">Akses saat ini</h2>
                <p class="mt-3 max-w-md text-sm leading-6 text-[#4b514f]">Anda masuk dengan peran admin. Dashboard ini menampilkan halaman yang tersedia untuk peran tersebut.</p>
            </div>
        </div>
    </section>
@endsection
