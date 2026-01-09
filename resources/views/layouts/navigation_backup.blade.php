<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 navbar-transparent" id="navbar" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/LogoSevRO.png') }}" alt="РСО Севастополь" class="h-12 w-auto">
                </a>
            </div>

            <!-- Centered Desktop Navigation -->
            <div class="hidden md:flex items-center justify-center flex-1">
                <div class="flex items-center space-x-8">
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">О нас</a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Новости</a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Направления</a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Галерея</a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Вопросы</a>
                </div>
            </div>

            <!-- Right side - Auth Button -->
            <div class="hidden md:flex items-center">
                @guest
                    <a href="{{ route('register') }}" 
                       class="bg-transparent border-2 border-white/50 text-white px-6 py-2 rounded-full font-medium hover:bg-white/10 hover:border-white transition-all duration-300">
                        Вступить
                    </a>
                @else
                    <!-- User Menu -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" 
                                class="bg-white/20 backdrop-blur-sm border border-white/30 text-white px-4 py-2.5 rounded-full font-medium hover:bg-white/30 hover:border-white/50 transition-all duration-200 flex items-center space-x-2">
                            <div class="w-6 h-6 bg-white/40 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </span>
                            </div>
                            <span class="text-sm">{{ Str::limit(Auth::user()->name, 10) }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div x-show="open" 
                             @click.away="open = false"
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-48 bg-white/95 backdrop-blur-sm rounded-xl shadow-xl border border-white/20 overflow-hidden z-50">
                            <a href="{{ route('dashboard') }}" class="block px-4 py-3 text-sm text-gray-800 hover:bg-blue-50 transition-colors">
                                🏠 Личный кабинет
                            </a>
                            <a href="{{ route('profile') }}" class="block px-4 py-3 text-sm text-gray-800 hover:bg-blue-50 transition-colors">
                                👤 Профиль
                            </a>
                            <a href="{{ route('settings') }}" class="block px-4 py-3 text-sm text-gray-800 hover:bg-blue-50 transition-colors">
                                ⚙️ Настройки
                            </a>
                            <div class="border-t border-gray-200">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                        🚀 Выйти
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="text-white p-2 rounded-md hover:bg-white/10 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-1"
             class="md:hidden bg-white/95 backdrop-blur-sm border-t border-white/20">
            <div class="px-4 py-6 space-y-3">
                <a href="#" class="block text-gray-800 hover:text-blue-600 transition-colors py-2 px-3 rounded-lg hover:bg-blue-50">О нас</a>
                <a href="#" class="block text-gray-800 hover:text-blue-600 transition-colors py-2 px-3 rounded-lg hover:bg-blue-50">Новости</a>
                <a href="#" class="block text-gray-800 hover:text-blue-600 transition-colors py-2 px-3 rounded-lg hover:bg-blue-50">Направления</a>
                <a href="#" class="block text-gray-800 hover:text-blue-600 transition-colors py-2 px-3 rounded-lg hover:bg-blue-50">Галерея</a>
                <a href="#" class="block text-gray-800 hover:text-blue-600 transition-colors py-2 px-3 rounded-lg hover:bg-blue-50">Вопросы</a>
                
                <div class="pt-3 border-t border-gray-200">
                    @guest
                        <a href="{{ route('register') }}" 
                           class="block text-center bg-blue-600 text-white px-4 py-3 rounded-lg font-medium hover:bg-blue-700 transition-all duration-300">
                            Вступить
                        </a>
                    @else
                        <div class="space-y-2">
                            <a href="{{ route('dashboard') }}" class="block text-gray-800 hover:text-blue-600 transition-colors py-2 px-3 rounded-lg hover:bg-blue-50">
                                🏠 Личный кабинет
                            </a>
                            <a href="{{ route('profile') }}" class="block text-gray-800 hover:text-blue-600 transition-colors py-2 px-3 rounded-lg hover:bg-blue-50">
                                👤 Профиль
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left text-red-600 hover:text-red-700 py-2 px-3 rounded-lg hover:bg-red-50 transition-colors">
                                    🚀 Выйти
                                </button>
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>
                    <a href="{{ route('register') }}" 
                       class="bg-transparent border-2 border-white/50 text-white px-6 py-2 rounded-full font-medium hover:bg-white/10 hover:border-white transition-all duration-300">
                        Вступить
                    </a>
                @else
                    <!-- User Menu -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" 
                                class="bg-white/20 backdrop-blur-sm border border-white/30 text-white px-4 py-2.5 rounded-full font-medium hover:bg-white/30 hover:border-white/50 transition-all duration-200 flex items-center space-x-2">
                            <div class="w-6 h-6 bg-white/40 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </span>
                            </div>
                            <span class="text-sm">{{ Str::limit(Auth::user()->name, 10) }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div x-show="open" 
                             @click.away="open = false"
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-48 bg-white/95 backdrop-blur-sm rounded-xl shadow-xl border border-white/20 overflow-hidden z-50">
                            <a href="{{ route('dashboard') }}" class="block px-4 py-3 text-sm text-gray-800 hover:bg-blue-50 transition-colors">
                                🏠 Личный кабинет
                            </a>
                            <a href="{{ route('profile') }}" class="block px-4 py-3 text-sm text-gray-800 hover:bg-blue-50 transition-colors">
                                👤 Профиль
                            </a>
                            <a href="{{ route('settings') }}" class="block px-4 py-3 text-sm text-gray-800 hover:bg-blue-50 transition-colors">
                                ⚙️ Настройки
                            </a>
                            <div class="border-t border-gray-200">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                        🚀 Выйти
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="text-white/90 hover:text-white p-2 rounded-lg hover:bg-white/10 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="md:hidden bg-white/10 backdrop-blur-lg border border-white/20 rounded-lg mt-2 p-4">
            <div class="space-y-3">
                <a href="#" class="block text-white/90 hover:text-white transition-colors py-2">О нас</a>
                <a href="#" class="block text-white/90 hover:text-white transition-colors py-2">Новости</a>
                <a href="#" class="block text-white/90 hover:text-white transition-colors py-2">Направления</a>
                <a href="#" class="block text-white/90 hover:text-white transition-colors py-2">Галерея</a>
                <a href="#" class="block text-white/90 hover:text-white transition-colors py-2">Вопросы</a>
                
                <div class="pt-3 border-t border-white/20">
                    @guest
                        <a href="{{ route('register') }}" 
                           class="block text-center bg-transparent border-2 border-white/50 text-white px-4 py-2 rounded-full font-medium hover:bg-white/10 transition-all duration-300">
                            Вступить
                        </a>
                    @else
                        <div class="space-y-2">
                            <a href="{{ route('dashboard') }}" class="block text-white/90 hover:text-white transition-colors py-2">
                                🏠 Личный кабинет
                            </a>
                            <a href="{{ route('profile') }}" class="block text-white/90 hover:text-white transition-colors py-2">
                                👤 Профиль
                            </a>
                            <a href="{{ route('settings') }}" class="block text-white/90 hover:text-white transition-colors py-2">
                                ⚙️ Настройки
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="pt-2">
                                @csrf
                                <button type="submit" class="block w-full text-left text-red-300 hover:text-red-200 transition-colors py-2">
                                    🚀 Выйти
                                </button>
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>