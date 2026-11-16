@extends('layout.app')

@section('title', 'Akses dibatasi')

@section('content')
    <section class="mx-auto grid max-w-5xl gap-6 py-4 sm:grid-cols-[auto_1fr] sm:items-start sm:gap-8 sm:py-10">
        <span class="grid h-14 w-14 place-items-center rounded-2xl bg-[#fbe9e4] text-coral">
            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" d="M12 7v6"/><circle cx="12" cy="16.5" r=".75" fill="currentColor" stroke="none"/></svg>
        </span>
        <div class="motion-enter rounded-[1.75rem] border border-line bg-white p-6 sm:p-9">
            <p class="text-sm font-semibold text-coral">Ruang Akses <span class="mx-1 text-[#829ca5]">/</span> Batas akses</p>
            <h1 class="mt-4 max-w-2xl text-3xl font-semibold leading-tight tracking-tight sm:text-4xl">Halaman ini tidak tersedia untuk peran akun Anda.</h1>
            <p class="mt-4 max-w-xl text-base leading-7 text-[#405b66]">Kembali ke beranda untuk melihat informasi akses atau buka dashboard jika peran akun Anda sudah terdaftar.</p>
            <a href="/" class="motion-zoom mt-7 inline-flex min-h-12 items-center rounded-xl bg-coral px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#963b2a] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-coral active:bg-[#7d3022]">Kembali ke beranda</a>
        </div>
    </section>
@endsection
