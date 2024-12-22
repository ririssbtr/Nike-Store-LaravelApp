<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Store</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    </head>

    <body class="bg-white font-sans">
        <!-- Header -->
        @include('core.partials.navbar')

        @section('content')
            <!-- Hero Section -->
            <section class="relative bg-cover bg-center h-[680px] overflow-hidden"
                style="background-image: url('hero-shoes(2).jpg');">
                <!-- Overlay Background Transparan -->
                <div class="absolute inset-0 bg-white opacity-80"></div>

                <!-- Garis Miring ke Kanan Atas -->
                <div
                    class="absolute top-[-50%] right-[18%] h-[200%] w-[140px] sm:w-[160px] md:w-[180px] bg-yellow-400 transform rotate-[45deg]">
                </div>

                <!-- Grid Layout -->
                <div class="relative container mx-auto grid grid-cols-1 sm:grid-cols-2 items-center h-full px-4 sm:px-6">
                    <!-- Text Content -->
                    <div class="z-10 relative">
                        <p class="text-sm text-gray-600 mb-1 uppercase tracking-wide">Men's Shoes</p>
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                            New Jordan 6 Rings
                        </h1>
                        <p class="text-gray-700 mt-3 leading-relaxed w-[90%]">
                            The Jordan 6 Rings Men's Shoe celebrates a legendary career with classic design lines and
                            detailing for
                            streamlined hoops style.
                        </p>
                        <a href="#"
                            class="inline-block mt-6 bg-black text-white px-6 py-3 text-sm uppercase tracking-wider hover:bg-gray-800 transition">
                            Go to collection
                        </a>
                    </div>

                    <!-- Shoe Image & Overlay Text -->
                    <div class="relative flex justify-center items-center">
                        <!-- Shoe Image -->
                        <img src="jordan-6rings.png" alt="Jordan 6 Rings"
                            class="relative w-[80%] max-w-full object-contain z-10" />

                        <!-- Overlay Text -->
                        <div
                            class="absolute top-[10%] left-1/2 -translate-x-1/2 font-extrabold italic text-yellow-400 text-[90px] leading-none tracking-wide z-20">
                            AIR
                        </div>
                        <div
                            class="absolute bottom-[8%] left-1/2 -translate-x-1/2 text-black text-[122px] font-extrabold italic leading-none tracking-tight z-20">
                            JORDAN
                        </div>
                        <div
                            class="absolute bottom-[4%] left-[65%] font-extrabold italic text-yellow-500 text-[30px] leading-none z-20">
                            6 RINGS
                        </div>
                    </div>
                </div>
            </section>


            <!-- Top Picks Section -->
            <section class="py-20 bg-gray-50 h-[720px]">
                <div class="container mx-auto px-8">
                    <!-- Header Section -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-4xl font-bold text-gray-1000">Top Picks</h2>
                        <!-- Pagination di bawah section -->
                        <div class="swiper-pagination mt-4  "></div> <!-- Pagination dipindahkan ke bawah -->
                        <!-- Custom Navigation Buttons -->
                        <div class="flex justify-center space-x-4 mt-6">
                            <button
                                class="swiper-button-prev-custom w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 hover:bg-gray-300 transition-all duration-200 ease-in-out transform hover:scale-110 active:scale-95">
                                <!-- Icon Left Arrow -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M15.54 21L7.5 12.96 15.54 5l1.5 1.5-6.54 6.46 6.54 6.54z" />
                                </svg>
                            </button>
                            <button
                                class="swiper-button-next-custom w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 hover:bg-gray-300 transition-all duration-200 ease-in-out transform hover:scale-110 active:scale-95">
                                <!-- Icon Right Arrow -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path d="M8.46 3l8.04 8.04L8.46 19.5l-1.5-1.5 6.54-6.46-6.54-6.54z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Swiper Container -->
                    <div class="swiper-container overflow-hidden">
                        <div class="swiper-wrapper">

                            <!-- Slide 1 -->
                            <div class="swiper-slide flex justify-start space-x-8">
                                <!-- Item 1 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu1.jpg" alt="Kyrie 5 Friends" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">Kyrie 5 Friends</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$110</p>
                                </div>
                                <!-- Item 2 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu2.jpg" alt="Nike Air Max 720" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">Nike Air Max 720</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$140</p>
                                </div>
                                <!-- Item 3 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu3.jpg" alt="Zoom Pegasus Turbo" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">Nike Pegasus Turbo</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$130</p>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide flex justify-start space-x-8">
                                <!-- Item 4 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu4.jpg" alt="Air Jordan 1" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">Air Jordan 1</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$110</p>
                                </div>
                                <!-- Item 5 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu5.jpg" alt="Lebron 17" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">Lebron 17</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$140</p>
                                </div>
                                <!-- Item 6 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu6.jpg" alt="KD 12" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">KD 12</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$130</p>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide flex justify-start space-x-8">
                                <!-- Item 7 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu7.jpg" alt="React Infinity Run" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">React Infinity Run</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$110</p>
                                </div>
                                <!-- Item 8 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu8.jpg" alt="Vapormax Flyknit 3" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">Vapormax Flyknit 3</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$140</p>
                                </div>
                                <!-- Item 9 -->
                                <div class="bg-white p-6 shadow-lg flex-1 max-w-sm">
                                    <img src="sepatu9.jpg" alt="Air Force 1" class="w-full h-60 object-cover">
                                    <h3 class="mt-6 text-gray-800 font-semibold text-lg">Air Force 1</h3>
                                    <p class="text-gray-600 mt-2 text-lg">$130</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!-- Custom Script -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                // Inisialisasi Swiper
                const swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next-custom',
                        prevEl: '.swiper-button-prev-custom',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true, // Make it clickable
                    },
                });
            </script>

            <!-- Trending Now -->
            <section class="py-16 bg-gray-100">
                <div class="container mx-auto px-6">
                    <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-8">Trending Now</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Large Image -->
                        <div class="relative group overflow-hidden rounded-lg">
                            <img src="react-presto(2).jpeg" alt="React Presto"
                                class="w-full h-[400px] object-cover transform transition-transform duration-500 group-hover:scale-110">
                            <!-- Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent transition-opacity duration-500 opacity-100 group-hover:opacity-80">
                            </div>
                            <!-- Content -->
                            <div class="absolute bottom-8 left-8">
                                <h3 class="text-white text-2xl font-bold">REACT PRESTO</h3>
                                <a href="#"
                                    class="inline-block mt-2 bg-white text-black font-semibold py-2 px-4 rounded hover:bg-gray-200 transition-colors duration-300">Shop</a>
                            </div>
                        </div>
                        <!-- Small Images Grid -->
                        <div class="grid grid-cols-1 gap-6">
                            <div class="relative group overflow-hidden rounded-lg">
                                <img src="air-max-dia(1).jpeg" alt="Air Max Dia"
                                    class="w-full h-[200px] object-cover transform transition-transform duration-500 group-hover:scale-110">
                                <!-- Overlay -->
                                <div
                                    class="absolute inset-0 bg-black/40 transition-opacity duration-500 opacity-100 group-hover:opacity-80">
                                </div>
                                <p class="absolute bottom-4 left-4 text-white text-lg font-semibold">Summer Must-Haves Air
                                    Max Dia</p>
                            </div>
                            <div class="relative group overflow-hidden rounded-lg">
                                <img src="retro-low-le.jpeg" alt="Retro Low LE"
                                    class="w-full h-[200px] object-cover transform transition-transform duration-500 group-hover:scale-110">
                                <!-- Overlay -->
                                <div
                                    class="absolute inset-0 bg-black/40 transition-opacity duration-500 opacity-100 group-hover:opacity-80">
                                </div>
                                <p class="absolute bottom-4 left-4 text-white text-lg font-semibold">Air Jordan 11 Retro
                                    Low LE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Nike React Presto By You -->
            <section class="py-16 bg-white overflow-hidden">
                <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center gap-8">
                    <!-- Text Content -->
                    <div class="flex-1 text-center lg:text-left">
                        <p class="text-gray-500 text-lg mb-2">Create your design</p>
                        <h2 class="text-4xl font-extrabold text-gray-800 mb-4">
                            NIKE REACT PRESTO</span>
                            <h2 class="text-4xl font-extrabold text-gray-800 mb-4">BY YOU</span>
                            </h2>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Take advantage of fresh new, preppy styling and technology with a fresh pair of Nike React
                                shoes.
                            </p>
                            <a href="#"
                                class="inline-block bg-black text-white font-semibold py-3 px-6 rounded hover:bg-gray-800 transition duration-300">
                                Create
                            </a>
                    </div>
                    <!-- Image Content -->
                    <div class="flex-1 relative">
                        <!-- Garis Kuning Miring di Bawah -->
                        <div
                            class="absolute top-[-110%] right-[-22%] h-[200%] w-[140px] sm:w-[160px] md:w-[180px] bg-yellow-400 transform rotate-[45deg]">
                        </div>
                        <img src="nike-react-presto(1).png" alt="Nike React Presto"
                            class="w-full max-w-[500px] mx-auto relative z-20">
                    </div>

                </div>
            </section>


            @include('core.partials.footer')


            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Custom Script -->
            <script>
                // Ambil tombol navigasi
                <
                script >
                    var swiper = new Swiper('.swiper-container', {
                        loop: true, // Agar swiper berputar terus
                        navigation: {
                            nextEl: '.swiper-button-next-custom', // Menautkan ke tombol next
                            prevEl: '.swiper-button-prev-custom', // Menautkan ke tombol prev
                        },
                    });
            </script>


            </script>

        </body>

    </html>
