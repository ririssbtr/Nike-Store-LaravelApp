<aside class="bg-black w-64 flex flex-col text-white p-4 shadow-md">
    <div class="text-2xl font-bold text-center mb-8">
        <img src="nike-logo(2).jpg" alt="Nike Logo" class="w-24 mx-auto">
        Nike Store
    </div>
    <nav>
        <ul class="space-y-4">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 hover:bg-gray-800 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('products.index') }}" class="flex items-center px-4 py-2 hover:bg-gray-800 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h18l-1.5 9H4.5L3 3z" />
                        <circle cx="9" cy="20.5" r="1.5" />
                        <circle cx="15" cy="20.5" r="1.5" />
                    </svg>
                    Products
                </a>
            </li>
            <li>
                <a href="{{ route('users.index') }}"
                    class="flex items-center px-4 py-2 hover:bg-gray-800 rounded transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-2.24-2.76A7.002 7.002 0 0012 11a7.002 7.002 0 00-7.76 4.24A3 3 0 002 18v2h5m5-10a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                    <span class="text-white">Users</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-800 rounded transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-white" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 20l-5-5m0 0l5-5m-5 5h12.5a2.5 2.5 0 002.5-2.5V6.5a2.5 2.5 0 00-2.5-2.5H3.5a2.5 2.5 0 00-2.5 2.5v11.5a2.5 2.5 0 002.5 2.5H9z" />
                    </svg>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="hover:text-black">Log Out</button>
                    </form>
                </a>
            </li>
        </ul>
    </nav>
</aside>
