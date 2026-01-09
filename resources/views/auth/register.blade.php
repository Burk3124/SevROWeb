@extends('layouts.app')

@section('title', 'Регистрация - SevROWeb')
@section('description', 'Создайте аккаунт SevROWeb и получите доступ ко всем функциям платформы')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <div class="flex justify-center">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                    <span class="text-white font-bold text-2xl">S</span>
                </div>
            </div>
            <h2 class="mt-6 text-center text-3xl font-bold text-gray-900 dark:text-white">
                Создать аккаунт
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                Или 
                <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                    войдите в существующий аккаунт
                </a>
            </p>
        </div>
        
        <div class="mt-8 space-y-6">
            <!-- Social Registration -->
            <div class="space-y-4">
                <button type="button" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
                        onclick="SevROWeb.notifications.info('Регистрация через VK будет добавлена позже')">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15.684 0H8.316C1.592 0 0 1.592 0 8.316v7.368C0 22.408 1.592 24 8.316 24h7.368C22.408 24 24 22.408 24 15.684V8.316C24 1.592 22.408 0 15.684 0zm3.692 17.123h-1.744c-.66 0-.864-.525-2.05-1.727-1.033-1.033-.1485-1.161-.148-1.161s.871-.041.871-.871c0-.715-.564-1.224-1.224-1.224-.66 0-1.193.509-1.193 1.224 0 .871.148.871.148 1.161 0 1.202-.871 1.727-2.05 1.727H9.24c-2.601 0-4.91-2.16-4.91-4.91s2.309-4.91 4.91-4.91h5.52c2.601 0 4.91 2.16 4.91 4.91s-2.309 4.91-4.91 4.91z"/>
                    </svg>
                    Зарегистрироваться через ВКонтакте
                </button>
                
                <button type="button" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-400 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 transition-colors duration-200"
                        onclick="SevROWeb.notifications.info('Регистрация через Telegram будет добавлена позже')">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                    </svg>
                    Зарегистрироваться через Telegram
                </button>
            </div>
            
            <!-- Divider -->
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-gray-50 dark:bg-gray-900 text-gray-500 dark:text-gray-400">Или зарегистрируйтесь с email</span>
                </div>
            </div>
            
            <!-- Registration Form -->
            <form class="space-y-6" data-ajax>
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name" class="sr-only">Имя</label>
                        <input id="name" 
                               name="name" 
                               type="text" 
                               required 
                               class="relative block w-full px-3 py-3 border border-gray-300 dark:border-gray-600 placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-white rounded-md bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:z-10 sm:text-sm" 
                               placeholder="Ваше имя">
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" 
                               name="email" 
                               type="email" 
                               required 
                               class="relative block w-full px-3 py-3 border border-gray-300 dark:border-gray-600 placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-white rounded-md bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:z-10 sm:text-sm" 
                               placeholder="Email адрес">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Пароль</label>
                        <input id="password" 
                               name="password" 
                               type="password" 
                               required 
                               minlength="8"
                               class="relative block w-full px-3 py-3 border border-gray-300 dark:border-gray-600 placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-white rounded-md bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:z-10 sm:text-sm" 
                               placeholder="Пароль (минимум 8 символов)">
                    </div>
                    <div>
                        <label for="password_confirmation" class="sr-only">Подтвердите пароль</label>
                        <input id="password_confirmation" 
                               name="password_confirmation" 
                               type="password" 
                               required 
                               class="relative block w-full px-3 py-3 border border-gray-300 dark:border-gray-600 placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-white rounded-md bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:z-10 sm:text-sm" 
                               placeholder="Подтвердите пароль">
                    </div>
                </div>
                
                <!-- Password Strength Indicator -->
                <div id="password-strength" class="hidden">
                    <div class="text-sm text-gray-600 dark:text-gray-400 mb-2">Надежность пароля:</div>
                    <div class="flex space-x-1">
                        <div class="h-2 w-1/4 bg-gray-200 dark:bg-gray-600 rounded"></div>
                        <div class="h-2 w-1/4 bg-gray-200 dark:bg-gray-600 rounded"></div>
                        <div class="h-2 w-1/4 bg-gray-200 dark:bg-gray-600 rounded"></div>
                        <div class="h-2 w-1/4 bg-gray-200 dark:bg-gray-600 rounded"></div>
                    </div>
                    <div id="strength-text" class="text-xs text-gray-500 dark:text-gray-400 mt-1"></div>
                </div>
                
                <div class="flex items-center">
                    <input id="agree_terms" 
                           name="agree_terms" 
                           type="checkbox" 
                           required
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="agree_terms" class="ml-2 block text-sm text-gray-900 dark:text-white">
                        Я согласен с 
                        <a href="#" class="text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">условиями использования</a> 
                        и 
                        <a href="#" class="text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">политикой конфиденциальности</a>
                    </label>
                </div>
                
                <div>
                    <button type="submit" 
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        Создать аккаунт
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const passwordConfirmInput = document.getElementById('password_confirmation');
    const strengthIndicator = document.getElementById('password-strength');
    const strengthBars = strengthIndicator.querySelectorAll('.h-2');
    const strengthText = document.getElementById('strength-text');
    const submitButton = document.querySelector('button[type="submit"]');
    
    // Проверка надежности пароля
    function checkPasswordStrength(password) {
        let strength = 0;
        const checks = [
            /.{8,}/, // минимум 8 символов
            /[a-z]/, // строчные буквы
            /[A-Z]/, // заглавные буквы
            /[0-9]/, // цифры
            /[^A-Za-z0-9]/ // специальные символы
        ];
        
        checks.forEach(check => {
            if (check.test(password)) strength++;
        });
        
        return Math.min(strength - 1, 4); // 0-4
    }
    
    function updateStrengthIndicator(strength) {
        const colors = ['bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-green-500'];
        const texts = ['Слабый', 'Удовлетворительный', 'Хороший', 'Отличный'];
        
        strengthBars.forEach((bar, index) => {
            bar.className = 'h-2 w-1/4 rounded ' + 
                (index < strength ? colors[Math.min(strength - 1, 3)] : 'bg-gray-200 dark:bg-gray-600');
        });
        
        strengthText.textContent = strength > 0 ? texts[Math.min(strength - 1, 3)] : '';
    }
    
    // Обработка ввода пароля
    passwordInput.addEventListener('input', function() {
        const password = this.value;
        
        if (password.length > 0) {
            strengthIndicator.classList.remove('hidden');
            const strength = checkPasswordStrength(password);
            updateStrengthIndicator(strength);
        } else {
            strengthIndicator.classList.add('hidden');
        }
        
        validatePasswords();
    });
    
    // Проверка совпадения паролей
    function validatePasswords() {
        const password = passwordInput.value;
        const confirmPassword = passwordConfirmInput.value;
        const agreeTerms = document.getElementById('agree_terms').checked;
        
        if (confirmPassword.length > 0) {
            if (password === confirmPassword) {
                passwordConfirmInput.classList.remove('border-red-500');
                passwordConfirmInput.classList.add('border-green-500');
            } else {
                passwordConfirmInput.classList.remove('border-green-500');
                passwordConfirmInput.classList.add('border-red-500');
            }
        } else {
            passwordConfirmInput.classList.remove('border-red-500', 'border-green-500');
        }
        
        // Активация кнопки отправки
        const isValid = password.length >= 8 && 
                       password === confirmPassword && 
                       agreeTerms;
        
        submitButton.disabled = !isValid;
    }
    
    passwordConfirmInput.addEventListener('input', validatePasswords);
    document.getElementById('agree_terms').addEventListener('change', validatePasswords);
    
    // Обработка формы регистрации
    const registrationForm = document.querySelector('form[data-ajax]');
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Имитация регистрации (позже заменим на реальную логику)
            SevROWeb.notifications.success('Регистрация успешна! Перенаправляем...');
            
            // Для демонстрации - редирект через 2 секунды
            setTimeout(() => {
                window.location.href = '{{ route("home") }}';
            }, 2000);
        });
    }
});
</script>
@endpush