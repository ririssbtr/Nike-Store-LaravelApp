@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-center mb-6">Product List</h1>
        <div class="text-center mb-4">
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add
                Product</a>
        </div>
        <table class="min-w-full table-auto bg-white border-collapse shadow-md rounded-lg">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-semibold text-gray-700">Price</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-semibold text-gray-700">Photo</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $product->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">${{ number_format($product->price, 2) }}</td>
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/' . $product->photo) }}" class="w-24 h-24 object-cover rounded-lg">
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            <a href="{{ route('products.edit', $product->id) }}"
                                class="text-blue-500 hover:text-blue-700">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-4">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
