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
    <title><?= $domainTitle ?> — Politica di Rimborso</title>
    
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
            <span class="section-tag">Pagamenti e Rimborsi</span>
            <h1>Politica di Rimborso</h1>
            
            <div class="legal-content">
                <div class="contact-extra" style="border-left-color: var(--primary); margin-top: 0; margin-bottom: 40px;">
                    <p class="lead-text" style="margin-bottom: 0; font-size: 1.1rem;">
                        Puntiamo alla massima trasparenza nel rapporto con i nostri clienti. 
                        In <strong><?= $domainTitle ?></strong> è prevista una procedura di rimborso chiara, 
                        basata sulla qualità dei servizi offerti e sulla tutela dei diritti dei consumatori.
                    </p>
                </div>

                <h2>Condizioni per richiedere un rimborso</h2>
                <div class="contact-cards" style="grid-template-columns: repeat(3, 1fr); margin: 30px 0; gap: 20px;">
                    <div class="contact-card" style="padding: 25px;">
                        <div class="contact-card__icon" style="margin-bottom: 15px;"><i data-lucide="file-warning"></i></div>
                        <h4 style="color: var(--white); margin-bottom: 10px;">Non conformità</h4>
                        <p style="font-size: 0.9rem; margin-bottom: 0;">Se i materiali differiscono sostanzialmente da quanto dichiarato su <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="contact-card" style="padding: 25px;">
                        <div class="contact-card__icon" style="margin-bottom: 15px;"><i data-lucide="settings-2"></i></div>
                        <h4 style="color: var(--white); margin-bottom: 10px;">Guasti tecnici</h4>
                        <p style="font-size: 0.9rem; margin-bottom: 0;">Errori critici su <strong><?= $fullDomain ?></strong> non risolti tempestivamente.</p>
                    </div>
                    <div class="contact-card" style="padding: 25px;">
                        <div class="contact-card__icon" style="margin-bottom: 15px;"><i data-lucide="timer"></i></div>
                        <h4 style="color: var(--white); margin-bottom: 10px;">Diritto di recesso</h4>
                        <p style="font-size: 0.9rem; margin-bottom: 0;">Recesso entro 14 giorni ("periodo di riflessione") a condizione di un utilizzo minimo dei materiali.</p>
                    </div>
                </div>

                <div class="procedure-block" style="background: rgba(255, 255, 255, 0.02); padding: 40px; border-radius: 24px; border: 1px solid rgba(255, 255, 255, 0.05); margin: 50px 0;">
                    <h2 style="margin-top: 0;">Procedura di richiesta</h2>
                    <p>Per avviare la procedura sulla piattaforma <strong><?= $domainTitle ?></strong>, segui questi passaggi:</p>
                    <ul class="legal-list" style="margin-top: 20px;">
                        <li>Invia un'e-mail a <a href="mailto:hello@<?= $fullDomain ?>" style="color: var(--primary);">hello@<?= $fullDomain ?></a></li>
                        <li>Oggetto dell'e-mail: <strong>«Richiesta di rimborso»</strong></li>
                        <li>Indica i tuoi dati: Nome completo, Email, Nome del programma</li>
                        <li>Allega una descrizione dettagliata del motivo della richiesta</li>
                    </ul>
                </div>

                <h2>Tempi e modalità di rimborso</h2>
                <p>
                    Previa approvazione della richiesta, il rimborso sarà effettuato entro 
                    <strong>7–14 giorni lavorativi</strong>. I fondi verranno riaccreditati 
                    tramite lo stesso metodo utilizzato per il pagamento. Si prega di notare che il tempo effettivo di accredito 
                    dipende dai circuiti della tua banca in Italia o nel tuo paese di residenza.
                </p>

                <div class="warning-block" style="background: rgba(239, 68, 68, 0.05); padding: 30px; border-radius: 20px; border: 1px solid rgba(239, 68, 68, 0.1); margin-top: 40px;">
                    <h2 style="margin-top: 0; color: #f87171;">Eccezioni e limitazioni</h2>
                    <ul class="legal-list">
                        <li>Richiesta presentata oltre i 14 giorni di calendario dal momento del pagamento.</li>
                        <li>Hai già visualizzato o scaricato oltre il 50% dei materiali del programma.</li>
                        <li>Problemi tecnici causati dall'utente (software, connessione locale).</li>
                        <li>Violazione delle Condizioni d'Uso di <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-extra" style="text-align: center; border-left: none; border-top: 4px solid var(--primary); margin-top: 60px;">
                    <h2>Servizio Clienti</h2>
                    <p>Per tutte le domande relative ai rimborsi, contattaci:</p>
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