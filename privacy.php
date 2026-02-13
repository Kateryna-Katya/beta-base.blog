<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Informativa sulla Privacy</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='none' stroke='%2300D4FF' stroke-width='8'/><path d='M30 50 Q50 20 70 50 T30 50' fill='%2300D4FF'/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="page">

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"><i data-lucide="cpu"></i></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Home</a></li>
                    <li><a href="./#possibilities" class="nav__link">Possibilità</a></li>
                    <li><a href="./#solutions" class="nav__link">Soluzioni</a></li>
                    <li><a href="./#education" class="nav__link">Formazione</a></li>
                    <li><a href="./#community" class="nav__link">Community</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline">Contattaci</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag">Privacy Policy</span>
            <h1>Informativa sulla Privacy</h1>

            <div class="legal-content">
                <div class="contact-extra" style="border-left-color: var(--primary); margin-top: 0; margin-bottom: 40px;">
                    <p class="lead-text" style="margin-bottom: 0; font-size: 1.1rem;">
                        La presente Informativa sulla Privacy si applica ai dati personali forniti dai clienti di <strong><?= $domainTitle ?></strong>, sia per i servizi di consulenza AI che per altre interazioni in formato elettronico.
                    </p>
                </div>

                <div class="policy-notice" style="background: rgba(255, 255, 255, 0.02); padding: 25px; border-radius: 15px; border: 1px dashed rgba(0, 212, 255, 0.2); margin-bottom: 40px;">
                    <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 0;">
                        <strong><?= $domainTitle ?></strong> si riserva il diritto di apportare modifiche alle disposizioni della presente Informativa. Si prega di notare che i nostri servizi possono contenere link a risorse di terze parti. Fornendo i propri dati, l'utente presta il pieno consenso al loro trattamento secondo le modalità previste dalla presente Informativa.
                    </p>
                </div>

                <h2>Modalità di raccolta, conservazione e cancellazione</h2>
                <div class="contact-cards" style="grid-template-columns: repeat(2, 1fr); margin: 30px 0; gap: 20px;">
                    <div class="contact-card" style="padding: 25px; text-align: center;">
                        <div class="contact-card__icon" style="margin-bottom: 15px;"><i data-lucide="clock"></i></div>
                        <h4 style="color: var(--white); margin-bottom: 5px;">Periodo di conservazione</h4>
                        <p style="margin-bottom: 0;">Fino a <strong>75 anni</strong> secondo il regolamento archivistico.</p>
                    </div>
                    <div class="contact-card" style="padding: 25px; text-align: center;">
                        <div class="contact-card__icon" style="margin-bottom: 15px;"><i data-lucide="shield-check"></i></div>
                        <h4 style="color: var(--white); margin-bottom: 5px;">Sicurezza</h4>
                        <p style="margin-bottom: 0;">Solo con il tuo esplicito consenso.</p>
                    </div>
                </div>
                <p>
                    Per prevenire la fuga di dati, utilizziamo un complesso completo di misure di sicurezza informatica. La distruzione o il blocco dei dati avviene su richiesta del cliente o al raggiungimento delle finalità della raccolta.
                </p>

                <div class="contact-cards" style="grid-template-columns: repeat(2, 1fr); margin-top: 40px;">
                    <div class="data-box">
                        <h3 style="color: var(--primary); display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                            <i data-lucide="cpu" style="width: 20px;"></i> Informazioni tecniche
                        </h3>
                        <ul class="legal-list">
                            <li>Indirizzo IP e orario di accesso</li>
                            <li>Sorgenti di traffico verso <strong><?= $fullDomain ?></strong></li>
                            <li>Dati del browser e visualizzazioni dei blocchi</li>
                        </ul>
                    </div>
                    <div class="data-box">
                        <h3 style="color: var(--primary); display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                            <i data-lucide="user" style="width: 20px;"></i> Personalizzazione
                        </h3>
                        <ul class="legal-list">
                            <li>Nome dell'utente</li>
                            <li>E-mail e numero di telefono</li>
                            <li>Dati relativi a contratti e servizi</li>
                        </ul>
                    </div>
                </div>

                <h2 style="margin-top: 60px;">Finalità del trattamento dei dati personali</h2>
                <ul class="legal-list">
                    <li>Fornire l'accesso a una piattaforma di formazione innovativa.</li>
                    <li>Considerare le preferenze dell'utente nello sviluppo di nuove soluzioni.</li>
                    <li>Informare su promozioni e materiali del blog.</li>
                    <li>Garantire un feedback di qualità.</li>
                </ul>

                <h2>Utilizzo dei Cookie</h2>
                <p>
                    I file cookie ci permettono di analizzare il traffico e salvare le tue preferenze (impostazioni per la regione Italia) per rendere l'uso di <strong><?= $fullDomain ?></strong> più comodo. Puoi disattivarli nelle impostazioni del browser.
                </p>

                <div class="contact-extra" style="text-align: center; border-left: none; border-top: 4px solid var(--primary);">
                    <h2>I tuoi diritti</h2>
                    <p>
                        Se desideri modificare i tuoi dati o interromperne il trattamento, contatta il team di <strong><?= $domainTitle ?></strong>:
                    </p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--primary" style="margin-top: 15px;">hello@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo footer__logo">
                        <span class="logo__text"><?= $domainTitle ?></span>
                    </a>
                    <p class="footer__description">Tecnologie di nuova generazione, accessibili a tutti. Rendiamo l'AI uno strumento chiaro e utile per la tua vita.</p>
                </div>
                
                <div class="footer__col">
                    <h4 class="footer__title">Menu</h4>
                    <ul class="footer__list">
                        <li><a href="./#hero">Home</a></li>
                        <li><a href="./#possibilities">Possibilità</a></li>
                        <li><a href="./#solutions">Soluzioni</a></li>
                        <li><a href="./#education">Formazione</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Documenti</h4>
                    <ul class="footer__list">
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./cookies.php">Cookie Policy</a></li>
                        <li><a href="./terms.php">Terms of Service</a></li>
                        <li><a href="./return.php">Return Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Contatti</h4>
                    <ul class="footer__contacts">
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+390697637885">+39 06 9763 7885</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Via del Corso, 418, 00186 Roma RM, Italia</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; 2026 <?= $domainTitle ?>. Tutti i diritti riservati. Piattaforma disponibile in Europa.</p>
            </div>
        </div>
    </footer>

    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <div class="cookie-popup__icon"><i data-lucide="cookie"></i></div>
            <p class="cookie-popup__text">
                Questo sito utilizza i cookie per migliorare l'esperienza. Maggiori dettagli nella nostra <a href="./cookies.php">Cookie Policy</a>.
            </p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Accetta</button>
        </div>
    </div>
    
    <div class="mobile-overlay" id="mobile-overlay"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>
</html>