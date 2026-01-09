@extends('layouts.app')

@section('title', 'Отряды Севастополя - РСО')
@section('description', 'Российские студенческие отряды Севастополя - с нами ты можешь больше! Присоединяйся к команде единомышленников.')

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
                ОТРЯДЫ СЕВАСТОПОЛЯ
            </h1>
            
            <p class="font-body text-lg sm:text-xl md:text-2xl lg:text-3xl text-white/90 mb-8 sm:mb-12 leading-relaxed font-medium text-center px-4">
                С нами ты можешь больше!
            </p>
        </div>
    </div>
</section>

<!-- About Section with Tag Cloud -->
<section id="about" class="content-section-first relative py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
            Российские студенческие отряды
        </h2>
        
        <p class="text-xl text-gray-600 max-w-4xl mx-auto mb-12 leading-relaxed">
            Здесь рождаются идеи, крепнут мечты и закаляется характер. Мы объединяем тех, кто не боится действовать, учиться, дружить и менять мир вокруг!
        </p>
        
        <!-- Animated Tag Cloud - 3 Lines -->
        <div class="tag-cloud-container w-full overflow-hidden mb-12 relative">
            <!-- First Line -->
            <div class="tag-cloud-scroll mb-4">
                <div class="tag-cloud-track tag-line-1">
                    <span class="tag-item">дружба</span>
                    <span class="tag-item">возможности</span>
                    <span class="tag-item">патриотизм</span>
                    <span class="tag-item">команда</span>
                    <span class="tag-item">профессионализм</span>
                    <span class="tag-item">традиции</span>
                    <span class="tag-item">дружба</span>
                    <span class="tag-item">возможности</span>
                    <span class="tag-item">патриотизм</span>
                    <span class="tag-item">команда</span>
                    <span class="tag-item">профессионализм</span>
                    <span class="tag-item">традиции</span>
                    <span class="tag-item">дружба</span>
                    <span class="tag-item">возможности</span>
                    <span class="tag-item">патриотизм</span>
                    <span class="tag-item">команда</span>
                    <span class="tag-item">профессионализм</span>
                    <span class="tag-item">традиции</span>
                </div>
            </div>
            
            <!-- Second Line -->
            <div class="tag-cloud-scroll mb-4">
                <div class="tag-cloud-track tag-line-2">
                    <span class="tag-item">веселье</span>
                    <span class="tag-item">лидерство</span>
                    <span class="tag-item">работа</span>
                    <span class="tag-item">будущее</span>
                    <span class="tag-item">энергия</span>
                    <span class="tag-item">опыт</span>
                    <span class="tag-item">веселье</span>
                    <span class="tag-item">лидерство</span>
                    <span class="tag-item">работа</span>
                    <span class="tag-item">будущее</span>
                    <span class="tag-item">энергия</span>
                    <span class="tag-item">опыт</span>
                    <span class="tag-item">веселье</span>
                    <span class="tag-item">лидерство</span>
                    <span class="tag-item">работа</span>
                    <span class="tag-item">будущее</span>
                    <span class="tag-item">энергия</span>
                    <span class="tag-item">опыт</span>
                </div>
            </div>
            
            <!-- Third Line -->
            <div class="tag-cloud-scroll">
                <div class="tag-cloud-track tag-line-3">
                    <span class="tag-item">поддержка</span>
                    <span class="tag-item">семья</span>
                    <span class="tag-item">единство</span>
                    <span class="tag-item">труд</span>
                    <span class="tag-item">творчество</span>
                    <span class="tag-item">мечты</span>
                    <span class="tag-item">поддержка</span>
                    <span class="tag-item">семья</span>
                    <span class="tag-item">единство</span>
                    <span class="tag-item">труд</span>
                    <span class="tag-item">творчество</span>
                    <span class="tag-item">мечты</span>
                    <span class="tag-item">поддержка</span>
                    <span class="tag-item">семья</span>
                    <span class="tag-item">единство</span>
                    <span class="tag-item">труд</span>
                    <span class="tag-item">творчество</span>
                    <span class="tag-item">мечты</span>
                </div>
            </div>
        </div>
        
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-200 transform hover:scale-105 shadow-lg"
                onclick="SevROWeb.notifications.success('Скоро ты станешь частью нашей команды!')">
            Зажги свою искру!
        </button>
    </div>
</section>

<!-- RSO Info Section with Background Image -->
<section class="relative rso-info-section rso-bg-responsive" style="background-image: url('/images/PhotoBack1.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <!-- Torn Paper Top Effect -->
    <div class="torn-paper-top"></div>
    <div class="relative z-10 h-full pb-8">
        <div class="container mx-auto px-4 h-full">
            <div class="flex flex-col lg:flex-row items-center justify-center h-full gap-8 lg:gap-16">
                <!-- Photo Section -->
                <div class="flex-shrink-0">
                    <div class="rso-photo-container mx-auto">
                        <img src="/images/PhotoMain1.png" 
                             alt="Участники РСО Севастополя" 
                             class="w-full h-auto object-contain">
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="flex-1 text-center max-w-2xl mx-auto">
                    <h2 class="rso-title font-heading font-bold text-white mb-6 leading-tight">
                        РСО — больше, чем работа
                    </h2>
                    <div class="rso-content text-white leading-relaxed">
                        <p class="mb-6">
                            Работаем, развиваемся, учимся, дружим,<br>
                            путешествуем и растём вместе. За нашими<br>
                            плечами — масштабные стройки, детские<br>
                            лагеря, медицинские практики, цифровые<br>
                            проекты и сотни историй успеха.
                        </p>
                        <p class="font-medium rso-highlight">
                            Мы не стоим на месте — мы создаём движение,<br>
                            которое вдохновляет.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Torn Paper Bottom Effect -->
    <div class="torn-paper-bottom"></div>
</section>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <!-- Место для настоящего изображения:
                                <img src="/images/rso-team-photo.jpg" alt="Студенческие отряды Севастополя" class="w-full h-full object-cover">
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why RSO is Cool Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Почему РСО это КРУТО?
            </h2>
        </div>
        
        <!-- Modern Slider -->
        <div class="rso-slider relative" x-data="rsoSlider()">
            <!-- Desktop: One big card with slider, as in mockup -->
            <div class="hidden md:block max-w-4xl mx-auto">
                <div class="relative overflow-hidden rounded-3xl shadow-2xl bg-white">
                    <!-- Slider container -->
                    <div class="slider-container relative">
                        <div class="slider-track relative">
                            <!-- Slide 1 - Family -->
                            <div class="slider-slide" :class="{ 'hidden': currentSlide !== 0 }">
                                <div class="relative">
                                    <!-- Big image area -->
                                    <div class="aspect-[16/9] lg:aspect-[21/9] w-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center relative">
                                        <img src="{{ asset('images/rso-family.jpg') }}" 
                                             alt="Семья РСО" 
                                             class="w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-500"
                                             onload="this.style.opacity = '1'"
                                             onerror="this.style.display = 'none'">
                                        <!-- Fallback content -->
                                        <div class="text-center z-10">
                                            <div class="w-24 h-24 mx-auto mb-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text overlay -->
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent p-8">
                                        <div class="max-w-md">
                                            <h3 class="text-2xl font-bold text-white mb-3">Семья</h3>
                                            <p class="text-white/90 leading-relaxed">Отряд - это не только работа, но и люди, которые становятся не просто друзьями, а самой настоящей семьей!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 - Experience -->
                            <div class="slider-slide" :class="{ 'hidden': currentSlide !== 1 }">
                                <div class="relative">
                                    <!-- Big image area -->
                                    <div class="aspect-[16/9] lg:aspect-[21/9] w-full bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center relative">
                                        <img src="{{ asset('images/rso-work.jpg') }}" 
                                             alt="Опыт работы РСО" 
                                             class="w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-500"
                                             onload="this.style.opacity = '1'"
                                             onerror="this.style.display = 'none'">
                                        <!-- Fallback content -->
                                        <div class="text-center z-10">
                                            <div class="w-24 h-24 mx-auto mb-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 00-2 2H8a2 2 0 00-2-2V4m8 0H8m0 0v.01M8 4.01V4M16 4v.01M16 4.01V4m0 0h.01M15.99 4H16"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text overlay -->
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent p-8">
                                        <div class="max-w-md">
                                            <h3 class="text-2xl font-bold text-white mb-3">Опыт</h3>
                                            <p class="text-white/90 leading-relaxed">Получи ценный опыт работы в различных сферах, развивай профессиональные навыки и строй успешное будущее!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 - Adventures -->
                            <div class="slider-slide" :class="{ 'hidden': currentSlide !== 2 }">
                                <div class="relative">
                                    <!-- Big image area -->
                                    <div class="aspect-[16/9] lg:aspect-[21/9] w-full bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center relative">
                                        <img src="{{ asset('images/rso-adventures.jpg') }}" 
                                             alt="Приключения РСО" 
                                             class="w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-500"
                                             onload="this.style.opacity = '1'"
                                             onerror="this.style.display = 'none'">
                                        <!-- Fallback content -->
                                        <div class="text-center z-10">
                                            <div class="w-24 h-24 mx-auto mb-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text overlay -->
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent p-8">
                                        <div class="max-w-md">
                                            <h3 class="text-2xl font-bold text-white mb-3">Приключения</h3>
                                            <p class="text-white/90 leading-relaxed">Путешествуй по всей России, открывай новые места и живи яркими незабываемыми моментами!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation arrows -->
                        <button @click="prevSlide()" 
                                class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button @click="nextSlide()" 
                                class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Desktop Navigation dots -->
                    <div class="flex justify-center items-center p-6 space-x-3">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="goToSlide(index)" 
                                    :class="currentSlide === index ? 'bg-blue-600 scale-110' : 'bg-gray-300 hover:bg-gray-400'"
                                    class="w-3 h-3 rounded-full transition-all duration-200"></button>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Mobile Slider -->
            <div class="md:hidden">
                <div class="slider-container overflow-hidden">
                    <div class="slider-track flex transition-transform duration-300 ease-in-out" 
                         :style="`transform: translateX(-${currentSlide * 100}%)`">
                        <!-- Mobile Slide 1 -->
                        <div class="slider-slide w-full flex-shrink-0 px-4">
                            <div class="rso-card">
                                <div class="relative overflow-hidden rounded-2xl shadow-lg bg-white">
                                    <div class="aspect-video w-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center relative">
                                        <img src="{{ asset('images/rso-family.jpg') }}" 
                                             alt="Семья РСО" 
                                             class="w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-300"
                                             onload="this.style.opacity = '1'"
                                             onerror="this.style.display = 'none'">
                                        <div class="text-center z-10">
                                            <div class="w-16 h-16 mx-auto mb-4 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-xl font-bold text-white mb-2">Семья</h3>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <p class="text-gray-600 leading-relaxed">Отряд - это не только работа, но и люди, которые становятся не просто друзьями, а самой настоящей семьей!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Slide 2 -->
                        <div class="slider-slide w-full flex-shrink-0 px-4">
                            <div class="rso-card">
                                <div class="relative overflow-hidden rounded-2xl shadow-lg bg-white">
                                    <div class="aspect-video w-full bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center relative">
                                        <img src="{{ asset('images/rso-work.jpg') }}" 
                                             alt="Опыт работы РСО" 
                                             class="w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-300"
                                             onload="this.style.opacity = '1'"
                                             onerror="this.style.display = 'none'">
                                        <div class="text-center z-10">
                                            <div class="w-16 h-16 mx-auto mb-4 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 00-2 2H8a2 2 0 00-2-2V4m8 0H8m0 0v.01M8 4.01V4M16 4v.01M16 4.01V4m0 0h.01M15.99 4H16"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-xl font-bold text-white mb-2">Опыт</h3>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <p class="text-gray-600 leading-relaxed">Получи ценный опыт работы в различных сферах, развивай профессиональные навыки и строй успешное будущее!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Slide 3 -->
                        <div class="slider-slide w-full flex-shrink-0 px-4">
                            <div class="rso-card">
                                <div class="relative overflow-hidden rounded-2xl shadow-lg bg-white">
                                    <div class="aspect-video w-full bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center relative">
                                        <img src="{{ asset('images/rso-adventures.jpg') }}" 
                                             alt="Приключения РСО" 
                                             class="w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-300"
                                             onload="this.style.opacity = '1'"
                                             onerror="this.style.display = 'none'">
                                        <div class="text-center z-10">
                                            <div class="w-16 h-16 mx-auto mb-4 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-xl font-bold text-white mb-2">Приключения</h3>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <p class="text-gray-600 leading-relaxed">Путешествуй по всей России, открывай новые места и живи яркими незабываемыми моментами!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <div class="flex justify-center items-center mt-8 space-x-4">
                    <!-- Previous Button -->
                    <button @click="prevSlide()" 
                            class="p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <!-- Dots -->
                    <div class="flex space-x-2">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="goToSlide(index)" 
                                    :class="currentSlide === index ? 'bg-blue-600' : 'bg-gray-300'"
                                    class="w-3 h-3 rounded-full transition-colors"></button>
                        </template>
                    </div>
                    
                    <!-- Next Button -->
                    <button @click="nextSlide()" 
                            class="p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Join Section -->
<section class="py-20 bg-gradient-to-br from-blue-100 to-cyan-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Как к нам попасть?
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="step-card text-center">
                <div class="step-number">1</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Оставляй заявку на сайте</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Заполни простую форму на нашем сайте с основной информацией о себе
                </p>
                <button class="mt-4 text-blue-600 hover:text-blue-700 font-medium text-sm"
                        onclick="SevROWeb.notifications.info('Форма заявки скоро будет доступна')">
                    Подать заявку →
                </button>
            </div>
            
            <!-- Step 2 -->
            <div class="step-card text-center">
                <div class="step-number">2</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Мы свяжемся с тобой</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Наш координатор свяжется с тобой для уточнения деталей
                </p>
            </div>
            
            <!-- Step 3 -->
            <div class="step-card text-center">
                <div class="step-number">3</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Выбирай интересное направление</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Педагогические, строительные, сервисные и другие отряды
                </p>
            </div>
            
            <!-- Step 4 -->
            <div class="step-card text-center">
                <div class="step-number">4</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Приходи на собеседование</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Знакомство с команды и окончательное зачисление в отряд
                </p>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Будь в курсе последних событий
            </h2>
        </div>
        
        <!-- News Slider -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" x-data="newsSlider()">
            <!-- News Card 1 -->
            <div class="news-card">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="p-4">
                    <span class="text-xs text-gray-500 font-medium">8 ЯНВАРЯ 2026</span>
                    <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Открытие зимнего трудового семестра</h3>
                    <p class="text-xs text-gray-600">Старт новых проектов и программ развития</p>
                </div>
            </div>
            
            <!-- News Card 2 -->
            <div class="news-card">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="p-4">
                    <span class="text-xs text-gray-500 font-medium">5 ЯНВАРЯ 2026</span>
                    <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Подведение итогов 2025 года</h3>
                    <p class="text-xs text-gray-600">Награждение лучших бойцов студенческих отрядов</p>
                </div>
            </div>
            
            <!-- News Card 3 -->
            <div class="news-card">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="p-4">
                    <span class="text-xs text-gray-500 font-medium">1 ЯНВАРЯ 2026</span>
                    <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Новогодние поздравления</h3>
                    <p class="text-xs text-gray-600">Поздравления с Новым годом от всех отрядов</p>
                </div>
            </div>
            
            <!-- News Card 4 -->
            <div class="news-card">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <div class="p-4">
                    <span class="text-xs text-gray-500 font-medium">28 ДЕКАБРЯ 2025</span>
                    <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Конкурс лучших проектов</h3>
                    <p class="text-xs text-gray-600">Финал конкурса социальных проектов года</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Готов изменить свою жизнь?
        </h2>
        <p class="text-xl text-white/95 mb-12 leading-relaxed">
            Присоединяйся к студенческим отрядам Севастополя и открой новые горизонты!
        </p>
        
        @guest
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="{{ route('register') }}" 
               class="bg-white text-blue-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-200 transform hover:scale-105 shadow-lg">
                Вступить в отряд
            </a>
            <a href="#" 
               class="btn-secondary">
                Связаться с нами
            </a>
        </div>
        @else
        <a href="{{ route('dashboard') }}" 
           class="bg-white text-blue-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-200 transform hover:scale-105 shadow-lg inline-block">
            Перейти в личный кабинет
        </a>
        @endguest
    </div>
</section>
@endsection

@push('scripts')
<script>
// RSO Slider functionality
function rsoSlider() {
    return {
        currentSlide: 0,
        slides: [1, 2, 3],
        autoSlideInterval: null,
        
        init() {
            // Auto-slide every 6 seconds for both desktop and mobile
            this.startAutoSlide();
            
            // Pause on hover (desktop only)
            if (window.innerWidth >= 768) {
                this.$el.addEventListener('mouseenter', () => this.stopAutoSlide());
                this.$el.addEventListener('mouseleave', () => this.startAutoSlide());
            }
        },
        
        startAutoSlide() {
            this.stopAutoSlide(); // Clear any existing interval
            this.autoSlideInterval = setInterval(() => {
                this.nextSlide();
            }, 6000);
        },
        
        stopAutoSlide() {
            if (this.autoSlideInterval) {
                clearInterval(this.autoSlideInterval);
                this.autoSlideInterval = null;
            }
        },
        
        goToSlide(index) {
            this.currentSlide = index;
            this.startAutoSlide(); // Restart auto-slide after manual navigation
        },
        
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            this.startAutoSlide(); // Restart auto-slide after manual navigation
        },
        
        prevSlide() {
            this.currentSlide = this.currentSlide === 0 ? this.slides.length - 1 : this.currentSlide - 1;
            this.startAutoSlide(); // Restart auto-slide after manual navigation
        }
    }
}

// News slider functionality
function newsSlider() {
    return {
        init() {
            console.log('News slider initialized');
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80; // учитываем высоту навбара
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Tag cloud hover effect
    document.querySelectorAll('.tag-item').forEach(tag => {
        tag.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) translateY(-5px)';
        });
        
        tag.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) translateY(0)';
        });
    });
    
    // Welcome message
    setTimeout(() => {
        SevROWeb.notifications.success('Добро пожаловать в отряды Севастополя!', 4000);
    }, 1000);
    
    // Image loading error handling
    document.querySelectorAll('.rso-card img').forEach(img => {
        img.addEventListener('error', function() {
            this.style.display = 'none';
        });
    });
    
    // Touch/swipe support for mobile slider
    let touchStartX = 0;
    let touchEndX = 0;
    
    document.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    document.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        if (touchEndX < touchStartX - 50) {
            // Swipe left - next slide
            const sliderElement = document.querySelector('[x-data="rsoSlider()"]');
            if (sliderElement) {
                sliderElement._x_dataStack[0].nextSlide();
            }
        }
        if (touchEndX > touchStartX + 50) {
            // Swipe right - previous slide
            const sliderElement = document.querySelector('[x-data="rsoSlider()"]');
            if (sliderElement) {
                sliderElement._x_dataStack[0].prevSlide();
            }
        }
    }
});
</script>
@endpush