@extends('layout.app')

@section('title', 'Dashboard admin')

@section('content')
    <section class="mx-auto max-w-5xl">
        <div class="motion-enter overflow-hidden rounded-[1.75rem] bg-ocean p-7 text-white sm:p-10">
            <div class="flex flex-col justify-between gap-8 sm:flex-row sm:items-end">
                <div>
                    <p class="text-sm font-semibold text-[#d5f0f4]">Dashboard <span class="mx-1 text-white/60">/</span> Admin</p>
                    <h1 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-4xl">Selamat datang, {{ Auth::user()->name }}.</h1>
                    <p class="mt-3 max-w-xl text-sm leading-6 text-white/90">Ini ruang akun admin. Informasi akun dan akses yang tersedia ada di bawah.</p>
                </div>
                <div class="rounded-2xl bg-white/10 px-5 py-4 sm:min-w-44">
                    <p class="text-xs font-medium text-white/85">Peran akun</p>
                    <p class="mt-1 text-lg font-semibold">Administrator</p>
                </div>
            </div>
        </div>

        <div class="motion-enter-late mt-5 grid gap-5 sm:grid-cols-2">
            <section class="rounded-[1.5rem] border border-line bg-white p-6 sm:p-7" aria-labelledby="admin-account-title">
                <span class="grid h-11 w-11 place-items-center rounded-xl bg-[#e3f1f4] text-ocean">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path stroke-linecap="round" stroke-linejoin="round" d="M5 21v-2a7 7 0 0 1 14 0v2"/></svg>
                </span>
                <p class="mt-5 text-sm font-semibold text-ocean">Informasi akun</p>
                <h2 id="admin-account-title" class="mt-1 text-xl font-semibold">Detail masuk</h2>
                <dl class="mt-5 grid gap-4 border-t border-line pt-4 text-sm sm:grid-cols-[5rem_1fr]">
                    <dt class="font-semibold text-[#405b66]">Nama</dt><dd class="break-words">{{ Auth::user()->name }}</dd>
                    <dt class="font-semibold text-[#405b66]">Email</dt><dd class="break-all">{{ Auth::user()->email }}</dd>
                </dl>
            </section>
            <section class="rounded-[1.5rem] border border-line bg-white p-6 sm:p-7" aria-labelledby="admin-access-title">
                <span class="grid h-11 w-11 place-items-center rounded-xl bg-[#fbe9e4] text-coral">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.5 2.9 7.8 7 10 4.1-2.2 7-5.5 7-10V6l-7-3Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6"/></svg>
                </span>
                <p class="mt-5 text-sm font-semibold text-coral">Ruang admin</p>
                <h2 id="admin-access-title" class="mt-1 text-xl font-semibold">Akses saat ini</h2>
                <p class="mt-3 max-w-md text-sm leading-6 text-[#405b66]">Anda masuk dengan peran admin. Dashboard ini menampilkan halaman yang tersedia untuk peran tersebut.</p>
            </section>
        </div>
    </section>
@endsection
