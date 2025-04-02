<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title }}</title>
</head>
<body>
    <div class="min-h-screen bg-[#0A0A0F] flex items-center justify-center p-6">
        <!-- Gradient background -->
        <div class="fixed inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-950 via-slate-900 to-black opacity-80"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(14,21,35,0.9),rgba(9,12,20,0.9))]"></div>
        </div>
    
        <!-- Login container -->
        <div class="w-[400px] relative">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-600/20 blur-xl"></div>
            <div class="relative bg-black/40 backdrop-blur-xl border border-white/10 p-8">
                @if(session()->has('loginError'))
                    <div class="text-red-500 mt-2">
                        {{ session('loginError') }}
                    </div>
                @endif
                <!-- Title -->
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Welcome Back</h2>
                </div>
    
                <!-- Form -->
                <form action="/login" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="relative group">
                        <input type="text" 
                               name="username"
                               id="username" 
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-white placeholder-gray-500"
                               placeholder="Username"
                               required>
                    </div>
    
                    <div class="relative group">
                        <input type="email" 
                               name="email" 
                               id="email"
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-white placeholder-gray-500"
                               placeholder="Email address"
                               required>
                    </div>
    
                    <div class="relative group">
                        <input type="password" 
                               name="password" 
                               id="password"
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-white placeholder-gray-500"
                               placeholder="Password"
                               required>
                    </div>
    
                    <button type="submit" 
                            class="w-full py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium hover:from-blue-700 hover:to-purple-700 transition-all">
                        Sign In
                    </button>
    
                    <div class="flex justify-between text-sm">
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">Forgot password?</a>
                        <a href="#" class="text-purple-400 hover:text-purple-300 transition-colors">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>