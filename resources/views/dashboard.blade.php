<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body class="bg-black">
    <!-- Sidebar -->
    <x-dashboard.sidebar/>

    <!-- Main Content -->
    <div class="sm:ml-72 min-h-screen bg-gradient-to-br from-black via-zinc-900 to-black">
        <!-- Top Navigation -->
        <x-dashboard.navbar/>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>