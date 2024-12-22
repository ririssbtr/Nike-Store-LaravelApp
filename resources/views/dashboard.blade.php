@extends('layouts.app')

@section('content')
    <!-- Dashboard Content -->
    <div class="p-6 space-y-6">
        <!-- Analytics -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-black p-4 rounded-lg shadow text-white">
                <h5 class="text-lg font-semibold">Total Products</h5>
                <p class="text-2xl font-bold">{{ number_format($totalProducts) }}</p>
            </div>
        </div>

        <!-- Sales Analytics -->
        <div class="bg-gray-50 p-6 rounded-lg shadow">
            <h2 class="text-xl font-bold text-black">Sales Analytics</h2>
            <div class="mt-4">
                <canvas id="salesChart" class="w-full" style="height: 200px;"></canvas>
            </div>
        </div>

        <!-- Tambahkan Script untuk Chart -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(ctx, {
                type: 'line', // Jenis chart, bisa diubah menjadi 'bar', 'pie', dll.
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Label data
                    datasets: [{
                        label: 'Monthly Sales (in IDR)',
                        data: [1200, 1900, 3000, 2500, 2200, 2700], // Data penjualan
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        },
                    },
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

        <!-- Top Selling Products -->
        <div>
            <h2 class="text-xl font-bold text-black mb-4">Top Selling Products</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <img src="Nike_Air_Jordan.jpg" alt="Product" class="w-full h-32 object-cover rounded">
                    <h3 class="mt-2 text-black font-semibold">Nike Air Jordan</h3>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <img src="Nike_Air_Max.jpg" alt="Product" class="w-full h-32 object-cover rounded">
                    <h3 class="mt-2 text-black font-semibold">Nike Air Max</h3>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <img src="Nike_Zoom.jpeg" alt="Product" class="w-full h-32 object-cover rounded">
                    <h3 class="mt-2 text-black font-semibold">Nike Zoom</h3>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <img src="Nike_Pegasus.jpeg" alt="Product" class="w-full h-32 object-cover rounded">
                    <h3 class="mt-2 text-black font-semibold">Nike Pegasus</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
