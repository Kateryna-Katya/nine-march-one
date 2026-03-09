/**
 * Фронтенд-логика для <?= $domainTitle ?>
 * Стек: Vanilla JS + Anime.js + AOS.js
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================
    // 1. ГЛОБАЛЬНЫЕ НАСТРОЙКИ И HEADER
    // ==========================================
    
    // Инициализация AOS (появление блоков при скролле)
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        easing: 'ease-out-quart'
    });

    const header = document.getElementById('header');
    
    // Стеклянный эффект хедера при скролле
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Мягкое появление самого хедера
    anime({
        targets: '.header',
        translateY: [-100, 0],
        opacity: [0, 1],
        duration: 1200,
        easing: 'easeOutExpo',
        delay: 200
    });


    // ==========================================
    // 2. HERO СЕКЦИЯ (ГЛАВНЫЙ ЭКРАН)
    // ==========================================

    // Исправленная анимация заголовка (защита от разрыва слов)
    const title = document.querySelector('.hero__title .letters');
    if (title) {
        const words = title.textContent.split(' ');
        title.innerHTML = ''; 

        words.forEach(word => {
            const wordSpan = document.createElement('span');
            wordSpan.style.display = 'inline-block';
            wordSpan.style.whiteSpace = 'nowrap'; // Чтобы слово не разрывалось внутри
            
            // Оборачиваем каждую букву внутри слова
            wordSpan.innerHTML = word.replace(/\S/g, "<span class='letter' style='display:inline-block'>$&</span>");
            
            title.appendChild(wordSpan);
            title.appendChild(document.createTextNode(' ')); // Возвращаем пробел между словами
        });

        const heroTimeline = anime.timeline({ loop: false });

        heroTimeline
            .add({
                targets: '.hero__title .letter',
                scale: [4, 1],
                opacity: [0, 1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70 * i
            })
            .add({
                targets: '.hero__subtitle',
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 800,
                easing: 'easeOutQuad',
                offset: '-=600'
            })
            .add({
                targets: '.hero__actions .btn',
                opacity: [0, 1],
                translateX: [-20, 0],
                delay: anime.stagger(150),
                duration: 800,
                easing: 'easeOutQuad',
                offset: '-=400'
            });
    }

    // Дрейф фоновых абстрактных фигур
    anime({
        targets: '.shape',
        translateX: () => anime.random(-50, 50),
        translateY: () => anime.random(-50, 50),
        scale: () => anime.random(0.9, 1.1),
        duration: 4000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine'
    });


    // ==========================================
    // 3. ИНТЕРАКТИВ СЕКЦИЙ (STRATEGY & INNOVATION)
    // ==========================================

    // Ховер на карточки стратегии
    const strategyCards = document.querySelectorAll('.strategy-card');
    strategyCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            anime({
                targets: card.querySelector('.strategy-card__icon'),
                scale: 1.2,
                rotate: '15deg',
                duration: 400,
                easing: 'easeOutQuad'
            });
        });
        card.addEventListener('mouseleave', () => {
            anime({
                targets: card.querySelector('.strategy-card__icon'),
                scale: 1,
                rotate: '0deg',
                duration: 400,
                easing: 'easeOutQuad'
            });
        });
    });

    // Орбита инноваций (вращение системы)
    anime({
        targets: '.tech-orbit',
        rotate: '1turn',
        duration: 25000,
        easing: 'linear',
        loop: true
    });

    // Компенсация вращения иконок (чтобы не были "вверх ногами")
    anime({
        targets: '.orbit__node i',
        rotate: '-1turn',
        duration: 25000,
        easing: 'linear',
        loop: true
    });


    // ==========================================
    // 4. SCROLL TRIGGERS (INSIGHTS & ABOUT)
    // ==========================================

    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Анимация прогресс-бара Аналитики
                if (entry.target.classList.contains('insights')) {
                    const bar = entry.target.querySelector('.data-bar-fill');
                    anime({
                        targets: bar,
                        width: bar.getAttribute('data-target') + '%',
                        duration: 2000,
                        easing: 'easeInOutQuart'
                    });
                }
                
                // Анимация счетчиков и SVG-пути в "О нас"
                if (entry.target.classList.contains('about')) {
                    animateCounters();
                    anime({
                        targets: '.about__path path',
                        strokeDashoffset: [anime.setDashoffset, 0],
                        easing: 'easeInOutSine',
                        duration: 2500
                    });
                }
                scrollObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    document.querySelectorAll('.insights, .about').forEach(el => scrollObserver.observe(el));

    function animateCounters() {
        document.querySelectorAll('.achievement__val').forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            anime({
                targets: counter,
                innerHTML: [0, target],
                round: 1,
                duration: 2000,
                easing: 'easeOutExpo',
                update: (anim) => {
                    const isPercent = counter.innerText.includes('%');
                    counter.innerHTML = Math.round(anim.animations[0].currentValue) + (isPercent ? '%' : '');
                }
            });
        });
    }


const burger = document.getElementById('burger-menu');
const mobileOverlay = document.getElementById('mobile-overlay');
const mobileLinks = document.querySelectorAll('.mobile-nav a');

if (burger && mobileOverlay) {
    burger.addEventListener('click', (e) => {
        e.preventDefault(); // Предотвращаем прыжки страницы
        burger.classList.toggle('burger--active');
        mobileOverlay.classList.toggle('mobile-overlay--active');
        
        // Блокируем скролл основной страницы при открытом меню
        if (mobileOverlay.classList.contains('mobile-overlay--active')) {
            document.body.style.overflow = 'hidden';
            
            anime({
                targets: '.mobile-nav li',
                opacity: [0, 1],
                translateX: [50, 0],
                delay: anime.stagger(80, {start: 200}),
                easing: 'easeOutExpo'
            });
        } else {
            document.body.style.overflow = '';
        }
    });
}

// Закрытие при клике на ссылки (важно для одностраничников)
mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
        burger.classList.remove('burger--active');
        mobileOverlay.classList.remove('mobile-overlay--active');
        document.body.style.overflow = '';
    });
});

    // ==========================================
    // 6. КОНТАКТНАЯ ФОРМА И КАПЧА
    // ==========================================

    const contactForm = document.getElementById('ajax-form');
    if (contactForm) {
        const n1 = Math.floor(Math.random() * 9) + 1;
        const n2 = Math.floor(Math.random() * 9) + 1;
        const captchaLabel = document.getElementById('captcha-question');
        if(captchaLabel) captchaLabel.innerText = `${n1} + ${n2}`;

        // Только цифры в поле телефона
        document.getElementById('phone-input').addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const captchaInput = document.getElementById('captcha-answer').value;

            if (parseInt(captchaInput) !== (n1 + n2)) {
                alert('Неверный ответ на математический пример.');
                return;
            }

            const btn = contactForm.querySelector('button');
            btn.innerText = 'Отправка...';
            btn.disabled = true;

            // Имитация AJAX-отправки
            setTimeout(() => {
                contactForm.style.opacity = '0.3';
                contactForm.style.pointerEvents = 'none';
                const success = document.getElementById('form-success');
                success.style.display = 'flex';
                
                anime({
                    targets: success,
                    scale: [0.8, 1],
                    opacity: [0, 1],
                    duration: 600,
                    easing: 'easeOutBack'
                });
            }, 1500);
        });
    }


    // ==========================================
    // 7. COOKIE POPUP
    // ==========================================

    const cookiePopup = document.getElementById('cookie-popup');
    if (cookiePopup && !localStorage.getItem('nine_march_cookie_status')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 3000);
    }

    const acceptBtn = document.getElementById('cookie-accept');
    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('nine_march_cookie_status', 'accepted');
            cookiePopup.classList.remove('cookie-popup--active');
        });
    }

});