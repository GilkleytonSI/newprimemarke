// ==========================================
// 2. INICIALIZAÇÃO E LÓGICA PRINCIPAL
// ==========================================

// Ocultar Loading Elegante quando a página carregar
window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    if(loader) {
        loader.style.opacity = '0';
        setTimeout(() => loader.style.display = 'none', 500);
    }
});

// Envolver tudo em DOMContentLoaded garante que o HTML já carregou
document.addEventListener("DOMContentLoaded", () => {
    
    // ------------------------------------------
    // LÓGICA DE TRADUÇÃO E EFEITO TYPING
    // ------------------------------------------
    gsap.registerPlugin(TextPlugin);
    let typingTimeline; // Variável para controlar a animação
    
    // Função para iniciar/reiniciar o efeito Typing
    const startTypingEffect = (language) => {
        if (typingTimeline) {
            typingTimeline.kill(); // Mata a animação antiga
            document.getElementById('typing-text').innerText = ""; 
        }

        const words = typingWords[language] || typingWords['pt'];
        
        typingTimeline = gsap.timeline({repeat: -1});
        words.forEach(word => {
            typingTimeline.to("#typing-text", {duration: 1.5, text: word, ease: "none", delay: 0.5})
                          .to("#typing-text", {duration: 1, text: "", ease: "none", delay: 2});
        });
    };

    // Função Principal de Troca de Idioma
    const langBtns = document.querySelectorAll('.lang-btn');
    const elementsToTranslate = document.querySelectorAll('[data-i18n]');

    const setLanguage = (language) => {
        // Atualiza o visual das bandeiras
        langBtns.forEach(btn => {
            if (btn.getAttribute('data-lang') === language) {
                btn.classList.add('border-primary', 'shadow-[0_0_10px_rgba(59,130,246,0.5)]');
                btn.classList.remove('opacity-50', 'grayscale', 'border-transparent');
            } else {
                btn.classList.remove('border-primary', 'shadow-[0_0_10px_rgba(59,130,246,0.5)]');
                btn.classList.add('opacity-50', 'grayscale', 'border-transparent');
            }
        });

        // Substitui os textos no HTML
        elementsToTranslate.forEach(el => {
            const key = el.getAttribute('data-i18n');
            if (translations[language] && translations[language][key]) {
                el.innerHTML = translations[language][key];
            }
        });

        // Atualiza o Typing Effect e salva no navegador
        startTypingEffect(language);
        localStorage.setItem('primemarke_lang', language);
    };

    // Cliques nas bandeiras
    langBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            setLanguage(btn.getAttribute('data-lang'));
        });
    });

    // Iniciar com o idioma salvo ou Padrão (pt)
    const savedLanguage = localStorage.getItem('primemarke_lang') || 'pt';
    setLanguage(savedLanguage);

    // ------------------------------------------
    // AOS ANIMATION E NAVBAR
    // ------------------------------------------
    AOS.init({ once: true, offset: 100 });

    const navbar = document.getElementById('navbar');
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('glass', 'shadow-lg');
            backToTop.classList.remove('opacity-0', 'pointer-events-none');
        } else {
            navbar.classList.remove('glass', 'shadow-lg');
            backToTop.classList.add('opacity-0', 'pointer-events-none');
        }
    });

    if(backToTop) {
        backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

    // ------------------------------------------
    // PARTICLES.JS (HERO)
    // ------------------------------------------
    if (document.getElementById('particles-js')) {
        particlesJS('particles-js', {
            particles: {
                number: { value: 50, density: { enable: true, value_area: 800 } },
                color: { value: "#3B82F6" },
                shape: { type: "circle" },
                opacity: { value: 0.3, random: true },
                size: { value: 3, random: true },
                line_linked: { enable: true, distance: 150, color: "#3B82F6", opacity: 0.2, width: 1 },
                move: { enable: true, speed: 2, direction: "none", random: false, straight: false, out_mode: "out", bounce: false }
            },
            interactivity: {
                detect_on: "canvas",
                events: { onhover: { enable: true, mode: "grab" }, onclick: { enable: true, mode: "push" }, resize: true },
                modes: { grab: { distance: 140, line_linked: { opacity: 0.5 } }, push: { particles_nb: 4 } }
            },
            retina_detect: true
        });
    }

    // ------------------------------------------
    // CONTADORES ANIMADOS
    // ------------------------------------------
    const counters = document.querySelectorAll('.counter');
    let counted = false;

    const animateCounters = () => {
        counters.forEach(counter => {
            const speed = 200; 
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    window.addEventListener('scroll', () => {
        const counterElement = document.querySelector('.counter');
        if (counterElement) {
            const numSection = counterElement.offsetTop - window.innerHeight;
            if (window.scrollY > numSection && !counted) {
                animateCounters();
                counted = true;
            }
        }
    });

    // ------------------------------------------
    // SWIPER (DEPOIMENTOS)
    // ------------------------------------------
    if (document.querySelector('.testimonialSwiper')) {
        new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: { el: '.swiper-pagination', clickable: true },
            breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
        });
    }

    // ------------------------------------------
    // FAQ ACCORDION
    // ------------------------------------------
    const faqBtns = document.querySelectorAll('.faq-btn');
    faqBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('i');
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });

    // ------------------------------------------
    // FILTROS DO PORTFÓLIO
    // ------------------------------------------
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.classList.remove('bg-primary', 'text-white', 'border-primary', 'shadow-[0_0_15px_rgba(59,130,246,0.4)]');
                b.classList.add('glass', 'text-grayLight', 'border-white/20');
            });
            btn.classList.remove('glass', 'text-grayLight', 'border-white/20');
            btn.classList.add('bg-primary', 'text-white', 'border-primary', 'shadow-[0_0_15px_rgba(59,130,246,0.4)]');

            const filterValue = btn.getAttribute('data-filter');
            portfolioItems.forEach(item => {
                item.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                item.style.opacity = '0';
                item.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        item.style.display = 'none';
                    }
                }, 400); 
            });
        });
    });

    // ------------------------------------------
    // MODAL DO PORTFÓLIO
    // ------------------------------------------
    const modal = document.getElementById('projectModal');
    if (modal) {
        const modalOverlay = document.querySelector('.modal-overlay');
        const closeBtns = document.querySelectorAll('.modal-close, .modal-close-link');
        const modalTechs = document.getElementById('modal-techs');
        const externalLinkBtn = document.getElementById('modal-external-link'); 

        document.querySelectorAll('.open-modal-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault(); 
                
                const projectCard = btn.closest('.portfolio-item');
                const title = projectCard.getAttribute('data-title');
                const type = projectCard.getAttribute('data-type');
                const img = projectCard.getAttribute('data-img');
                const desc = projectCard.getAttribute('data-desc');
                const techs = projectCard.getAttribute('data-tech').split(','); 
                const link = projectCard.getAttribute('data-link'); 

                document.getElementById('modal-title').innerText = title;
                document.getElementById('modal-type').innerText = type;
                document.getElementById('modal-img').src = img;
                document.getElementById('modal-desc').innerText = desc;

                if (link && link !== "") {
                    externalLinkBtn.href = link;
                    externalLinkBtn.style.display = 'flex'; 
                } else {
                    externalLinkBtn.style.display = 'none'; 
                }

                modalTechs.innerHTML = '';
                techs.forEach(tech => {
                    const badge = document.createElement('span');
                    badge.className = 'bg-primary/10 border border-primary/30 text-lightBlue px-3 py-1 rounded-full text-xs font-medium whitespace-nowrap';
                    badge.innerText = tech.trim();
                    modalTechs.appendChild(badge);
                });

                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modal.querySelector('.glass-card').classList.remove('scale-95');
                    modal.querySelector('.glass-card').classList.add('scale-100');
                }, 10);
                
                document.body.style.overflow = 'hidden'; 
            });
        });

        const closeModal = () => {
            modal.classList.add('opacity-0');
            modal.querySelector('.glass-card').classList.remove('scale-100');
            modal.querySelector('.glass-card').classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        };

        closeBtns.forEach(btn => btn.addEventListener('click', closeModal));
        modalOverlay.addEventListener('click', closeModal);

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    }
});