<?php
require_once __DIR__ . '/../../includes/bootstrap.php';

$pageTitle = 'EventCop - Planos para divulgar seu evento';
$pageCss   = ['pages/planos.css'];
$menuAtivo = 'planos';

require ROOT_PATH . '/includes/layout/head.php';
require ROOT_PATH . '/includes/layout/header.php';
?>
<main>
    <section class="planos-section">
        <div class="container text-center">
            
            <!-- Marca Centralizada -->
            <div class="planos-brand flex items-center justify-center">
                <img src="<?= asset('img/image.png') ?>" alt="EventCop - Eventos Corporativos" class="planos-logo-img">
            </div>

            <!-- Título e Subtítulo -->
            <h1 class="planos-titulo">Planos para divulgar seu evento</h1>
            <p class="planos-subtitulo">Escolha o plano ideal e tenha seu evento em destaque com a EventCop!</p>
            <hr class="planos-divider mx-auto">

            <div class="planos-grid">
  
  <!-- Card 1 -->
        <article class="plano-card">
            <header class="plano-header">
                <span class="plano-qtd">1</span>
                <span class="plano-label">Evento</span>
            </header>

            <div class="plano-body">
                <div class="plano-preco">
                <span class="moeda">R$</span>
                <span class="valor">800</span>
                <span class="centavos">,00</span>
                </div>
                <hr class="plano-sep">
                <ul class="plano-beneficios">
                <li>
                    <span class="beneficio-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18 3a1 1 0 0 0-1 .26L11.6 8H6a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h.38l1.68 4.2a1 1 0 0 0 .93.63h2a1 1 0 0 0 .93-1.37L10.52 16h1.08l5.4 4.74A1 1 0 0 0 18 21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm3 6a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1z"/>
                    </svg>
                    </span>
                    <span>Divulgação do seu evento</span>
                </li>
                <li>
                    <span class="beneficio-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <rect x="4" y="13" width="3.5" height="7" rx="1"/>
                        <rect x="10.25" y="9" width="3.5" height="11" rx="1"/>
                        <rect x="16.5" y="4" width="3.5" height="16" rx="1"/>
                    </svg>
                    </span>
                    <span>Controle das inscrições</span>
                </li>
                </ul>

                <a href="<?= route('cadastro') ?>" class="btn-plano">Contratar Plano</a>
            </div>
            </article>

            <!-- Card 2 (Destaque) -->
            <article class="plano-card plano-destaque">
            <span class="plano-badge">Mais escolhido</span>
            <header class="plano-header">
                <span class="plano-qtd">2</span>
                <span class="plano-label">Eventos</span>
            </header>

            <div class="plano-body">
                <div class="plano-preco">
                <span class="moeda">R$</span>
                <span class="valor">1.400</span>
                <span class="centavos">,00</span>
                </div>

                <hr class="plano-sep">

                <ul class="plano-beneficios">
                <li>
                    <span class="beneficio-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18 3a1 1 0 0 0-1 .26L11.6 8H6a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h.38l1.68 4.2a1 1 0 0 0 .93.63h2a1 1 0 0 0 .93-1.37L10.52 16h1.08l5.4 4.74A1 1 0 0 0 18 21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm3 6a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1z"/>
                    </svg>
                    </span>
                    <span>Divulgação dos seus dois eventos</span>
                </li>
                <li>
                    <span class="beneficio-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <rect x="4" y="13" width="3.5" height="7" rx="1"/>
                        <rect x="10.25" y="9" width="3.5" height="11" rx="1"/>
                        <rect x="16.5" y="4" width="3.5" height="16" rx="1"/>
                    </svg>
                    </span>
                    <span>Controle das inscrições</span>
                </li>
                </ul>

                <a href="<?= route('cadastro') ?>" class="btn-plano">Contratar Plano</a>
            </div>
            </article>

            <!-- Card 3 -->
            <article class="plano-card">
            <header class="plano-header">
                <span class="plano-qtd">3</span>
                <span class="plano-label">Eventos</span>
            </header>

            <div class="plano-body">
                <div class="plano-preco">
                <span class="moeda">R$</span>
                <span class="valor">1.800</span>
                <span class="centavos">,00</span>
                </div>

                <hr class="plano-sep">

                <ul class="plano-beneficios">
                <li>
                    <span class="beneficio-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18 3a1 1 0 0 0-1 .26L11.6 8H6a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h.38l1.68 4.2a1 1 0 0 0 .93.63h2a1 1 0 0 0 .93-1.37L10.52 16h1.08l5.4 4.74A1 1 0 0 0 18 21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm3 6a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1z"/>
                    </svg>
                    </span>
                    <span>Divulgação dos seus três eventos</span>
                </li>
                <li>
                    <span class="beneficio-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <rect x="4" y="13" width="3.5" height="7" rx="1"/>
                        <rect x="10.25" y="9" width="3.5" height="11" rx="1"/>
                        <rect x="16.5" y="4" width="3.5" height="16" rx="1"/>
                    </svg>
                    </span>
                    <span>Controle das inscrições</span>
                </li>
                </ul>

                <a href="<?= route('cadastro') ?>" class="btn-plano">Contratar Plano</a>
            </div>
        </article>
    </div>
        </div>
    </section>
</main>
<?php require ROOT_PATH . '/includes/layout/footer.php'; ?>