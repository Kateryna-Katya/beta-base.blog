/**
 * Project: <?= $domainTitle ?>
 * Final Optimized Script
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // === 1. Инициализация иконок Lucide ===
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // === 2. Навигация и Мобильное меню ===
    const header = document.querySelector('#header');
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelectorAll('.nav__link');
    const body = document.body;

    // Скролл-эффект хедера
    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // Переключение бургера
    const toggleMenu = () => {
        header.classList.toggle('header--menu-open');
        body.style.overflow = header.classList.contains('header--menu-open') ? 'hidden' : '';
    };

    burger?.addEventListener('click', toggleMenu);

    // Закрытие при клике на ссылку
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            header.classList.remove('header--menu-open');
            body.style.overflow = '';
        });
    });

    // === 3. Физика "AI" в Hero (Matter.js) ===
    const initHeroPhysics = () => {
        const container = document.querySelector('#ai-physics-container');
        if (!container) return;

        const loadMatter = document.createElement('script');
        loadMatter.src = 'https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js';
        document.head.appendChild(loadMatter);

        loadMatter.onload = () => {
            const { Engine, Render, Runner, Bodies, Composite, Mouse, MouseConstraint } = Matter;
            
            const engine = Engine.create();
            const render = Render.create({
                element: container,
                engine: engine,
                options: {
                    width: window.innerWidth,
                    height: window.innerHeight,
                    wireframes: false,
                    background: 'transparent',
                    pixelRatio: window.devicePixelRatio
                }
            });

            // Границы
            const ground = Bodies.rectangle(window.innerWidth/2, window.innerHeight + 50, window.innerWidth, 100, { isStatic: true });
            
            // Создание блоков "AI"
            const aiBlocks = Array.from({ length: 20 }, () => {
                return Bodies.rectangle(
                    Math.random() * window.innerWidth, 
                    -Math.random() * 500, 
                    60, 30, 
                    { 
                        chamfer: { radius: 8 },
                        render: { fillStyle: 'transparent' }
                    }
                );
            });

            // Взаимодействие с мышью
            const mouse = Mouse.create(render.canvas);
            const mouseConstraint = MouseConstraint.create(engine, {
                mouse: mouse,
                constraint: { stiffness: 0.2, render: { visible: false } }
            });

            Composite.add(engine.world, [ground, ...aiBlocks, mouseConstraint]);
            
            Render.run(render);
            Runner.run(Runner.create(), engine);

            // Кастомный рендер текста AI поверх тел
            (function renderLoop() {
                const ctx = render.context;
                ctx.font = "bold 18px 'Plus Jakarta Sans'";
                ctx.fillStyle = "#00D4FF";
                ctx.textAlign = "center";
                
                aiBlocks.forEach(block => {
                    const { x, y } = block.position;
                    ctx.save();
                    ctx.translate(x, y);
                    ctx.rotate(block.angle);
                    ctx.fillText("AI", 0, 6);
                    ctx.restore();
                });
                requestAnimationFrame(renderLoop);
            })();
        };
    };
    initHeroPhysics();

    // === 4. Анимация появления карточек и Счетчиков ===
    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Если это счетчик
                if (entry.target.classList.contains('stat-card__val')) {
                    const targetVal = parseInt(entry.target.innerText);
                    animateNumber(entry.target, targetVal);
                } 
                // Если это карточка
                else {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
                scrollObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    const animateNumber = (el, target) => {
        let current = 0;
        const suffix = el.innerText.includes('%') ? '%' : '+';
        const step = target / 50;
        const update = () => {
            current += step;
            if (current < target) {
                el.innerText = Math.floor(current) + suffix;
                requestAnimationFrame(update);
            } else {
                el.innerText = target + suffix;
            }
        };
        update();
    };

    document.querySelectorAll('.solution-card, .step-item, .stat-card__val').forEach(el => {
        if (!el.classList.contains('stat-card__val')) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
        }
        scrollObserver.observe(el);
    });

    // === 5. Обработка формы и Валидация телефона ===
    const contactForm = document.querySelector('#ai-contact-form');
    const phoneInput = document.querySelector('#phone-input');

    if (phoneInput) {
        // Запрет на ввод всего, кроме цифр
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });
    }

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const statusBox = document.querySelector('#form-status');
            const btn = contactForm.querySelector('button');
            
            // Имитация отправки
            btn.disabled = true;
            btn.innerText = "Отправка...";
            
            setTimeout(() => {
                statusBox.innerText = "Запрос успешно отправлен! Мы свяжемся с вами.";
                statusBox.className = "form__status form__status--success";
                contactForm.reset();
                btn.disabled = false;
                btn.innerText = "Запросить доступ";
                
                setTimeout(() => { statusBox.style.display = 'none'; }, 5000);
            }, 1500);
        });
    }

    // === 6. Cookie Popup ===
    const cookiePopup = document.querySelector('#cookie-popup');
    const cookieBtn = document.querySelector('#cookie-accept');

    if (cookiePopup && !localStorage.getItem('ai_cookies_accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 3000);
    }

    cookieBtn?.addEventListener('click', () => {
        localStorage.setItem('ai_cookies_accepted', 'true');
        cookiePopup.classList.remove('cookie-popup--active');
    });

});