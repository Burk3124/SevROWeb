@extends('layouts.app')

@section('title', 'Направления деятельности - РСО Севастополь')
@section('description', 'Российские студенческие отряды Севастополя - разнообразные направления деятельности для студентов.')

@push('styles')
@vite('resources/css/directions.css')
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section relative min-h-screen flex items-center bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 overflow-hidden">
    <!-- Hero Background Image Container -->
    <div class="absolute inset-0">
        <!-- Фоновое изображение студенческих отрядов -->
        <div class="w-full h-full bg-cover bg-center bg-no-repeat" 
             style="background-image: url('{{ asset('images/hero-background.png') }}');">
        </div>
        
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/70 via-blue-800/60 to-indigo-900/80"></div>
        
        <!-- Decorative pattern overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.02\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-10\"></div>
    </div>
    
    <!-- Эффект рваной бумаги внизу -->
    <div class="torn-paper-bottom"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10 flex items-center justify-center min-h-screen">
        <div class="max-w-4xl mx-auto py-8 sm:py-12">
            <h1 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-4 sm:mb-6 leading-tight text-center px-4">
                НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ
            </h1>
            
            <p class="font-body text-lg sm:text-xl md:text-2xl lg:text-3xl text-white/90 mb-8 sm:mb-12 leading-relaxed font-medium text-center px-4">
                Выберите свой путь развития
            </p>
        </div>
    </div>
</section>

<!-- Здесь будут добавляться другие секции направлений деятельности -->

<!-- Directions Grid Section -->
<section class="py-0 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6">
                Направления
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Выберите направление, которое соответствует вашим интересам и амбициям. 
                Каждое направление открывает уникальные возможности для развития.
            </p>
        </div>

        <!-- Directions Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Педагогическое направление -->
            <a href="#pedagogy-section" class="direction-card bg-gray-100 rounded-2xl p-8 hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer block no-underline">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 mb-6 flex items-center justify-center">
                        <img src="{{ asset('images/Педагоги.png') }}" 
                             alt="Педагогическое направление" 
                             class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Педагогическое направление
                    </h3>
                </div>
            </a>

            <!-- Сервисное направление -->
            <div class="direction-card bg-gray-100 rounded-2xl p-8 hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 mb-6 flex items-center justify-center">
                        <img src="{{ asset('images/Сервисные.png') }}" 
                             alt="Сервисное направление" 
                             class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Сервисное направление
                    </h3>
                </div>
            </div>

            <!-- Строительное направление -->
            <div class="direction-card bg-gray-100 rounded-2xl p-8 hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 mb-6 flex items-center justify-center">
                        <img src="{{ asset('images/Строители.png') }}" 
                             alt="Строительное направление" 
                             class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Строительное направление
                    </h3>
                </div>
            </div>

            <!-- Медицинское направление -->
            <div class="direction-card bg-gray-100 rounded-2xl p-8 hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 mb-6 flex items-center justify-center">
                        <img src="{{ asset('images/Медики.png') }}" 
                             alt="Медицинское направление" 
                             class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Медицинское направление
                    </h3>
                </div>
            </div>

            <!-- Направление Проводников -->
            <div class="direction-card bg-gray-100 rounded-2xl p-8 hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 mb-6 flex items-center justify-center">
                        <img src="{{ asset('images/Проводники.png') }}" 
                             alt="Направление Проводников" 
                             class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Направление Проводников
                    </h3>
                </div>
            </div>

            <!-- Губернаторские Школьные Трудовые Отряды -->
            <div class="direction-card bg-gray-100 rounded-2xl p-8 hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 mb-6 flex items-center justify-center">
                        <img src="{{ asset('images/ГуберанторскиеШкольныеТрудовыеОтряды.png') }}" 
                             alt="Губернаторские Школьные Трудовые Отряды" 
                             class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Губернаторские Школьные Трудовые Отряды
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Педагогические отряды - Новая компактная секция -->
<section id="pedagogy-section" class="pedagogy-section relative">
    <!-- Top paper effect -->
    <div class="paper-top-effect absolute top-0 left-0 w-full z-30"></div>
    
    <!-- Background -->
    <div class="absolute inset-0 z-10" style="background-image: url('/images/ПедагогФон.png'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
    
    <!-- Content container -->
    <div class="relative z-20 flex items-center min-h-[600px]">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                
                <!-- Left side - Text content -->
                <div class="flex-1 pr-4 max-w-6xl" style="min-width: 60%;">
                    <h2 class="pedagogy-title text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        Студенческие педагогические отряды
                    </h2>
                    
                    <div class="pedagogy-content text-white space-y-4">
                        <p class="text-lg leading-relaxed">
                            Студенческие педагогические отряды МООО<br>
                            «Российские Студенческие Отряды» ежегодно:
                        </p>
                        
                        <div class="pedagogy-list text-lg space-y-2">
                            <p>• организуют летний каникулярный отдых детей и подростков;</p>
                            <p>• официально трудоустраивают студентов;</p>
                            <p>• подготавливают квалифицированные педагогические кадры для организации детского отдыха.</p>
                        </div>
                        
                        <p class="pedagogy-highlight text-lg font-medium leading-relaxed pt-2">
                            В 2023 году официальное трудоустройство получили более 57 тысяч участников СПО. Представители педагогических отрядов реализуют программы детских лагерей на всероссийских и межрегиональных проектах:
                        </p>
                    </div>
                </div>
                
                <!-- Right side - Large image extending beyond bottom paper -->
                <div class="flex-shrink-0 relative">
                    <img src="/images/БлокПедагог.png" 
                         alt="Студенческие педагогические отряды"
                         class="pedagogy-image-large">
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Bottom paper effect -->
    <div class="paper-bottom-effect absolute bottom-0 left-0 w-full z-30"></div>
</section>

@endsection