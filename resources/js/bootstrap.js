import axios from 'axios';
import Alpine from 'alpinejs';

window.axios = axios;
window.Alpine = Alpine;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Инициализация Alpine.js
Alpine.start();

// Альтернативный JavaScript для мобильного меню (если Alpine.js не работает)
document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, работает ли Alpine.js
    setTimeout(() => {
        const mobileMenuButton = document.querySelector('[data-mobile-menu-button]');
        const mobileMenu = document.querySelector('[data-mobile-menu]');
        
        if (mobileMenuButton && mobileMenu && !window.Alpine) {
            console.log('Использую альтернативный JavaScript для мобильного меню');
            
            let isOpen = false;
            
            mobileMenuButton.addEventListener('click', function() {
                isOpen = !isOpen;
                
                if (isOpen) {
                    mobileMenu.style.display = 'block';
                    mobileMenu.classList.remove('opacity-0', '-translate-y-1');
                    mobileMenu.classList.add('opacity-100', 'translate-y-0');
                } else {
                    mobileMenu.classList.remove('opacity-100', 'translate-y-0');
                    mobileMenu.classList.add('opacity-0', '-translate-y-1');
                    setTimeout(() => {
                        if (!isOpen) {
                            mobileMenu.style.display = 'none';
                        }
                    }, 150);
                }
                
                // Обновляем иконку
                const hamburgerIcon = mobileMenuButton.querySelector('[data-hamburger-icon]');
                const closeIcon = mobileMenuButton.querySelector('[data-close-icon]');
                
                if (hamburgerIcon && closeIcon) {
                    if (isOpen) {
                        hamburgerIcon.style.display = 'none';
                        closeIcon.style.display = 'block';
                    } else {
                        hamburgerIcon.style.display = 'block';
                        closeIcon.style.display = 'none';
                    }
                }
            });
            
            // Закрываем меню при клике вне его
            document.addEventListener('click', function(e) {
                if (isOpen && !mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                    isOpen = false;
                    mobileMenu.classList.remove('opacity-100', 'translate-y-0');
                    mobileMenu.classList.add('opacity-0', '-translate-y-1');
                    setTimeout(() => {
                        if (!isOpen) {
                            mobileMenu.style.display = 'none';
                        }
                    }, 150);
                    
                    const hamburgerIcon = mobileMenuButton.querySelector('[data-hamburger-icon]');
                    const closeIcon = mobileMenuButton.querySelector('[data-close-icon]');
                    
                    if (hamburgerIcon && closeIcon) {
                        hamburgerIcon.style.display = 'block';
                        closeIcon.style.display = 'none';
                    }
                }
            });
        }
    }, 100);
});
