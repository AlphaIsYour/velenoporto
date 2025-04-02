@props(['projects'])
<div class="proyek min-h-screen bg-gradient-to-b from-slate-50 to-slate-100/50 py-20 px-4 sm:px-6 lg:px-8">
    <!-- Header Section -->
    <div class="max-w-7xl mx-auto text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">My Projects</h2>
        <div class="h-1 w-32 bg-gradient-to-r from-blue-600 to-violet-600 mx-auto rounded-full"></div>
    </div>

    <!-- Project Grid -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($projects as $project)
        <!-- Project Card -->
        <div class="group relative bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100">
            <!-- Image Container -->
            <div class="relative h-64 overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-violet-500/5"></div>
                
                <!-- Project Image -->
                <img 
                    src="{{ asset('storage/' . $project['image']) }}" 
                    alt="{{ $project['title'] }}" 
                    class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-500"
                >
                
                <!-- Overlay on Hover -->
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/75 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <!-- Tech Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-white/90 backdrop-blur text-gray-800 shadow-sm">
                        {{ $project['tags'] }}
                    </span>
                </div>
            </div>

            <!-- Content Container -->
            <div class="p-6">
                <!-- Title -->
                <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                    {{ $project['title'] }}
                </h3>
                
                <!-- Description -->
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    {{ $project['description'] }}
                </p>

                <!-- Footer -->
                <div class="flex items-center justify-between">
                    <!-- View Project Button -->
                    <a 
                        href="{{ $project['url'] }}" 
                        class="inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-violet-600 hover:from-blue-700 hover:to-violet-700 transition-all duration-300 shadow-sm hover:shadow"
                    >
                        <span>View Project</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>

                    <!-- Year Badge -->
                    <span class="inline-flex items-center px-3 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                        2024
                    </span>
                </div>
            </div>

            <!-- Corner Decorations -->
            <div class="absolute top-0 left-0 w-16 h-16 pointer-events-none">
                <div class="absolute top-4 left-4 w-2 h-2 border-t-2 border-l-2 border-blue-600/20"></div>
            </div>
            <div class="absolute top-0 right-0 w-16 h-16 pointer-events-none">
                <div class="absolute top-4 right-4 w-2 h-2 border-t-2 border-r-2 border-blue-600/20"></div>
            </div>
            <div class="absolute bottom-0 left-0 w-16 h-16 pointer-events-none">
                <div class="absolute bottom-4 left-4 w-2 h-2 border-b-2 border-l-2 border-blue-600/20"></div>
            </div>
            <div class="absolute bottom-0 right-0 w-16 h-16 pointer-events-none">
                <div class="absolute bottom-4 right-4 w-2 h-2 border-b-2 border-r-2 border-blue-600/20"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>