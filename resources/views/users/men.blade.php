@extends('core.app')

@section('content')
    <div class="container mx-auto px-4 py-8 bg-gray-50">
        <!-- Title -->
        <h1 class="text-4xl font-bold text-center mb-12 text-gray-800 tracking-wide">Men Shoes</h1>

        <!-- Filter Button -->
        <div class="flex justify-start items-center mb-8">
            <button
                class="px-6 py-2 bg-gray-900 text-white rounded-none hover:bg-gray-700 transition duration-300 ease-in-out">
                Filter Products
            </button>
            <!-- Filter Form -->
            <div id="filterForm" class="hidden mt-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Filter Products</h3>

                    <!-- Filter by Category -->
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700">Category</label>
                        <select id="category" class="w-full p-2 border border-gray-300 rounded-md">
                            <option value="all">All</option>
                            <option value="sneakers">Sneakers</option>
                            <option value="running">Running</option>
                            <option value="basketball">Basketball</option>
                        </select>
                    </div>

                    <!-- Filter by Price -->
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700">Price Range</label>
                        <input type="range" id="price" min="50" max="200" step="10" class="w-full">
                        <span id="priceLabel" class="text-gray-700">Price: $50 - $200</span>
                    </div>

                    <!-- Filter by Brand -->
                    <div class="mb-4">
                        <label for="brand" class="block text-gray-700">Brand</label>
                        <select id="brand" class="w-full p-2 border border-gray-300 rounded-md">
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                            <option value="puma">Puma</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-12">
            @foreach ($products as $product)
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <!-- Gambar Produk -->
                    <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}"
                        class="w-full h-64 object-cover">

                    <!-- Deskripsi Produk -->
                    <div class="p-6 text-center">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->name }}</h2>
                        <p class="text-gray-500 text-sm mb-4">${{ number_format($product->price, 2) }}</p>
                        {{-- <a href="{{ route('product.details', ['id' => $product->id]) }}"
                            class="px-4 py-2 bg-black text-white rounded-none hover:bg-gray-800 transition duration-300 ease-in-out">
                            View Details
                        </a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@section('scripts')
    <script>
        // Ambil elemen filter dan tombol filter
        const filterButton = document.querySelector('button');
        const filterForm = document.getElementById('filterForm');

        // Event listener untuk tombol filter
        filterButton.addEventListener('click', () => {
            // Toggle visibility filter form
            filterForm.classList.toggle('hidden');
        });
    </script>
@endsection
@endsection
