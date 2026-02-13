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
    <title><?= $domainTitle ?> — Politica sui Cookie</title>
    
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
                <span class="section-tag">Documenti Legali</span>
                <h1>Politica sui Cookie</h1>

                <div class="legal-content">
                    <p class="lead-text">
                        Benvenuti su <strong><?= $domainTitle ?></strong>! Per migliorare la vostra esperienza di 
                        interazione con il nostro sito, garantire il suo corretto funzionamento e 
                        analizzare l'attività degli utenti, utilizziamo i cookie e tecnologie simili.
                    </p>

                    <h2>Cosa sono i cookie?</h2>
                    <p>
                        Un cookie è un piccolo frammento di dati (file di testo) che un sito web salva sul vostro dispositivo 
                        quando lo visitate. Questo permette alla piattaforma <strong><?= $domainTitle ?></strong> di "ricordare" 
                        le vostre azioni e preferenze (lingua, impostazioni per la regione Italia e altri parametri) 
                        per un determinato periodo di tempo.
                    </p>

                    <h2>Quali tipi di cookie utilizziamo?</h2>
                    <p>
                        Classifichiamo i cookie utilizzati sul sito <strong><?= $fullDomain ?></strong> nelle 
                        seguenti categorie:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Strettamente necessari:</strong> Tecnologia innovativa fondamentale per il funzionamento della piattaforma.
                        </li>
                        <li>
                            <strong>Analitici:</strong> Raccolta di informazioni anonime su come i visitatori utilizzano i nostri strumenti AI.
                        </li>
                        <li>
                            <strong>Funzionali:</strong> Permettono di ricordare le vostre scelte per un'esperienza personalizzata durante la formazione.
                        </li>
                        <li>
                            <strong>Di Marketing:</strong> L'offerta è attiva solo nei paesi UE e aiuta a fornire notizie e aggiornamenti pertinenti.
                        </li>
                    </ul>

                    <h2>Perché utilizziamo i cookie?</h2>
                    <ul class="legal-list">
                        <li>Garantire un funzionamento stabile e sicuro dell'infrastruttura digitale.</li>
                        <li>Analizzare il comportamento degli utenti per ottimizzare le soluzioni AI.</li>
                        <li>Personalizzare i contenuti per gli utenti in Europa.</li>
                        <li>Applicare metodologie comprovate per l'efficienza nella gestione dei dati.</li>
                    </ul>

                    <h2>Le vostre scelte e gestione</h2>
                    <p>
                        Avete il pieno controllo sui cookie. Potete modificare le vostre impostazioni in qualsiasi momento 
                        tramite il browser o attraverso il nostro popup dei cookie. Tuttavia, la disattivazione di alcune 
                        funzioni potrebbe rallentare il vostro avvio rapido sulla piattaforma.
                    </p>

                    <h2>Cookie di terze parti</h2>
                    <p>
                        In alcune pagine utilizziamo servizi esterni per la visualizzazione (ad esempio Matter.js o Lucide Icons). 
                        Vi raccomandiamo di consultare le loro rispettive politiche sulla privacy.
                    </p>

                    <div class="contact-extra">
                        <h2>Informazioni di contatto</h2>
                        <p>
                            Se avete domande riguardanti la politica su <strong><?= $domainTitle ?></strong>, contattateci:
                        </p>
                        <ul class="footer__contacts" style="margin-top: 20px;">
                            <li>
                                <i data-lucide="mail"></i>
                                <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                            </li>
                            <li>
                                <i data-lucide="phone"></i>
                                <a href="tel:+390697637885">+39 06 9763 7885</a>
                            </li>
                            <li>
                                <i data-lucide="map-pin"></i>
                                <span>Via del Corso, 418, 00186 Roma RM, Italia</span>
                            </li>
                        </ul>
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