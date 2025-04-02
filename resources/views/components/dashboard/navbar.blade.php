<nav class="border-b border-white/5 bg-black/30 backdrop-blur-2xl sticky top-0">
    <div class="mx-auto px-8 py-5">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <button class="sm:hidden p-2 text-gray-400 hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="relative ml-6">
                    <input type="text" class="bg-white/5 text-gray-300 pl-12 pr-4 py-3 rounded-2xl w-80 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all" placeholder="Search anything...">
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="flex items-center gap-8">
                <button class="p-2 text-gray-400 hover:text-white transition-colors relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <span class="bg-indigo-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center absolute -top-1 -right-1">3</span>
                </button>
                <div class="flex items-center gap-4 border-l border-white/5 pl-8">
                    <img src="{{ asset('profile/pf.jpg') }}" class="w-10 h-10 rounded-xl" alt="Profile">
                    <div class="text-left">
                        <div class="text-sm font-medium text-white">{{ Auth::user()->username }}</div>
                        <div class="text-xs text-indigo-400">Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>