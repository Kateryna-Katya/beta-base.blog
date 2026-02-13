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
    <title><?= $domainTitle ?> — Esclusione di Responsabilità</title>
    
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
                <span class="section-tag">Informativa sui Rischi</span>
                <div class="legal-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                    <div class="contact-card__icon" style="margin-bottom: 0; color: #ffcc00;">
                        <i data-lucide="alert-triangle"></i>
                    </div>
                    <h1 style="margin-bottom: 0;">Esclusione di Responsabilità</h1>
                </div>

                <div class="legal-content">
                    <div class="contact-extra" style="border-left-color: #ffcc00; margin-top: 0; margin-bottom: 40px;">
                        <p>
                            <strong>Informazioni Generali:</strong> Tutti i materiali, gli articoli e le informazioni
                            pubblicati sul sito <strong><?= $domainTitle ?></strong> hanno scopo puramente
                            informativo e divulgativo. Non costituiscono e non devono essere
                            considerati come raccomandazioni d'investimento personali,
                            consulenza legale o finanziaria professionale, offerta pubblica o invito a compiere
                            alcuna operazione finanziaria.
                        </p>
                    </div>

                    <div class="legal-block">
                        <h2>Assenza di Garanzie</h2>
                        <p>
                            Il team di <strong><?= $domainTitle ?></strong> non fornisce alcuna garanzia
                            riguardo alla precisione, completezza o attualità delle informazioni
                            presentate nel blog. Qualsiasi riferimento a potenziali redditi passivi, crescita di carriera o risultati passati
                            dei nostri clienti non garantisce risultati analoghi in futuro.
                            <strong>La strategia di crescita basata sull'innovazione</strong> dipende da molteplici fattori e può variare
                            sostanzialmente rispetto agli esempi riportati.
                        </p>
                    </div>

                    <div class="legal-block">
                        <h2>Limitazione di Responsabilità</h2>
                        <p>
                            L'amministrazione del sito <strong><?= $fullDomain ?></strong>,
                            i suoi proprietari e gli affiliati non sono responsabili per
                            alcun danno diretto o indiretto, decisioni o azioni
                            intraprese dall'utente sulla base delle informazioni contenute in questo sito. Ogni
                            responsabilità per l'uso delle metodologie che "cambiano le regole del gioco"
                            ricade esclusivamente sull'utente.
                        </p>
                    </div>

                    <div class="legal-block" style="background: rgba(255, 204, 0, 0.03); padding: 30px; border-radius: 20px; border: 1px solid rgba(255, 204, 0, 0.1);">
                        <h2 style="margin-top: 0; color: #ffcc00;">Avvertenza sui Rischi</h2>
                        <p>
                            Qualsiasi attività volta a modificare lo status finanziario o investimenti in nuovi progetti
                            comporta un certo livello di rischio. Prima di prendere qualsiasi decisione importante,
                            raccomandiamo caldamente di condurre una propria ricerca e di consultare un
                            professionista indipendente qualificato in Italia o nel proprio paese di residenza.
                        </p>
                    </div>

                    <div class="legal-block agreement" style="margin-top: 50px; text-align: center; border-top: 1px solid rgba(255,255,255,0.05); padding-top: 40px;">
                        <p style="font-style: italic;">
                            Continuando a utilizzare il sito <strong><?= $domainTitle ?></strong>, confermi di avere almeno 18 anni, di
                            agire di tua spontanea volontà e di essere pienamente consapevole e di accettare tutti i
                            rischi menzionati. La piattaforma è già disponibile in Europa e opera nel rispetto della legislazione UE.
                        </p>
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
