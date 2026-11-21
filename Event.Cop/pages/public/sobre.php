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
                <h1 class="hero-title"> Conectamos pessoas a experiências que transformam.</h1>
                <div class="hero-actions flex items-center flex-wrap">
                    <a href="#eventos" class="btn-hero btn-hero-primary">
                        <span>Explorar eventos</span>
                        <span class="arrow">&gt;</span>
                    </a> 
                </div>
            </div>  
            <div class="hero-media">
                <div class="hero-image-box">
                    <img id="hero-image2" src="<?= asset('img/hero2.jpg') ?>" alt="Público aplaudindo em evento corporativo">
                </div>
            </div>
        </div>
    </section>
    <section class="sobre-conexoes">
        <div class="container text-center">
            <h2 class="sobre-titulo">Mais do que eventos, conexões.</h2>
            <p class="sobre-lead mx-auto">
                A EventCop facilita o acesso a eventos corporativos de qualidade, aproximando profissionais, empresas e oportunidades de aprendizado e networking.
            </p>
            <div class="sobre-pilares grid grid-3">
                <div class="pilar-pill flex items-center justify-center">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2"/>
                        <line x1="16" x2="16" y1="2" y2="6"/>
                        <line x1="8" x2="8" y1="2" y2="6"/>
                        <line x1="3" x2="21" y1="10" y2="10"/>
                        <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01"/>
                    </svg>
                    <span>Descubra eventos</span>
                </div>
                <div class="pilar-pill flex items-center justify-center">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 16v-4"/>
                        <path d="M12 8h.01"/>
                    </svg>
                    <span>Informação em um só lugar</span>
                </div>
                <div class="pilar-pill flex items-center justify-center">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                    <span>Inscrição descomplicada</span>
                </div>
            </div>
            <p class="sobre-texto-apoio mx-auto">
                Acreditamos que cada evento é uma oportunidade de aprender, crescer e criar conexões. Por isso, reunimos experiências que impulsionam o desenvolvimento profissional e aproximam pessoas.
            </p>
            <div class="sobre-banner">
                Aproximamos organizadores e participantes para tornar cada experiência mais acessível.
            </div>
        </div>
    </section>
</main>
    
</main>
<?php require ROOT_PATH . '/includes/layout/footer.php'; ?>
