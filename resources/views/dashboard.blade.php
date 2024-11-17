@extends('mylayout')
@section('title', 'Home | PMB Dyah Sumarmo')
@section('content')
    <main class="flex-grow bg-gradient-to-r from-cyan-500 to-blue-600 mx-auto px-4 py-16">

        <!-- Hero Section -->
        <section class="grid md:grid-cols-2 gap-12 items-center">
            <div class="mx-16 space-y-6">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
                    Selamat Datang di Website PMB Dyah Sumarmo!
                </h1>
                <p class="text-lg font-medium text-white">Solusi Sehat Uuntuk Ibu dan Anak, Konsultasi Mudah
                    Pelayanan Lengkap Kapan Saja!</p>
                <a href="/pasien/create"
                    class="rounded-md bg-blue-500 px-3.5 py-2.5 mt-4 inline-block text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 transition duration-300 ease-in-out">
                    Daftar Konsultasi
                </a>
            </div>

            <div class="flex justify-center items-center">
                <img src="{{ url('assets/img/hero.png') }}" alt="Hero Image" class="max-w-full h-auto object-contain">
            </div>
        </section>

        <!-- About Us Section -->
        <section class="bg-white py-12 mt-12 rounded-lg shadow-lg flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <img src="{{ url('assets/img/about-us.png') }}" alt="About Us Image" class="w-full h-auto rounded-lg">
            </div>
            <div class="md:w-1/2 px-4">
                <h2 class="text-4xl md:text-6xl font-bold text-center mb-6">About Us</h2>
                <p class="text-lg text-gray-700 text-center">
                    Kami hadir untuk mendukung kesehatan Anda dengan layanan konsultasi kehamilan, pemeriksaan anak, serta
                    pemesanan tempat persalinan yang mudah dan cepat. Bersama bidan profesional, kami siap membantu
                    perjalanan kehamilan dan persalinan Anda dengan aman dan nyaman.
                </p>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-12 mt-12">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-bold text-center mb-6 text-white">Layanan Kami</h2>
                <p class="text-lg text-white text-center mb-8">
                    Temukan berbagai layanan unggulan di PMB Dyah Sumarmo yang dirancang khusus untuk Ibu dan Anak. Kami
                    siap melayani Anda dengan sepenuh hati dan profesionalisme, demi kenyamanan dan keamanan Anda.
                </p>
                <div class="grid md:grid-cols-3 gap-8">

                    <!-- Card 1: Kesehatan Ibu dan Anak -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:scale-105 transition duration-300">
                        <img src="{{ url('assets/img/layanan-1.png') }}" alt="Service 1"
                            class="mt-4 w-full h-48 object-contain">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold">Kesehatan Ibu dan Anak</h3>
                            <p class="text-gray-600">KIA (Kesehatan Ibu dan Anak) adalah program kesehatan yang mendukung
                                ibu
                                hamil dan anak dengan layanan pemeriksaan, imunisasi, dan pemantauan tumbuh kembang untuk
                                memastikan kesehatan optimal ibu dan anak.</p>
                            <a href="/pasien/create"
                                class="rounded-md bg-blue-500 px-3.5 py-2.5 mt-4 inline-block text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 transition duration-300 ease-in-out">Daftar
                                Konsultasi</a>
                        </div>
                    </div>

                    <!-- Card 2: Keluarga Berencana (KB) -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:scale-105 transition duration-300">
                        <img src="{{ url('assets/img/layanan-2.png') }}" alt="Service 2"
                            class="mt-4 w-full h-48 object-contain">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold">Keluarga Berencana (KB)</h3>
                            <p class="text-gray-600">Keluarga Berencana (KB) adalah program untuk mengatur jarak dan jumlah
                                anak menggunakan alat kontrasepsi, demi kesejahteraan keluarga dan kesehatan ibu serta anak.
                            </p>
                            <a href="/pasien/create"
                                class="rounded-md bg-blue-500 px-3.5 py-2.5 mt-4 inline-block text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 transition duration-300 ease-in-out">Daftar
                                Konsultasi</a>
                        </div>
                    </div>

                    <!-- Card 3: Persalinan -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:scale-105 transition duration-300">
                        <img src="{{ url('assets/img/layanan-3.png') }}" alt="Service 3"
                            class="mt-4 w-full h-48 object-contain">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold">Persalinan</h3>
                            <p class="text-gray-600">Layanan persalinan membantu ibu melahirkan dengan aman, didukung oleh
                                bidan atau dokter, serta perawatan bagi ibu dan bayi.</p>
                            <a href="/pasien/create"
                                class="rounded-md bg-blue-500 px-3.5 py-2.5 mt-4 inline-block text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 transition duration-300 ease-in-out">Daftar
                                Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Bidan Section -->
        <section class="py-12 mt-12">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-bold text-center mb-6 text-white">Tim Bidan Kami</h2>
                <p class="text-lg text-white text-center mb-8">
                    Kenali tim bidan profesional kami yang siap memberikan pelayanan terbaik untuk Anda
                </p>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white">
                                    <th class="py-4 px-6 text-left font-semibold">No</th>
                                    <th class="py-4 px-6 text-left font-semibold">Nama Bidan</th>
                                    <th class="py-4 px-6 text-left font-semibold">Jam Kerja</th>
                                    <th class="py-4 px-6 text-left font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-800">
                                @foreach ($bidan as $item)
                                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition duration-150 ease-in-out">
                                        <td class="py-4 px-6">{{ $loop->iteration }}</td>
                                        <td class="py-4 px-6 font-medium">{{ $item->nama }}</td>
                                        <td class="py-4 px-6">{{ $item->jamKerjaMulai }} - {{ $item->jamKerjaSelesai }}</td>
                                        <td class="py-4 px-6">
                                            <span class="px-3 py-1 rounded-full text-sm font-medium
                                                @if($item->status === 'sedia')
                                                    bg-green-100 text-green-800
                                                @else
                                                    bg-red-100 text-red-800
                                                @endif">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
