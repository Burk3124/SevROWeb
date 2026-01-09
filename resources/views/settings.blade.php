@extends('layouts.app')

@section('title', 'Настройки - SevROWeb')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Настройки</h1>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
                Управляйте настройками вашего аккаунта и приложения
            </p>
        </div>

        <!-- Settings Content -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg">
            <div class="px-6 py-8">
                <div class="space-y-8">
                    <!-- Theme Settings -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                            Внешний вид
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-700 dark:text-gray-300">Темная тема</span>
                                <button type="button" 
                                        class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-gray-200"
                                        onclick="SevROWeb.notifications.info('Переключение темы будет доступно позже')">
                                    <span class="translate-x-0 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Notification Settings -->
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-8">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                            Уведомления
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-gray-700 dark:text-gray-300">Email уведомления</span>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Получать уведомления на почту</p>
                                </div>
                                <button type="button" 
                                        class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-blue-600"
                                        onclick="SevROWeb.notifications.info('Настройки уведомлений будут доступны позже')">
                                    <span class="translate-x-5 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                </button>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-gray-700 dark:text-gray-300">Push уведомления</span>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Получать push-уведомления в браузере</p>
                                </div>
                                <button type="button" 
                                        class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-blue-600"
                                        onclick="SevROWeb.notifications.info('Настройки уведомлений будут доступны позже')">
                                    <span class="translate-x-5 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Privacy Settings -->
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-8">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                            Конфиденциальность
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-gray-700 dark:text-gray-300">Публичный профиль</span>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Разрешить другим видеть ваш профиль</p>
                                </div>
                                <button type="button" 
                                        class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-gray-200"
                                        onclick="SevROWeb.notifications.info('Настройки приватности будут доступны позже')">
                                    <span class="translate-x-0 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Save Button -->
                <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                    <button type="button" 
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-colors duration-200"
                            onclick="SevROWeb.notifications.success('Настройки сохранены!')">
                        Сохранить настройки
                    </button>
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