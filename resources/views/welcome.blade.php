@extends('layout.app')

@section('title', 'Beranda')

@section('content')
    <section class="mx-auto grid max-w-6xl gap-10 pb-8 pt-1 md:grid-cols-[1.15fr_0.85fr] md:items-center md:gap-14 md:pb-12 md:pt-6">
        <div class="motion-enter max-w-2xl">
            <p class="text-sm font-semibold text-signal">Sistem IAM <span class="mx-1 text-line">/</span> Ruang Akses</p>
            <h1 class="mt-5 font-editorial text-5xl leading-[1.02] tracking-[-0.04em] text-ink sm:text-6xl lg:text-7xl">Satu akun, <span class="text-signal">akses sesuai peran.</span></h1>
            <p class="mt-6 max-w-xl text-base leading-7 text-[#4b514f] sm:text-lg sm:leading-8">Masuk untuk membuka dashboard sesuai peran akun. Belum punya akun? Daftar sebagai member, lalu masuk untuk melanjutkan.</p>

            <div class="mt-8 flex flex-col gap-3 min-[420px]:flex-row">
                @guest
                    <a href="/register" class="motion-zoom inline-flex min-h-12 items-center justify-center rounded-md bg-signal px-6 text-sm font-semibold text-white transition hover:bg-[#842f20] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-signal active:bg-[#672519]">Buat akun member</a>
                    <a href="/login" class="motion-zoom inline-flex min-h-12 items-center justify-center rounded-md border border-ink px-6 text-sm font-semibold text-ink transition hover:bg-ink hover:text-paper focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-signal active:bg-[#3d4540]">Masuk</a>
                @endguest
                @auth
                    <a href="/dashboard" class="motion-zoom inline-flex min-h-12 items-center justify-center rounded-md bg-signal px-6 text-sm font-semibold text-white transition hover:bg-[#842f20] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-signal active:bg-[#672519]">Buka dashboard</a>
                @endauth
            </div>
        </div>

        <aside class="motion-enter-late rounded-xl border border-line bg-[#e9e4d9] p-5 sm:p-7" aria-labelledby="role-list-title">
            <div class="flex items-end justify-between gap-4 pb-5">
                <div>
                    <p class="text-xs font-semibold text-signal">Dua jenis akses</p>
                    <h2 id="role-list-title" class="mt-2 font-editorial text-2xl tracking-tight sm:text-3xl">Pilih sesuai peran</h2>
                </div>
                <svg class="mb-1 h-7 w-7 shrink-0 text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="square" stroke-linejoin="miter" d="M12 3 5 6v5c0 4.5 2.9 7.8 7 10 4.1-2.2 7-5.5 7-10V6l-7-3Z"/><path stroke-linecap="square" stroke-linejoin="miter" d="m9 12 2 2 4-4"/></svg>
            </div>

            <div class="grid gap-0">
                <div class="grid grid-cols-[minmax(6rem,0.7fr)_1.3fr] gap-4 border-t border-line py-5 sm:gap-6">
                    <h3 class="font-editorial text-xl text-signal">Member</h3>
                    <p class="text-sm leading-6 text-[#4b514f]">Akun baru mendapat peran member dan diarahkan ke dashboard member setelah masuk.</p>
                </div>
                <div class="grid grid-cols-[minmax(6rem,0.7fr)_1.3fr] gap-4 border-t border-line py-5 sm:gap-6">
                    <h3 class="font-editorial text-xl text-signal">Admin</h3>
                    <p class="text-sm leading-6 text-[#4b514f]">Akun dengan peran admin akan membuka dashboard admin setelah masuk.</p>
                </div>
            </div>
        </aside>
    </section>
@endsection
