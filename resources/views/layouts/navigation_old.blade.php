<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-lg flex items-center justify-center border border-white/30">
                        <span class="text-white font-bold text-lg">РСО</span>
                    </div>
                    <span class="text-xl font-bold text-white hidden sm:block">Отряды Севастополя</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-8">
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">О нас</a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Новости</a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Направления</a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Галерея</a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Вопросы</a>
                        Мероприятия
                    </a>
                    <a href="#" 
                       class="text-white/80 hover:bg-white/10 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-200">
                        Студены
                    </a>
                    <a href="#" class="text-white/90 hover:text-white transition-colors font-medium">Вопросы</a>
                    
                    @guest
                        <a href="{{ route('register') }}" 
                           class="ml-4 bg-white/20 backdrop-blur-sm border border-white/30 text-white px-6 py-2 rounded-full font-semibold hover:bg-white/30 transition-all duration-200">
                            Вступить
                        </a>
                    @endguest
                </div>
            </div>

            <!-- Auth Links -->
            <div class="hidden md:block">
                @auth
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Profile dropdown -->
                        <div class="ml-3 relative" x-data="{ open: false }">
                            <div>
                                <button @click="open = !open" 
                                        class="max-w-xs bg-white/10 backdrop-blur-sm flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white/50 border border-white/20 px-3 py-2" 
                                        id="user-menu-button">
                                    <span class="sr-only">Open user menu</span>
                                    <div class="w-6 h-6 bg-white/30 rounded-full flex items-center justify-center mr-2">
                                        <span class="text-white font-medium text-xs">
                                            {{ substr(Auth::user()->name, 0, 1) }}
                                        </span>
                                    </div>
                                    <span class="text-white text-sm">{{ Auth::user()->name }}</span>
                                </button>
                            </div>

                            <div x-show="open" 
                                 @click.away="open = false"
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
                                 style="display: none;">
                                <div class="py-1">
                                    <a href="{{ route('dashboard') }}" 
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Панель управления
                                    </a>
                                    <a href="{{ route('profile') }}" 
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Профиль
                                    </a>
                                    <a href="{{ route('settings') }}" 
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Настройки
                                    </a>
                                    <div class="border-t border-gray-100"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" 
                                                class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Выход
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('login') }}" 
                           class="text-white/80 hover:text-white px-3 py-2 text-sm font-medium transition-colors duration-200">
                            Войти
                        </a>
                        <a href="{{ route('register') }}" 
                           class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white border border-white/30 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200">
                            Вступить
                        </a>
                    </div>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" 
                        class="inline-flex items-center justify-center p-2 rounded-md text-white/80 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white/50"
                        x-data="{ open: false }"
                        @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden" 
         x-data="{ open: false }"
         x-show="open"
         x-transition:enter="transition ease-out duration-100 transform"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75 transform"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-black/20 backdrop-blur-sm border-t border-white/10">
            <a href="{{ route('home') }}" 
               class="@if(request()->routeIs('home')) bg-white/20 text-white @else text-white/80 hover:bg-white/10 hover:text-white @endif block px-3 py-2 rounded-md text-base font-medium">
                Главная
            </a>
            <a href="#" 
               class="text-white/80 hover:bg-white/10 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                О нас
            </a>
            <a href="#" 
               class="text-white/80 hover:bg-white/10 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                Новости
            </a>
            <a href="#" 
               class="text-white/80 hover:bg-white/10 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                Мероприятия
            </a>
            <a href="#" 
               class="text-white/80 hover:bg-white/10 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                Студены
            </a>
            <a href="#" 
               class="text-white/80 hover:bg-white/10 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                Вакансии
            </a>

            @auth
                <div class="border-t border-white/10 pt-4">
                    <div class="flex items-center px-3 mb-3">
                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                            <span class="text-white font-medium text-sm">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </span>
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                            <div class="text-sm font-medium text-white/60">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <a href="{{ route('dashboard') }}" 
                           class="block px-3 py-2 rounded-md text-base font-medium text-white/80 hover:text-white hover:bg-white/10">
                            Панель управления
                        </a>
                        <a href="{{ route('profile') }}" 
                           class="block px-3 py-2 rounded-md text-base font-medium text-white/80 hover:text-white hover:bg-white/10">
                            Профиль
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" 
                                    class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-white/80 hover:text-white hover:bg-white/10">
                                Выход
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <div class="border-t border-white/10 pt-4 space-y-1">
                    <a href="{{ route('login') }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium text-white/80 hover:text-white hover:bg-white/10">
                        Войти
                    </a>
                    <a href="{{ route('register') }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium bg-white/20 text-white hover:bg-white/30">
                        Вступить
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>

@push('scripts')
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endpush