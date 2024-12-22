@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Users</h1>

        <!-- Success/Error Message -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="bg-red-500 text-white p-4 mb-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        <table class="min-w-full table-auto border-collapse shadow-md rounded-lg bg-white">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-semibold text-gray-700">Email</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-semibold text-gray-700">Role</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $user->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $user->email }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $user->role }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            @if (auth()->user()->role === 'admin' && $user->role !== 'admin')
                                <form action="{{ route('users.updateRole', $user->id) }}" method="POST">
                                    @csrf
                                    <select name="role" class="border border-gray-300 rounded-md px-3 py-1" required>
                                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin
                                        </option>
                                    </select>
                                    <button type="submit" class="ml-2 bg-blue-500 text-white px-4 py-2 rounded-md">Update
                                        Role</button>
                                </form>
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
