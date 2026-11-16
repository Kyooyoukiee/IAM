@extends('layout.app')

@section('title', 'Beranda')

@section('content')
    <section class="mx-auto grid max-w-6xl gap-5 md:grid-cols-[1.05fr_0.95fr] md:gap-6">
        <div class="motion-enter flex min-h-[24rem] flex-col justify-between rounded-[1.75rem] bg-deep p-7 text-white sm:min-h-[27rem] sm:p-10">
            <div>
                <p class="flex items-center gap-2 text-sm font-medium text-[#b9e2e9]">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.5 2.9 7.8 7 10 4.1-2.2 7-5.5 7-10V6l-7-3Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/></svg>
                    Portal akun Ruang Akses
                </p>
                <h1 class="mt-7 max-w-xl text-4xl font-semibold leading-[1.08] tracking-[-0.04em] sm:text-5xl lg:text-6xl">Masuk ke ruang yang sesuai <span class="text-[#8fd1dd]">peranmu.</span></h1>
                <p class="mt-5 max-w-lg text-base leading-7 text-[#d5e8ed]">Satu akun membawamu ke dashboard member atau admin. Belum terdaftar? Buat akun member lalu masuk untuk melanjutkan.</p>
            </div>

            <div class="mt-8 flex flex-col gap-3 min-[420px]:flex-row">
                @guest
                    <a href="/register" class="motion-zoom inline-flex min-h-12 items-center justify-center rounded-xl bg-coral px-5 text-sm font-semibold text-white transition hover:bg-[#963b2a] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:bg-[#7d3022]">Buat akun member</a>
                    <a href="/login" class="inline-flex min-h-12 items-center justify-center rounded-xl border border-white/40 px-5 text-sm font-semibold text-white transition hover:bg-white hover:text-deep focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:bg-[#d5e8ed]">Saya sudah punya akun</a>
                @endguest
                @auth
                    <a href="/dashboard" class="motion-zoom inline-flex min-h-12 items-center justify-center rounded-xl bg-coral px-5 text-sm font-semibold text-white transition hover:bg-[#963b2a] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:bg-[#7d3022]">Buka dashboard</a>
                @endauth
            </div>
        </div>

        <aside class="motion-enter-late flex flex-col rounded-[1.75rem] border border-line bg-white p-6 sm:p-8" aria-labelledby="role-list-title">
            <div class="flex items-start justify-between gap-4 border-b border-line pb-5">
                <div>
                    <p class="text-sm font-semibold text-ocean">Akses berdasarkan peran</p>
                    <h2 id="role-list-title" class="mt-2 text-2xl font-semibold tracking-tight sm:text-3xl">Pilih ruangmu</h2>
                </div>
                <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-[#e3f1f4] text-ocean">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="3"/><path stroke-linecap="round" d="M8 9h8M8 13h4"/></svg>
                </span>
            </div>

            <div class="grid flex-1 content-center">
                <div class="flex items-start gap-4 border-b border-line py-5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-[#e3f1f4] text-ocean">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path stroke-linecap="round" stroke-linejoin="round" d="M5 21v-2a7 7 0 0 1 14 0v2"/></svg>
                    </span>
                    <div><h3 class="text-base font-semibold">Member</h3><p class="mt-1 text-sm leading-6 text-[#405b66]">Akun baru mendapat akses ke dashboard member.</p></div>
                </div>
                <div class="flex items-start gap-4 py-5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-[#fbe9e4] text-coral">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.5 2.9 7.8 7 10 4.1-2.2 7-5.5 7-10V6l-7-3Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6"/></svg>
                    </span>
                    <div><h3 class="text-base font-semibold">Admin</h3><p class="mt-1 text-sm leading-6 text-[#405b66]">Akun dengan peran admin membuka dashboard admin.</p></div>
                </div>
            </div>

            <p class="rounded-xl bg-mist px-4 py-3 text-xs leading-5 text-[#405b66]">Pendaftaran di halaman ini membuat akun member. Setelah berhasil, masuk menggunakan email dan kata sandi yang sama.</p>
        </aside>
    </section>
@endsection
