@extends('layout.app')

@section('title', 'Buat akun')

@section('content')
    <section class="mx-auto grid max-w-5xl gap-8 py-2 sm:gap-12 sm:py-6 md:grid-cols-[0.9fr_1.1fr] md:gap-16 md:py-8">
        <div class="motion-enter max-w-md">
            <p class="text-sm font-semibold text-signal">Ruang Akses <span class="mx-1 text-line">/</span> Pendaftaran</p>
            <h1 class="mt-5 font-editorial text-4xl leading-tight tracking-tight sm:text-5xl">Mulai dengan akun member.</h1>
            <p class="mt-4 text-base leading-7 text-[#4b514f]">Daftarkan nama dan email, lalu gunakan kata sandi untuk masuk ke dashboard.</p>
            <div class="mt-8 border-t border-line pt-5">
                <p class="text-sm font-semibold">Setelah mendaftar</p>
                <p class="mt-2 text-sm leading-6 text-[#4b514f]">Pendaftaran tidak langsung masuk ke sistem. Buka halaman masuk setelah akun berhasil dibuat.</p>
            </div>
        </div>

        <div class="motion-enter-late rounded-xl border border-line bg-[#e9e4d9] px-5 py-6 sm:px-8 sm:py-8">
            <div class="mb-7 border-b border-line pb-5">
                <p class="text-xs font-semibold text-signal">Pendaftaran member</p>
                <h2 class="mt-2 font-editorial text-2xl tracking-tight">Buat akun baru</h2>
            </div>
            <form action="/register" method="POST" class="space-y-4" novalidate>
                @csrf
                <div>
                    <label for="name" class="mb-2 block text-sm font-semibold text-ink">Nama lengkap</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama Anda" class="min-h-12 w-full rounded-md border border-[#77786f] bg-paper px-4 py-3 text-sm text-ink outline-none transition placeholder:text-[#555b57] focus:border-signal focus:ring-2 focus:ring-signal/20">
                    @error('name')<p class="mt-2 text-sm font-semibold text-[#8b2f22]">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-ink">Alamat email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" placeholder="nama@email.com" class="min-h-12 w-full rounded-md border border-[#77786f] bg-paper px-4 py-3 text-sm text-ink outline-none transition placeholder:text-[#555b57] focus:border-signal focus:ring-2 focus:ring-signal/20">
                    @error('email')<p class="mt-2 text-sm font-semibold text-[#8b2f22]">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold text-ink">Kata sandi</label>
                    <input type="password" name="password" id="password" required autocomplete="new-password" placeholder="Buat kata sandi" class="min-h-12 w-full rounded-md border border-[#77786f] bg-paper px-4 py-3 text-sm text-ink outline-none transition placeholder:text-[#555b57] focus:border-signal focus:ring-2 focus:ring-signal/20">
                    <p class="mt-1.5 text-xs leading-5 text-[#4b514f]">Gunakan minimal 6 karakter.</p>
                    @error('password')<p class="mt-2 text-sm font-semibold text-[#8b2f22]">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="motion-zoom min-h-12 w-full rounded-md bg-signal px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#842f20] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-signal active:bg-[#672519]">Daftarkan akun</button>
            </form>
            <p class="mt-6 border-t border-line pt-5 text-sm text-ink">Sudah punya akun? <a href="/login" class="font-semibold text-signal underline decoration-[#a43d2c]/40 underline-offset-4 hover:decoration-signal">Masuk</a></p>
        </div>
    </section>
@endsection
