<aside class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-zinc-900/40 backdrop-blur-2xl" aria-label="Sidebar">
    <div class="h-full px-6 py-8 overflow-y-auto">
        <div class="flex items-center mb-12 px-2">
            <span class="text-2xl font-light tracking-[0.2em] text-white">YORALPH</span>
        </div>
        <ul class="space-y-2">
            <li>
                <a href="/dashboard" class="flex items-center p-4 rounded-2xl transition-all duration-300 {{ isActive('dashboard') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4 font-light">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/projects" class="flex items-center p-4 rounded-2xl transition-all duration-300 {{ isActive('projects') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    <span class="ml-4 font-light">Projects</span>
                </a>
            </li>
            <li>
                <a href="/quotes" class="flex items-center p-4 text-gray-400 rounded-2xl hover:bg-white/5 transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span class="ml-4 font-light">Quotes</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-4 text-gray-400 rounded-2xl hover:bg-white/5 transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span class="ml-4 font-light">Analytics</span>
                </a>
            </li>
            <li>
                <a href="/" class="flex items-center p-4 text-gray-400 rounded-2xl hover:bg-white/5 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                    <span class="ml-4 font-light">Main Menu</span>
                </a>
            </li>
        </ul>
    </div>
</aside>