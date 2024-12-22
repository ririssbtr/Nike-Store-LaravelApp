<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex h-screen">
        @include('layouts.partials.sidebar')
        <main class="flex-1 flex flex-col bg-white">
            @include('layouts.partials.header')
            @yield('content')
        </main>
    </div>

</body>

</html>
