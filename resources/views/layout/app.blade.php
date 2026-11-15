<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f1eee6">
    <title>@yield('title', 'Ruang Akses'), Ruang Akses</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col bg-paper font-sans text-ink antialiased">
    <header class="mx-auto flex w-full max-w-7xl items-center justify-between border-b border-line px-5 py-4 sm:px-8 lg:px-12">
        <a href="/" class="group flex min-h-11 items-center gap-3" aria-label="Ruang Akses, beranda">
            <span class="grid h-9 w-9 place-items-center rounded-sm bg-ink text-paper transition group-hover:bg-signal">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="square" stroke-linejoin="miter" d="M12 3 5 6v5c0 4.5 2.9 7.8 7 10 4.1-2.2 7-5.5 7-10V6l-7-3Z"/><path stroke-linecap="square" stroke-linejoin="miter" d="m9 12 2 2 4-4"/></svg>
            </span>
            <span class="text-[15px] font-bold tracking-[-0.04em]">ruang<span class="text-signal">akses</span></span>
        </a>

        <nav class="flex items-center gap-1 sm:gap-3" aria-label="Navigasi utama">
            @auth
                <a href="/dashboard" class="inline-flex min-h-11 items-center rounded-md px-3 text-sm font-semibold text-ink transition hover:text-signal active:bg-[#e6e0d4]">Dashboard</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="min-h-11 rounded-md border border-ink px-4 text-sm font-semibold text-ink transition hover:bg-ink hover:text-paper active:bg-signal">Keluar</button>
                </form>
            @else
                <a href="/login" class="inline-flex min-h-11 items-center rounded-md px-3 text-sm font-semibold text-ink transition hover:text-signal active:bg-[#e6e0d4]">Masuk</a>
                <a href="/register" class="motion-zoom inline-flex min-h-11 items-center rounded-md bg-signal px-4 text-sm font-semibold text-white transition hover:bg-[#842f20] active:bg-[#672519]">Buat akun</a>
            @endauth
        </nav>
    </header>

    <main class="mx-auto w-full max-w-7xl flex-1 px-5 pb-12 pt-6 sm:px-8 sm:pb-16 sm:pt-8 lg:px-12">
        @if (session('success'))
            <div class="mx-auto mb-8 flex max-w-5xl items-center gap-3 rounded-md border-l-4 border-signal bg-[#e8e1d5] px-5 py-4 text-sm font-medium text-ink" role="status">
                <svg class="h-5 w-5 shrink-0 text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="square" stroke-linejoin="miter" d="m5 12 4 4L19 6"/></svg>
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="mx-auto mt-auto flex w-full max-w-7xl flex-col gap-2 border-t border-line px-5 py-6 text-xs text-[#4b514f] sm:flex-row sm:items-center sm:justify-between sm:px-8 lg:px-12">
        <span>© {{ date('Y') }} Ruang Akses</span>
        <span>Sistem IAM untuk dashboard member dan admin.</span>
    </footer>
</body>

</html>
