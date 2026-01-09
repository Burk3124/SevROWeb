@extends('layouts.app')

@section('title', 'Профиль - SevROWeb')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Мой профиль</h1>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
                Управляйте информацией вашего профиля и настройками аккаунта
            </p>
        </div>

        <!-- Profile Content -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg">
            <div class="px-6 py-8">
                <div class="text-center">
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-3xl">U</span>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                        Пользователь
                    </h2>
                    
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        user@example.com
                    </p>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-colors duration-200"
                                onclick="SevROWeb.notifications.info('Редактирование профиля будет доступно позже')">
                            Редактировать профиль
                        </button>
                        <button class="bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-white px-6 py-2 rounded-md transition-colors duration-200"
                                onclick="SevROWeb.notifications.info('Изменение аватара будет доступно позже')">
                            Изменить аватар
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Back to Dashboard -->
        <div class="mt-8 text-center">
            <a href="{{ route('dashboard') }}" 
               class="inline-flex items-center text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Вернуться к панели управления
            </a>
        </div>
    </div>
</div>
@endsection