<?php
/**
 * Footer padrão (moderno e responsivo) + scripts + fechamento do documento.
 *
 * Variável opcional: $pageJs (string[]) com JS relativo a /assets/js.
 * Use $semFooter = true para telas cheias e só fechar o documento.
 */
$pageJs    = $pageJs ?? [];
$semFooter = $semFooter ?? false;

if (!$semFooter):
?>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-top">

            <!-- Coluna 1: Logo e descrição -->
            <div class="footer-col brand-col">
                <div class="logo-wrapper">
                    <div class="logo-icon">
                        <img src="<?= asset('img/logo_footer.jpeg') ?>" alt="EventCop" width="44" height="44">
                    </div>
                </div>
                <p class="brand-desc">
                    A plataforma completa para a divulgação e inscrição do seu evento.
                </p>
            </div>

            <!-- Coluna 2: Contatos -->
            <div class="footer-col contact-col">
                <a href="mailto:contato@eventcop.com.br" class="contact-item email-link">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                    </svg>
                    <span>contato@eventcop.com.br</span>
                </a>

                <a href="tel:+551234567890" class="contact-item">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span>(12) 3456-7890</span>
                </a>
            </div>

            <!-- Coluna 3: Links da Plataforma -->
            <div class="footer-col links-col">
                <div class="links-header">
                    <div class="rocket-badge">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>
                            <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/>
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>
                        </svg>
                    </div>
                    <div class="links-title-box">
                        <h3>Comece na Plataforma</h3>
                        <span class="title-underline"></span>
                    </div>
                </div>
                <ul class="footer-links">
                    <li><a href="<?= route('cadastro') ?>"><span class="arrow">&gt;</span> Criar minha conta</a></li>
                    <li><a href="<?= route('criar_evento') ?>"><span class="arrow">&gt;</span> Quero divulgar meu evento</a></li>
                </ul>
            </div>

            <!-- Coluna 4: Card "Precisa de ajuda?" -->
            <div class="footer-col help-col">
                <div class="help-card">
                    <div class="help-header">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 18v-6a9 9 0 0 1 18 0v6"/>
                            <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>
                        </svg>
                        <span>Precisa de ajuda?</span>
                    </div>
                    <a href="<?= route('agenda') ?>" class="help-btn">Entre em contato com a nossa equipe &gt;</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Linha divisória -->
    <hr class="footer-divider">

    <!-- Seção inferior -->
    <div class="footer-container">
        <div class="footer-bottom">
            <div class="social-group">
                <span class="social-label">Siga-nos</span>
                <div class="social-icons">
                    <!-- Instagram -->
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="social-circle">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                        </svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="social-circle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/>
                        </svg>
                    </a>
                    <!-- YouTube -->
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="social-circle">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <p class="copyright">
                &copy; <?= date('Y') ?> EventCop. Todos os direitos reservados.
            </p>

            <div class="legal-links">
                <a href="<?= route('politicas') ?>">Privacidade</a>
                <span class="separator">|</span>
                <a href="<?= route('termos') ?>">Termos de Uso</a>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>

<div class="toast-stack" data-toast-stack aria-live="polite"></div>

<script src="<?= asset('js/core/ui.js') ?>"></script>
<?php foreach ($pageJs as $js): ?>
<script src="<?= asset('js/' . $js) ?>"></script>
<?php endforeach; ?>
</body>
</html>
