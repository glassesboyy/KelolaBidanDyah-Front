<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="abdul rahim" />
    <title>@yield('title', 'Landing Page | PMB Dyah Sumarmo')</title>
    <link href="{{ url('') }}/assets/img/hero.png" rel="icon">
    <link href="{{ url('') }}/assets/img/hero.png" rel="apple-touch-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-white shadow sticky top-0 z-10">
        <div class="container mx-auto flex justify-between items-center p-6">
            <a class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent"
                href="#">
                PMB Dyah Sumarmo
            </a>
            <button id="menu-btn" class="block md:hidden text-gray-900 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div id="menu" class="hidden md:flex space-x-4">
                <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                    <li><a class="text-gray-900 hover:text-cyan-600 transition ease-in-out duration-300"
                            href="{{ route('dashboard') }}">Beranda</a></li>
                    <li><a class="text-gray-900 hover:text-cyan-600 transition ease-in-out duration-300"
                            href="\pasien\create">Daftar Konsultasi</a></li>
                    <li><a class="text-gray-900 hover:text-cyan-600 transition ease-in-out duration-300"
                            href="{{ route('booking') }}">Detail Booking</a></li>
                    <li><a class="text-gray-900 hover:text-cyan-600 transition ease-in-out duration-300"
                            href="{{ route('pengumuman') }}">Pengumuman</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-900 hover:text-cyan-600">Keluar</button>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section>
            <div>
                @if (!empty(session('success')))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </section>
    </main>

    <footer class="bg-white text-gray-800 py-8 mt-auto shadow-md">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-2xl font-bold">© {{ date('Y') }} PMB Dyah Sumarmo</h1>
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4 mt-4">
                    <p>Alamat: Jl. Contoh No. 123, Kota Contoh, Negara Contoh</p>
                    <p>Email: <a href="mailto:info@pmbdyahsumarmo.com"
                            class="text-blue-500 hover:underline">info@pmbdyahsumarmo.com</a></p>
                    <p>Telepon: <a href="tel:+62123456789" class="text-blue-500 hover:underline">+62 123-456-789</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById("menu-btn").addEventListener("click", function() {
            document.getElementById("menu").classList.toggle("hidden");
        });

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        @endif
    </script>
    @yield('script')
</body>

</html>
