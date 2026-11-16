<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#eff6f8">
    <title>@yield('title', 'Ruang Akses'), Ruang Akses</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col bg-mist font-sans text-deep antialiased">
    <header class="mx-auto flex w-full max-w-7xl items-center justify-between px-5 py-4 sm:px-8 sm:py-5 lg:px-12">
        <a href="/" class="group flex min-h-11 items-center gap-3" aria-label="Ruang Akses, beranda">
            <span class="grid h-10 w-10 place-items-center rounded-xl bg-deep text-white transition group-hover:bg-ocean">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.5 2.9 7.8 7 10 4.1-2.2 7-5.5 7-10V6l-7-3Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/></svg>
            </span>
            <span class="text-base font-bold tracking-tight">Ruang <span class="text-ocean">Akses</span></span>
        </a>

        <nav class="flex items-center gap-2 sm:gap-3" aria-label="Navigasi utama">
            @auth
                <a href="/dashboard" class="inline-flex min-h-11 items-center rounded-lg px-3 text-sm font-semibold text-deep transition hover:bg-white hover:text-ocean active:bg-[#dbeaf0]">Dashboard</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="min-h-11 rounded-lg border border-deep/25 bg-white px-4 text-sm font-semibold text-deep transition hover:border-deep hover:bg-deep hover:text-white active:bg-ocean">Keluar</button>
                </form>
            @else
                <a href="/login" class="inline-flex min-h-11 items-center rounded-lg px-3 text-sm font-semibold text-deep transition hover:bg-white hover:text-ocean active:bg-[#dbeaf0]">Masuk</a>
                <a href="/register" class="motion-zoom inline-flex min-h-11 items-center rounded-lg bg-coral px-4 text-sm font-semibold text-white transition hover:bg-[#963b2a] active:bg-[#7d3022]">Buat akun</a>
            @endauth
        </nav>
    </header>

    <main class="mx-auto w-full max-w-7xl flex-1 px-5 pb-12 pt-5 sm:px-8 sm:pb-16 sm:pt-7 lg:px-12">
        @if (session('success'))
            <div class="mx-auto mb-6 flex max-w-5xl items-center gap-3 rounded-xl border border-[#9cc8d2] bg-white px-5 py-4 text-sm font-medium text-deep" role="status">
                <svg class="h-5 w-5 shrink-0 text-ocean" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6"/></svg>
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="mx-auto mt-auto flex w-full max-w-7xl flex-col gap-2 px-5 py-6 text-xs text-[#405b66] sm:flex-row sm:items-center sm:justify-between sm:px-8 lg:px-12">
        <span>© {{ date('Y') }} Ruang Akses</span>
        <span>Satu pintu masuk untuk dashboard member dan admin.</span>
    </footer>
</body>

</html>
