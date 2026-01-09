import './bootstrap';

// Динамический фон навигации при скролле
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const heroSection = document.querySelector('.hero-section');
    
    if (navbar && heroSection) {
        let ticking = false;
        
        function handleScroll() {
            if (!ticking) {
                requestAnimationFrame(() => {
                    const heroHeight = heroSection.offsetHeight;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    const isMobile = window.innerWidth <= 768;
                    const triggerPoint = isMobile ? heroHeight * 0.5 : heroHeight * 0.7;
                    const transitionRange = isMobile ? heroHeight * 0.2 : heroHeight * 0.3;
                    
                    if (scrollTop > triggerPoint) {
                        // Вычисляем процент перехода (0-1)
                        const progress = Math.min((scrollTop - triggerPoint) / transitionRange, 1);
                        const opacity = 0.95 * progress;
                        const blurAmount = 15 * progress;
                        const shadowOpacity = 0.1 * progress;
                        
                        // Применяем плавные стили
                        navbar.style.background = `linear-gradient(135deg, rgba(14, 165, 233, ${opacity}) 0%, rgba(2, 132, 199, ${opacity}) 25%, rgba(3, 105, 161, ${opacity}) 50%, rgba(59, 130, 246, ${opacity}) 75%, rgba(96, 165, 250, ${opacity}) 100%)`;
                        navbar.style.backdropFilter = `blur(${blurAmount}px)`;
                        navbar.style.boxShadow = `0 4px 6px -1px rgba(0, 0, 0, ${shadowOpacity}), 0 2px 4px -1px rgba(0, 0, 0, ${shadowOpacity * 0.6})`;
                        
                        navbar.classList.remove('navbar-transparent');
                        navbar.classList.add('navbar-solid');
                    } else {
                        // Полностью прозрачная навигация
                        navbar.style.background = 'rgba(14, 165, 233, 0)';
                        navbar.style.backdropFilter = 'blur(0px)';
                        navbar.style.boxShadow = 'none';
                        
                        navbar.classList.remove('navbar-solid');
                        navbar.classList.add('navbar-transparent');
                    }
                    
                    ticking = false;
                });
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // Вызываем сразу для начального состояния
    }
});

// Основной объект приложения
window.SevROWeb = {
    // Система уведомлений
    notifications: {
        container: null,
        
        init() {
            // Создаем контейнер для уведомлений, если его нет
            if (!this.container) {
                this.container = document.createElement('div');
                this.container.className = 'fixed top-4 right-4 z-50 space-y-2';
                document.body.appendChild(this.container);
            }
        },
        
        show(message, type = 'info', duration = 5000) {
            this.init();
            
            const toast = document.createElement('div');
            const bgColor = {
                success: 'bg-green-500',
                error: 'bg-red-500',
                warning: 'bg-yellow-500',
                info: 'bg-blue-500'
            }[type] || 'bg-blue-500';
            
            toast.className = `${bgColor} text-white px-4 py-3 rounded-lg shadow-lg max-w-sm toast-enter`;
            toast.innerHTML = `
                <div class="flex items-center justify-between">
                    <span>${message}</span>
                    <button class="ml-3 text-white hover:text-gray-200" onclick="this.parentElement.parentElement.remove()">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            `;
            
            this.container.appendChild(toast);
            
            // Анимация появления
            setTimeout(() => {
                toast.classList.remove('toast-enter');
                toast.classList.add('toast-enter-active');
            }, 10);
            
            // Автоматическое скрытие
            if (duration > 0) {
                setTimeout(() => {
                    this.hide(toast);
                }, duration);
            }
            
            return toast;
        },
        
        hide(toast) {
            toast.classList.remove('toast-enter-active');
            toast.classList.add('toast-exit-active');
            setTimeout(() => {
                if (toast.parentElement) {
                    toast.parentElement.removeChild(toast);
                }
            }, 300);
        },
        
        success(message, duration) {
            return this.show(message, 'success', duration);
        },
        
        error(message, duration) {
            return this.show(message, 'error', duration);
        },
        
        warning(message, duration) {
            return this.show(message, 'warning', duration);
        },
        
        info(message, duration) {
            return this.show(message, 'info', duration);
        }
    },
    
    // Модальные окна
    modal: {
        open(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
                
                // Фокус на первый элемент формы
                const firstInput = modal.querySelector('input, textarea, select');
                if (firstInput) {
                    firstInput.focus();
                }
            }
        },
        
        close(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        },
        
        closeAll() {
            document.querySelectorAll('[data-modal]').forEach(modal => {
                modal.classList.add('hidden');
            });
            document.body.classList.remove('overflow-hidden');
        }
    },
    
    // Утилиты
    utils: {
        // Копирование в буфер обмена
        copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                SevROWeb.notifications.success('Скопировано в буфер обмена');
            }).catch(() => {
                SevROWeb.notifications.error('Ошибка копирования');
            });
        },
        
        // Форматирование даты
        formatDate(date, format = 'dd.mm.yyyy') {
            const d = new Date(date);
            const day = String(d.getDate()).padStart(2, '0');
            const month = String(d.getMonth() + 1).padStart(2, '0');
            const year = d.getFullYear();
            
            return format
                .replace('dd', day)
                .replace('mm', month)
                .replace('yyyy', year);
        }
    }
};

// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация системы уведомлений
    SevROWeb.notifications.init();
    
    // Обработка закрытия модальных окон по ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            SevROWeb.modal.closeAll();
        }
    });
    
    // Обработка кликов вне модальных окон
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal-backdrop')) {
            SevROWeb.modal.closeAll();
        }
    });
    
    // Инициализация всех форм с AJAX
    document.querySelectorAll('form[data-ajax]').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Здесь будет AJAX отправка форм
            console.log('AJAX form submission:', form);
        });
    });
});

// Экспорт для глобального использования
window.toast = SevROWeb.notifications;
