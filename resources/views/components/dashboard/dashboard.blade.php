@extends('dashboard')

@section('content')
    
<!-- Welcome Section -->
<div class="mb-12">
    <h1 class="text-4xl font-light text-white mb-3">Welcome back, {{ $user['username'] }}</h1>
    <p class="text-gray-400 text-lg">Monitor your business metrics and project progress in real-time.</p>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
    @foreach ($dashboards as $d)
    <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 hover:transform hover:scale-105 transition-all duration-300">
        <div class="flex justify-between items-start mb-6">
            <a href="{{ $d['link'] }}">
                <p class="text-sm text-gray-400 mb-2">Dashboard</p>
                <h3 class="text-3xl font-light text-white">{{ $d['name'] }}</h3>
            </a>
            <span class="text-emerald-400 text-sm bg-emerald-400/10 px-3 py-1 rounded-full">5</span>
        </div>
        <div class="w-full bg-white/5 rounded-full h-1.5">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-1.5 rounded-full" style="width: 100%"></div>
        </div>
    </div>
    @endforeach


</div>
@endsection
