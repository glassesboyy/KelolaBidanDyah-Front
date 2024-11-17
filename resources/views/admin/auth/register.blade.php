<x-guest-layout>
    @section('title', 'Register Admin | PMB Dyah Sumarmo')
    <div class="min-h-screen bg-gradient-to-br from-cyan-500 to-blue-600 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full mx-auto bg-white rounded-xl shadow-2xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Daftar Admin Baru</h2>
                <p class="text-gray-600 mt-2">Silakan lengkapi data admin</p>
            </div>

            <form method="POST" action="{{ route('admin.register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nama Lengkap')" class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1">
                        <x-text-input id="name"
                            class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                            placeholder="Masukkan nama lengkap admin" />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1">
                        <x-text-input id="email"
                            class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="email" name="email" :value="old('email')" required autocomplete="username"
                            placeholder="admin@email.com" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1">
                        <x-text-input id="password"
                            class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="password" name="password" required autocomplete="new-password"
                            placeholder="Minimal 8 karakter" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')"
                        class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1">
                        <x-text-input id="password_confirmation"
                            class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="password" name="password_confirmation" required autocomplete="new-password"
                            placeholder="Ulangi password" />
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-600" />
                </div>

                <div class="flex flex-col space-y-4">
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition-all ease-in-out duration-300">
                        {{ __('Daftar Admin') }}
                    </button>

                    <!-- Login Link -->
                    <div class="text-center">
                        <a href="{{ route('admin.login') }}"
                            class="text-sm text-cyan-600 hover:text-cyan-500 duration ease-in-out transition-all duration-200">
                            Sudah punya akun admin? Masuk di sini
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
