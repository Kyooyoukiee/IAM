@extends('layout.app')

@section('title', 'Masuk')

@section('content')
    <section class="mx-auto grid max-w-5xl gap-5 md:grid-cols-[0.9fr_1.1fr] md:gap-6">
        <div class="motion-enter flex flex-col justify-between rounded-[1.75rem] bg-ocean p-7 text-white sm:p-9">
            <div>
                <p class="text-sm font-semibold text-[#d5f0f4]">Ruang Akses <span class="mx-1 text-white/60">/</span> Masuk</p>
                <h1 class="mt-6 text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">Lanjutkan dari akunmu.</h1>
                <p class="mt-4 text-base leading-7 text-white/90">Masuk dengan email dan kata sandi yang kamu gunakan saat mendaftar.</p>
            </div>
            <div class="mt-10 border-t border-white/25 pt-5">
                <p class="text-sm font-semibold">Setelah masuk</p>
                <p class="mt-2 text-sm leading-6 text-white/85">Dashboard member atau admin terbuka mengikuti peran yang tercatat pada akun.</p>
            </div>
        </div>

        <div class="motion-enter-late rounded-[1.75rem] border border-line bg-white p-6 sm:p-9">
            <div class="mb-7">
                <p class="text-sm font-semibold text-ocean">Akun terdaftar</p>
                <h2 class="mt-2 text-2xl font-semibold tracking-tight">Masuk ke sistem</h2>
                <p class="mt-1 text-sm text-[#405b66]">Isi detail akun Anda di bawah ini.</p>
            </div>
            <form action="/login" method="POST" class="space-y-5" novalidate>
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-deep">Alamat email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" placeholder="nama@email.com" class="min-h-12 w-full rounded-xl border border-[#7d9aa4] bg-white px-4 py-3 text-sm text-deep outline-none transition placeholder:text-[#526c76] focus:border-ocean focus:ring-2 focus:ring-ocean/20">
                    @error('email')<p class="mt-2 text-sm font-semibold text-[#973b2c]">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold text-deep">Kata sandi</label>
                    <input type="password" name="password" id="password" required autocomplete="current-password" placeholder="Masukkan kata sandi" class="min-h-12 w-full rounded-xl border border-[#7d9aa4] bg-white px-4 py-3 text-sm text-deep outline-none transition placeholder:text-[#526c76] focus:border-ocean focus:ring-2 focus:ring-ocean/20">
                    @error('password')<p class="mt-2 text-sm font-semibold text-[#973b2c]">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="motion-zoom min-h-12 w-full rounded-xl bg-coral px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#963b2a] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-coral active:bg-[#7d3022]">Masuk</button>
            </form>
            <p class="mt-6 border-t border-line pt-5 text-sm text-deep">Belum punya akun? <a href="/register" class="font-semibold text-ocean underline decoration-ocean/40 underline-offset-4 hover:decoration-ocean">Buat akun member</a></p>
        </div>
    </section>
@endsection
