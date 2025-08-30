<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css') {{-- kalau pakai Tailwind --}}
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
        
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" required 
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" required 
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" class="mr-2">
                <span class="text-sm">Remember Me</span>
            </div>
            <button type="submit" 
                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Login
            </button>
        </form>
    </div>
</body>
</html>
