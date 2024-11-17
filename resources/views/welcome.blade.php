<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page | PMB Dyah Sumarmo</title>
    <!-- Favicons -->
    <link href="{{ url('') }}/assets/img/hero.png" rel="icon">
    <link href="{{ url('') }}/assets/img/hero.png" rel="apple-touch-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleModal() {
            const modal = document.getElementById('auth-modal');
            modal.classList.toggle('hidden');
        }

        window.onclick = function(event) {
            const modal = document.getElementById('auth-modal');
            if (event.target === modal) {
                toggleModal();
            }
        }
    </script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-white shadow sticky top-0 z-10">
        <div class="container mx-auto flex justify-between items-center p-6">
            <h1 class="text-2xl font-bold bg-cyan-500 bg-clip-text text-transparent">
                PMB Dyah Sumarmo
            </h1>
            <nav class="space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-900 hover:text-cyan-600">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-900 hover:text-cyan-600">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-900 hover:text-cyan-600">Register</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </header>

    <!-- Modal for authentication message -->
    @if (!Auth::check())
        <div id="auth-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
                <h1 class="text-3xl text-center font-bold mb-4">Pemberitahuan</h1>
                <p class="mb-4">Anda belum terautentikasi, silahkan login atau register terlebih dahulu untuk
                    mengakses fitur dari website kami!</p>
                <div class="flex justify-center gap-4">
                    <a href="{{ route('login') }}"
                        class="bg-cyan-500 text-white px-4 py-2 rounded hover:bg-cyan-600 transition ease-in-out duration-300">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-cyan-500 text-white px-4 py-2 rounded hover:bg-cyan-600 transition ease-in-out duration-300">Register</a>
                </div>
                <button onclick="toggleModal()"
                    class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>
            </div>
        </div>
        <script>
            window.onload = function() {
                toggleModal();
            };
        </script>
    @endif

    <main class="flex-grow bg-gradient-to-r from-cyan-500 to-blue-600 mx-auto px-4 py-16">
        <section class="grid md:grid-cols-2 gap-12 items-center">
            <div class="mx-16 space-y-6">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
                    Selamat Datang di Website PMB Dyah Sumarmo!
                </h1>
                <p class="text-lg font-medium text-white">
                    Silahkan Login atau Register Terlebih Dahulu Untuk Mengakses Fitur PMB Dyah Sumarmo!
                </p>
            </div>

            <div class="flex justify-center items-center">
                <img src="{{ url('assets/img/hero.png') }}" alt="Hero Image" class="max-w-full h-auto object-contain">
            </div>
        </section>
    </main>

    <footer class="bg-white py-6">
        <div class="container mx-auto text-center">
            <div class="space-y-2">
                <h1 class="text-black font-bold text-2xl">© {{ date('Y') }} PMB Dyah Sumarmo</h1>
                <p class="text-gray-600">Alamat: Jl. Contoh No. 123, Kota Contoh, Negara Contoh</p>
                <p class="text-gray-600">Email: info@pmbdyahsumarmo.com</p>
                <p class="text-gray-600">Telepon: +62 123-456-789</p>
            </div>
        </div>
    </footer>
</body>
