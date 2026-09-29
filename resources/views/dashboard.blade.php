@vite(['resources/css/app.css', 'resources/js/app.js'])

@include('layouts.navigation')

<div class="p-6">
    <h1 class="text-2xl font-bold">Dashboard POS Barokah Mart</h1>

    <p class="mt-2">Selamat datang di halaman dashboard.</p>

    <a href="{{ route('supplier.detail', ['id' => 1]) }}"
       class="text-blue-600">
        Lihat Supplier
    </a>

    <div class="flex gap-3 mt-4">
        <x-badge status="Aman" />
        <x-badge status="Menipis" />
        <x-badge status="Habis" />
    </div>
</div>