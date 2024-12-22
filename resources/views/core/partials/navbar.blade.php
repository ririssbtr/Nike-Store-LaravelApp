<header class="bg-white shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <img src="nike-logo.jpg" alt="Nike Logo" class="h-12">

        <!-- Navigasi Tengah -->
        <nav class="flex-1 flex justify-center space-x-6 text-sm uppercase font-semibold text-gray-700">
            @if (Auth::check())
                <a href="{{ route('men') }}" class="hover:text-black">Men</a>
            @endif
            <a href="#" class="hover:text-black">Women</a>
            <a href="#" class="hover:text-black">Kids</a>
            <a href="#" class="hover:text-black">Collections</a>
            <a href="#" class="hover:text-black">Contact</a>
        </nav>

        <!-- Navigasi Kanan -->
        <div class="flex items-center space-x-6 text-sm uppercase font-semibold text-gray-700 mr-6">
            @if (Auth::check())
                <!-- Jika sudah login, tampilkan icon user -->
                <img src="user-icon.jpg" alt="User Icon" class="h-8 w-8 rounded-full border border-gray-300">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:text-black">Log Out</button>
                </form>
            @else
                <!-- Jika belum login, tampilkan link Login dan Register -->
                <a href="{{ route('login') }}" class="hover:text-black">Login</a>
                <a href="{{ route('register') }}" class="hover:text-black">Register</a>
            @endif
        </div>
    </div>
</header>
