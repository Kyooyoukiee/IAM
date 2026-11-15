@extends('layout.app')

@section('title', 'Akses dibatasi')

@section('content')
    <section class="mx-auto grid max-w-5xl gap-6 py-4 sm:gap-10 sm:py-10 md:grid-cols-[auto_1fr] md:gap-12">
        <svg class="h-14 w-14 text-signal" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><circle cx="24" cy="24" r="19"/><path stroke-linecap="square" d="M24 14v13"/><circle cx="24" cy="34" r="1" fill="currentColor" stroke="none"/></svg>
        <div class="motion-enter max-w-2xl border-t-2 border-ink pt-5">
            <p class="text-sm font-semibold text-signal">Ruang Akses <span class="mx-1 text-line">/</span> Batas akses</p>
            <h1 class="mt-4 font-editorial text-4xl leading-tight tracking-tight sm:text-5xl">Halaman ini tidak tersedia untuk peran akun Anda.</h1>
            <p class="mt-4 max-w-xl text-base leading-7 text-[#4b514f]">Kembali ke beranda untuk melihat informasi akses atau buka dashboard jika peran akun Anda sudah terdaftar.</p>
            <a href="/" class="motion-zoom mt-7 inline-flex min-h-12 items-center rounded-md bg-signal px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#842f20] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-signal active:bg-[#672519]">Kembali ke beranda</a>
        </div>
    </section>
@endsection
