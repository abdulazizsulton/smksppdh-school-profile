<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        {{-- SEO Meta Tags --}}
        @push('meta')
            <title>SMK Darel Hikmah - Dashboard</title>
            <meta name="description" content="Dashboard SMK Darel Hikmah. Sekolah Menengah Kejuruan terbaik di daerah Anda.">
            <meta name="keywords" content="SMK Darel Hikmah, Sekolah, SMK, Pendidikan, Dashboard">
            <meta name="author" content="SMK Darel Hikmah">
        @endpush
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
