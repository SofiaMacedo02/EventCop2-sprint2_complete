<?php
require_once __DIR__ . '/../../includes/bootstrap.php';

$pageTitle = 'EventCop - A Plataforma Completa para seus Eventos';
$pageCss   = ['pages/public.css'];
$menuAtivo = 'home';

require ROOT_PATH . '/includes/layout/head.php';
require ROOT_PATH . '/includes/layout/header.php';
?>
<main>
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <div class="hero-eyebrow flex items-center">
                    <span>Eventos corporativos</span>
                    <span class="eyebrow-line"></span>
                </div>
                <h1 class="hero-title"> Grandes eventos começam<br>com grandes conexões!</h1>
                <p class="hero-subtitle"> Encontre eventos corporativos, faça sua inscrição e participe de experiências que impulsionam sua carreira.</p>
                <div class="hero-actions flex items-center flex-wrap">
                    <a href="#eventos" class="btn-hero btn-hero-primary">
                    <span>Explorar eventos</span>
                    <span class="arrow">&gt;</span>
                    </a>
                    <a href="#admin" class="btn-hero btn-hero-outline">
                    <span>Sou um administrador</span>
                    <span class="arrow">&gt;</span>
                    </a>
                </div>
            </div>
            <div class="hero-media">
                <div class="hero-image-box">
                    <img src="<?= asset('img/hero_home.jpeg') ?>" alt="Público aplaudindo em evento corporativo">
                </div>
                <blockquote class="hero-quote">
                    <p>Mais que eventos.<br>Novas possibilidades.</p>
                    <span class="quote-line"></span>
                </blockquote>
            </div>
        </div>
    </section>
    <section class="eventos-section">
        <div class="container">
        <div class="eventos-header">
            <div class="eventos-top-bar">
                <a href="#todos-eventos" class="ver-todos-link">Ver todos &gt;</a>
            </div>
            <h2>Toda grande jornada começa com uma oportunidade.</h2>
            <p>Descubra eventos que ampliam seus conhecimentos e aproximam você de novas ideias.</p>
        </div>
        <div class="eventos-grid grid grid-3">
  
        <article class="evento-card">
            <div class="evento-thumb">
            <span class="evento-tag">
                <!-- Ícone Congresso -->
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                Congresso
            </span>
            <img src="<?= asset('img/congresso_home.jpeg')?>" alt="Congresso de inovação e tecnologia empresarial">
            </div>

            <div class="evento-body">
            <h3>Congresso de inovação e tecnologia empresarial</h3>
            
            <div class="evento-meta">
                <div class="meta-item flex items-center">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2"/>
                    <line x1="16" x2="16" y1="2" y2="6"/>
                    <line x1="8" x2="8" y1="2" y2="6"/>
                    <line x1="3" x2="21" y1="10" y2="10"/>
                </svg>
                <span>15 a 17 de fevereiro de 2027</span>
                </div>

                <div class="meta-item flex items-center">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <span>São Paulo - SP</span>
                </div>
            </div>
            </div>
        </article>
        <article class="evento-card">
            <div class="evento-thumb">
            <span class="evento-tag">
                <!-- Ícone Workshop -->
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/>
                <path d="M9 18h6"/>
                <path d="M10 22h4"/>
                </svg>
                Workshop
            </span>
            <img src="<?= asset('img/workshop_home.jpeg') ?>" alt="Marketing digital na prática">
            </div>
            <div class="evento-body">
            <h3>Marketing digital na prática: Estratégias que geram resultados</h3>
            
            <div class="evento-meta">
                <div class="meta-item flex items-center">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2"/>
                    <line x1="16" x2="16" y1="2" y2="6"/>
                    <line x1="8" x2="8" y1="2" y2="6"/>
                    <line x1="3" x2="21" y1="10" y2="10"/>
                </svg>
                <span>10 de novembro de 2026</span>
                </div>

                <div class="meta-item flex items-center">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <span>Campinas - SP</span>
                </div>
            </div>
            </div>
        </article>
        <article class="evento-card">
            <div class="evento-thumb">
            <span class="evento-tag">
                <!-- Ícone Networking -->
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="18" cy="5" r="3"/>
                <circle cx="6" cy="12" r="3"/>
                <circle cx="18" cy="19" r="3"/>
                <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"/>
                <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"/>
                </svg>
                Networking
            </span>
            <img src="<?= asset('img/networking_home.jpeg') ?>" alt="Fórum de negócios e oportunidades">
            </div>

            <div class="evento-body">
            <h3>Fórum de negócios e oportunidades</h3>
            
            <div class="evento-meta">
                <div class="meta-item flex items-center">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2"/>
                    <line x1="16" x2="16" y1="2" y2="6"/>
                    <line x1="8" x2="8" y1="2" y2="6"/>
                    <line x1="3" x2="21" y1="10" y2="10"/>
                </svg>
                <span>5 e 6 de dezembro de 2026</span>
                </div>

                <div class="meta-item flex items-center">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <span>Rio de Janeiro - RJ</span>
                </div>
            </div>
            </div>
        </article>

        </div>
    </div>
    </section>

    <section class="depoimentos-section">
    <div class="container">
        <div class="depoimentos-box">
        <h2 class="depoimentos-title text-center">Organizadores que escolheram a EventCop recomendam!</h2>

        <div class="depoimentos-grid grid grid-3">
            
            <!-- Depoimento 1 -->
            <article class="depoimento-card flex flex-col justify-between">
            <div>
                <div class="autor-header flex items-center">
                <img src="<?= asset('img/juliana.jpg') ?>" alt="Juliana Lima" class="autor-avatar">
                <div class="autor-info">
                    <h4>Juliana Lima</h4>
                    <p>Gerente de Eventos na TechSolutions</p>
                    <div class="rating-row flex items-center">
                    <span class="stars" aria-label="5 estrelas">★★★★★</span>
                    <!-- Ícone Google G -->
                    <svg width="14" height="14" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="#4285F4" d="M23.745 12.27c0-.79-.07-1.54-.19-2.27h-11.3v4.51h6.47c-.29 1.48-1.14 2.73-2.4 3.58v3h3.86c2.26-2.09 3.56-5.17 3.56-8.82z"/>
                        <path fill="#34A853" d="M12.255 24c3.24 0 5.95-1.08 7.93-2.91l-3.86-3c-1.08.72-2.45 1.16-4.07 1.16-3.13 0-5.78-2.11-6.73-4.96h-3.98v3.09C3.515 21.3 7.565 24 12.255 24z"/>
                        <path fill="#FBBC05" d="M5.525 14.29c-.25-.72-.38-1.49-.38-2.29s.14-1.57.38-2.29V6.62h-3.98a11.86 11.86 0 0 0 0 10.76l3.98-3.09z"/>
                        <path fill="#EA4335" d="M12.255 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C18.205 1.19 15.495 0 12.255 0c-4.69 0-8.74 2.7-10.71 6.62l3.98 3.09c.95-2.85 3.6-4.96 6.73-4.96z"/>
                    </svg>
                    </div>
                </div>
                </div>

                <p class="depoimento-texto">
                "A EventCop tornou todo o processo de inscrição e controle dos participantes muito mais simples. A plataforma é intuitiva, organizada e nos dá segurança em todas as etapas do evento."
                </p>
            </div>

            <span class="depoimento-data">12 de maio de 2025</span>
            </article>

            <!-- Depoimento 2 -->
            <article class="depoimento-card flex flex-col justify-between">
            <div>
                <div class="autor-header flex items-center">
                <img src="<?= asset('img/rafael.jpg') ?>" alt="Rafael Mendes" class="autor-avatar">
                <div class="autor-info">
                    <h4>Rafael Mendes</h4>
                    <p>Consultor de Desenvolvimento Profissional</p>
                    <div class="rating-row flex items-center">
                    <span class="stars" aria-label="5 estrelas">★★★★★</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="#4285F4" d="M23.745 12.27c0-.79-.07-1.54-.19-2.27h-11.3v4.51h6.47c-.29 1.48-1.14 2.73-2.4 3.58v3h3.86c2.26-2.09 3.56-5.17 3.56-8.82z"/>
                        <path fill="#34A853" d="M12.255 24c3.24 0 5.95-1.08 7.93-2.91l-3.86-3c-1.08.72-2.45 1.16-4.07 1.16-3.13 0-5.78-2.11-6.73-4.96h-3.98v3.09C3.515 21.3 7.565 24 12.255 24z"/>
                        <path fill="#FBBC05" d="M5.525 14.29c-.25-.72-.38-1.49-.38-2.29s.14-1.57.38-2.29V6.62h-3.98a11.86 11.86 0 0 0 0 10.76l3.98-3.09z"/>
                        <path fill="#EA4335" d="M12.255 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C18.205 1.19 15.495 0 12.255 0c-4.69 0-8.74 2.7-10.71 6.62l3.98 3.09c.95-2.85 3.6-4.96 6.73-4.96z"/>
                    </svg>
                    </div>
                </div>
                </div>

                <p class="depoimento-texto">
                "Usei a EventCop para organizar um congresso com mais de 300 participantes e foi uma experiência excelente. O suporte da equipe foi muito atencioso e o sistema funcionou perfeitamente."
                </p>
            </div>

            <span class="depoimento-data">3 de abril de 2025</span>
            </article>

            <!-- Depoimento 3 -->
            <article class="depoimento-card flex flex-col justify-between">
            <div>
                <div class="autor-header flex items-center">
                <img src="<?= asset('img/carolina.jpg') ?>" alt="Carolina Almeida" class="autor-avatar">
                <div class="autor-info">
                    <h4>Carolina Almeida</h4>
                    <p>Analista de Marketing na Vision Eventos</p>
                    <div class="rating-row flex items-center">
                    <span class="stars" aria-label="5 estrelas">★★★★★</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="#4285F4" d="M23.745 12.27c0-.79-.07-1.54-.19-2.27h-11.3v4.51h6.47c-.29 1.48-1.14 2.73-2.4 3.58v3h3.86c2.26-2.09 3.56-5.17 3.56-8.82z"/>
                        <path fill="#34A853" d="M12.255 24c3.24 0 5.95-1.08 7.93-2.91l-3.86-3c-1.08.72-2.45 1.16-4.07 1.16-3.13 0-5.78-2.11-6.73-4.96h-3.98v3.09C3.515 21.3 7.565 24 12.255 24z"/>
                        <path fill="#FBBC05" d="M5.525 14.29c-.25-.72-.38-1.49-.38-2.29s.14-1.57.38-2.29V6.62h-3.98a11.86 11.86 0 0 0 0 10.76l3.98-3.09z"/>
                        <path fill="#EA4335" d="M12.255 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C18.205 1.19 15.495 0 12.255 0c-4.69 0-8.74 2.7-10.71 6.62l3.98 3.09c.95-2.85 3.6-4.96 6.73-4.96z"/>
                    </svg>
                    </div>
                </div>
                </div>

                <p class="depoimento-texto">
                "A EventCop nos ajudou a organizar nosso workshop de forma prática e eficiente. Conseguimos divulgar o evento, gerenciar as inscrições e ainda acompanhar tudo em tempo real. Recomendo muito!"
                </p>
            </div>

            <span class="depoimento-data">27 de março de 2025</span>
            </article>

        </div>

        <!-- Setas do Carrossel -->
        <div class="carrossel-controls flex justify-center items-center">
            <button type="button" class="carrossel-btn btn-prev" aria-label="Depoimento anterior">&lt;</button>
            <button type="button" class="carrossel-btn btn-next" aria-label="Próximo depoimento">&gt;</button>
        </div>
        </div>
    </div>
    </section>
</main>
<?php require ROOT_PATH . '/includes/layout/footer.php'; ?>
