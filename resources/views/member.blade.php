@extends('layout.app')

@section('title', 'Dashboard member')

@section('content')
    <section class="mx-auto max-w-5xl">
        <div class="motion-enter overflow-hidden rounded-[1.75rem] bg-deep p-7 text-white sm:p-10">
            <div class="flex flex-col justify-between gap-8 sm:flex-row sm:items-end">
                <div>
                    <p class="text-sm font-semibold text-[#b9e2e9]">Dashboard <span class="mx-1 text-white/60">/</span> Member</p>
                    <h1 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-4xl">Halo, {{ Auth::user()->name }}.</h1>
                    <p class="mt-3 max-w-xl text-sm leading-6 text-[#e0edf0]">Ini ruang akun member Anda. Informasi akun dan akses yang tersedia ada di bawah.</p>
                </div>
                <div class="rounded-2xl bg-white/10 px-5 py-4 sm:min-w-44">
                    <p class="text-xs font-medium text-[#d5e8ed]">Peran akun</p>
                    <p class="mt-1 text-lg font-semibold">Member</p>
                </div>
            </div>
        </div>

        <div class="motion-enter-late mt-5 grid gap-5 sm:grid-cols-2">
            <section class="rounded-[1.5rem] border border-line bg-white p-6 sm:p-7" aria-labelledby="member-account-title">
                <span class="grid h-11 w-11 place-items-center rounded-xl bg-[#e3f1f4] text-ocean">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path stroke-linecap="round" stroke-linejoin="round" d="M5 21v-2a7 7 0 0 1 14 0v2"/></svg>
                </span>
                <p class="mt-5 text-sm font-semibold text-ocean">Informasi akun</p>
                <h2 id="member-account-title" class="mt-1 text-xl font-semibold">Detail masuk</h2>
                <dl class="mt-5 grid gap-4 border-t border-line pt-4 text-sm sm:grid-cols-[5rem_1fr]">
                    <dt class="font-semibold text-[#405b66]">Nama</dt><dd class="break-words">{{ Auth::user()->name }}</dd>
                    <dt class="font-semibold text-[#405b66]">Email</dt><dd class="break-all">{{ Auth::user()->email }}</dd>
                </dl>
            </section>
            <section class="rounded-[1.5rem] border border-line bg-white p-6 sm:p-7" aria-labelledby="member-access-title">
                <span class="grid h-11 w-11 place-items-center rounded-xl bg-[#fbe9e4] text-coral">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M6 3h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 11h8m-8 4h5"/></svg>
                </span>
                <p class="mt-5 text-sm font-semibold text-coral">Ruang member</p>
                <h2 id="member-access-title" class="mt-1 text-xl font-semibold">Akses saat ini</h2>
                <p class="mt-3 max-w-md text-sm leading-6 text-[#405b66]">Anda masuk dengan peran member. Dashboard ini menampilkan halaman yang tersedia untuk peran tersebut.</p>
            </section>
        </div>
    </section>
@endsection
