<?php
/**
 * Header público. Use $menuAtivo = 'home' | 'planos' | 'divulgar' | 'sobre' | 'entrar' | 'cadastro'
 * para destacar o item.
 */
$menuAtivo = $menuAtivo ?? '';
$__u = usuario_logado();
?>
<header class="header">
    <a href="<?= route('home') ?>" class="logo-link">
        <img src="<?= asset('img/logonv.jpeg') ?>" alt="EventCop" class="logo-header">
    </a>

    <button type="button" class="menu-toggle" aria-label="Abrir menu" aria-expanded="false" data-menu-toggle>
        <span></span><span></span><span></span>
    </button>

    <nav class="menu" data-menu>
        <ul>
            <li><a href="<?= route('home') ?>" class="<?= $menuAtivo === 'home' ? 'is-active' : '' ?>">Home</a></li>
            <li><a href="<?= route('planos') ?>" class="<?= $menuAtivo === 'planos' || $menuAtivo === 'empresas' ? 'is-active' : '' ?>">Planos</a></li>
            <li><a href="<?= route('cadastro_admin') ?>" class="<?= $menuAtivo === 'divulgar' ? 'is-active' : '' ?>">Divulgar meu evento</a></li>
            <li><a href="<?= route('sobre') ?>" class="<?= $menuAtivo === 'sobre' || $menuAtivo === 'recursos' ? 'is-active' : '' ?>">Sobre nós</a></li>

            <?php if ($__u): ?>
                <?php if ($__u['tipo'] === 'organizador'): ?>
                    <li><a href="<?= route('dashboard') ?>" class="<?= $menuAtivo === 'admin' ? 'is-active' : '' ?>">Meu painel</a></li>
                <?php else: ?>
                    <li><a href="<?= route('home') ?>">Olá, <?= e(explode(' ', $__u['nome'])[0]) ?></a></li>
                <?php endif; ?>
                <li><a href="<?= route('logout') ?>">Sair</a></li>
            <?php else: ?>
                <li>
                    <a href="<?= route('login') ?>" class="menu-entrar <?= $menuAtivo === 'entrar' ? 'is-active' : '' ?>">
                        <svg class="icon-user" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/>
                        </svg>
                        Entrar
                    </a>
                </li>
                <li><a href="<?= route('cadastro') ?>" class="<?= $menuAtivo === 'cadastro' ? 'is-active' : '' ?>">Cadastro</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var btn = document.querySelector('[data-menu-toggle]');
    var menu = document.querySelector('[data-menu]');
    if (!btn || !menu) return;
    btn.addEventListener('click', function () {
        var aberto = menu.classList.toggle('is-open');
        btn.setAttribute('aria-expanded', aberto ? 'true' : 'false');
    });
});
</script>
