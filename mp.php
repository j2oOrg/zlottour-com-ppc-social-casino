<?php
// Standalone Evelyn Arcade landing page for WordPress (or any PHP host).
// Drop this file and the accompanying assets folder into the same directory.

$casinos = [
    [
        'name' => 'Hurmio',
        'logo' => 'assets/images/hurmio-logo.png',
        'rating' => 5,
        'bonus' => '15 % päivittäinen käteispalautus',
        'features' => [
            '15 % päivittäinen käteispalautus',
            'Suomenkielinen palvelu',
            'Jatkuvaa cashbackia',
            'Nopeat kotiutukset'
        ],
        'cta_text' => 'Pelaa Hurmiossa →',
        'cta_link' => 'https://att.trk.evelynarcade.com/click/1',
        'highlight' => true,
        'tag' => 'Cashback joka päivä',
    ],
    [
        'name' => 'Rullat',
        'logo' => 'assets/images/rullat-logo.png',
        'rating' => 4.7,
        'bonus' => '800 kierrosta ensitalletuksella',
        'free_spins' => '800 kierrosta',
        'features' => [
            '800 kierrosta ensitalletuksella',
            'Jopa 15 % palautus'
        ],
        'cta_text' => 'Avaa Rullat →',
        'cta_link' => 'https://att.trk.evelynarcade.com/click/2',
        'highlight' => false,
        'tag' => 'Mega-kierrokset',
    ],
    [
        'name' => 'Jellona',
        'logo' => 'assets/images/jellona-logo.png',
        'rating' => 4.6,
        'bonus' => '15 % käteispalautus + kasinoralli',
        'features' => [
            '15 % käteispalautus',
            'Kasinoralli'
        ],
        'cta_text' => 'Kokeile Jellonaa →',
        'cta_link' => 'https://att.trk.evelynarcade.com/click/3',
        'highlight' => false,
        'tag' => 'Käteispalautus',
    ],
    [
        'name' => 'Kingmaker',
        'logo' => 'assets/images/kingmaker-logo.png',
        'rating' => 4.5,
        'bonus' => 'Premium Pay N Play -kokemus',
        'features' => [
            'Excellent selection of payment methods',
            '24/7 live chat',
            'Low deposit options'
        ],
        'cta_text' => 'Pelaa Kingmakerilla →',
        'cta_link' => 'https://att.trk.evelynarcade.com/click/4',
        'highlight' => false,
        'tag' => '24/7 tuki',
    ],
    [
        'name' => 'New Casino',
        'logo' => 'assets/images/casino-logo.png',
        'rating' => 1,
        'bonus' => 'Bonus description',
        'free_spins' => '200 Free spins',
        'features' => [
            'Great games'
        ],
        'cta_text' => 'Play Now →',
        'cta_link' => 'https://example.com/click/1',
        'highlight' => true,
        'tag' => 'New',
    ]
];

/**
 * Render star icons according to rating (0–5).
 */
function render_stars(float $rating): string
{
    $icons = '';
    for ($i = 0; $i < 5; $i++) {
        $filled = $i < $rating;
        $icons .= '<svg aria-hidden="true" viewBox="0 0 24 24" class="star ' . ($filled ? 'filled' : '') . '">'
            . '<path d="M12 17.3l-6.2 3.6 1.6-7-5.4-4.7 7.1-.6L12 2l2.9 6.6 7.1.6-5.4 4.7 1.6 7z" />'
            . '</svg>';
    }
    return $icons;
}
?>
<!DOCTYPE html>
<html lang="fi">
<script type="text/javascript" src="https://att.trk.evelynarcade.com/track.js?rtkcmpid=6926d7046a2ca32c92764116"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvelynArcade – Pay N Play -kasinot</title>
    <meta name="description" content="Nämä ovat EvelynArcaden kuratoimia Pay N Play -kasinoita. Klikkaa ja siirry suoraan pelaamaan ilman rekisteröitymistä.">
    <style>
        :root {
            --bg: #0b1220;
            --bg-soft: #0f172a;
            --panel: #111827;
            --panel-2: #0f172a;
            --border: #1f2937;
            --text: #e5e7eb;
            --muted: #94a3b8;
            --gold: #f6cf57;
            --gold-strong: #f5c542;
            --emerald: #10b981;
            --emerald-strong: #0ea271;
            --amber-soft: rgba(251, 191, 36, 0.2);
            --shadow: 0 20px 70px rgba(0, 0, 0, 0.35);
            --radius: 22px;
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: radial-gradient(circle at 20% 20%, rgba(251,191,36,0.06), transparent 30%),
                        radial-gradient(circle at 80% 0%, rgba(16,185,129,0.08), transparent 25%),
                        linear-gradient(180deg, #0b1220 0%, #0b1220 30%, #0f172a 100%);
            color: var(--text);
            font-family: "Inter", "Segoe UI", system-ui, -apple-system, sans-serif;
            min-height: 100vh;
        }
        a { color: inherit; text-decoration: none; }

        .container {
            width: min(1200px, 100%);
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 20;
            backdrop-filter: blur(10px);
            background: rgba(15, 23, 42, 0.75);
            border-bottom: 1px solid var(--border);
        }
        .site-header .inner {
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            letter-spacing: 0.01em;
        }
        .brand svg {
            width: 22px;
            height: 22px;
            color: var(--gold);
        }

        h1, h2, h3, h4 {
            margin: 0;
            color: #f8fafc;
            line-height: 1.2;
        }
        p { color: var(--muted); line-height: 1.6; }

        .hero {
            padding: 72px 0 24px;
            text-align: center;
        }
        .hero h2 {
            font-size: clamp(26px, 3vw, 32px);
            color: var(--gold);
        }
        .hero p {
            margin-top: 10px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cards {
            display: flex;
            flex-direction: column;
            gap: 22px;
            padding-bottom: 80px;
        }

        .casino-card {
            position: relative;
            background: linear-gradient(120deg, rgba(15, 23, 42, 0.95), rgba(17, 24, 39, 0.9), rgba(15, 23, 42, 0.85));
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            cursor: pointer;
            transition: transform 180ms ease, border-color 180ms ease, box-shadow 180ms ease;
        }
        .casino-card:hover {
            transform: translateY(-2px);
            border-color: rgba(246, 207, 87, 0.4);
            box-shadow: 0 18px 55px rgba(0, 0, 0, 0.45);
        }
        .casino-card:focus-visible {
            outline: 3px solid rgba(246, 207, 87, 0.6);
            outline-offset: 4px;
        }
        .casino-card .bg-glow {
            position: absolute;
            inset: 0;
            background: linear-gradient(110deg, rgba(16, 185, 129, 0.15), rgba(246, 207, 87, 0.12), transparent 60%);
            pointer-events: none;
        }
        .casino-card .content {
            position: relative;
            padding: clamp(20px, 2vw, 32px);
            display: grid;
            grid-template-columns: minmax(240px, 280px) 1fr minmax(230px, 260px);
            gap: clamp(18px, 2vw, 26px);
            align-items: center;
        }
        @media (max-width: 1024px) {
            .casino-card .content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .logo-block { justify-content: center; }
            .features { align-items: center; }
            .cta { width: 100%; }
        }

        .badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: linear-gradient(90deg, rgba(246, 207, 87, 0.95), rgba(246, 207, 87, 0.8));
            color: #0b1220;
            font-weight: 800;
            padding: 6px 10px;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 6px 20px rgba(246, 207, 87, 0.35);
            border: 1px solid rgba(0, 0, 0, 0.15);
            z-index: 3;
        }
        .tag {
            position: absolute;
            top: 14px;
            left: 14px;
            background: linear-gradient(120deg, rgba(16,185,129,0.8), rgba(52,211,153,0.75));
            color: #eafff4;
            font-weight: 700;
            padding: 6px 12px;
            border-radius: 999px;
            border: 1px solid rgba(209, 250, 229, 0.4);
            box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3);
            z-index: 3;
        }
        .is-highlight { box-shadow: 0 0 0 2px rgba(246, 207, 87, 0.4), var(--shadow); }

        .logo-block {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
        }
        .logo-wrap {
            width: 190px;
            height: 190px;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(148, 163, 184, 0.28);
            display: grid;
            place-items: center;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.35);
            overflow: hidden;
        }
        .logo-wrap img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 18px;
            filter: drop-shadow(0 6px 20px rgba(0, 0, 0, 0.4));
        }
        .rating {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 999px;
            background: linear-gradient(120deg, rgba(251, 191, 36, 0.35), rgba(246, 207, 87, 0.2));
            border: 1px solid rgba(251, 191, 36, 0.45);
            color: #fef3c7;
            font-weight: 800;
            letter-spacing: 0.02em;
        }
        .rating .stars {
            display: inline-flex;
            gap: 4px;
        }
        .rating .star {
            width: 18px;
            height: 18px;
            fill: rgba(251, 191, 36, 0.2);
            stroke: rgba(251, 191, 36, 0.9);
            stroke-width: 1.4;
        }
        .rating .star.filled { fill: #fcd34d; stroke: #facc15; }

        .features {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .label {
            text-transform: uppercase;
            letter-spacing: 0.22em;
            color: rgba(16, 185, 129, 0.8);
            font-size: 11px;
            font-weight: 700;
        }
        .bonus {
            font-size: clamp(26px, 3vw, 34px);
            font-weight: 900;
            color: #fff;
        }
        .free-spins {
            font-size: 18px;
            font-weight: 700;
            color: #fda4af;
        }
        .feature-list {
            display: grid;
            gap: 10px;
            color: #e2e8f0;
            font-size: 16px;
        }
        .feature-item {
            display: grid;
            grid-template-columns: 16px 1fr;
            align-items: center;
            gap: 10px;
        }
        .feature-item .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--emerald);
            box-shadow: 0 0 0 6px rgba(16, 185, 129, 0.15);
        }

        .cta {
            display: flex;
            flex-direction: column;
            gap: 14px;
            align-items: center;
        }
        .cta .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 16px 18px;
            border-radius: 16px;
            border: 1px solid rgba(16, 185, 129, 0.6);
            background: linear-gradient(110deg, var(--emerald), var(--emerald-strong));
            color: #f8fafc;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 0.01em;
            box-shadow: 0 16px 36px rgba(16, 185, 129, 0.35);
            transition: transform 160ms ease, box-shadow 160ms ease, filter 160ms ease;
        }
        .cta .button:hover {
            transform: translateY(-1px);
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.4);
            filter: brightness(1.03);
        }
        .cta .button svg {
            width: 18px;
            height: 18px;
        }
        .cta .review {
            color: var(--muted);
            font-size: 14px;
            text-decoration: underline;
            text-decoration-color: rgba(246, 207, 87, 0.7);
            text-underline-offset: 5px;
        }
        .cta .review:hover { color: var(--gold); }

        .site-footer {
            border-top: 1px solid var(--border);
            background: rgba(11, 18, 32, 0.8);
            margin-top: 40px;
            padding: 38px 0;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            font-size: 14px;
        }
        .footer-grid h3 {
            color: var(--gold);
            margin-bottom: 8px;
            font-size: 16px;
        }
        .footer-grid a { color: var(--muted); }
        .footer-grid a:hover { color: var(--gold); }
        .footer-meta {
            margin-top: 26px;
            font-size: 12px;
            color: var(--muted);
        }
    </style>
</head>
<body>
<header class="site-header" aria-label="Ylätunniste">
    <div class="container inner">
        <div class="brand" aria-label="Kasinon Uudet Tuulet">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 2 4 5v6c0 5 3.6 9.4 8 11 4.4-1.6 8-6 8-11V5l-8-3Z" />
                <path d="M12 22V8" />
            </svg>
            <span>Kasinon Uudet Tuulet</span>
        </div>
    </div>
</header>

<main>
    <section id="evelynarcade-casinos" class="hero">
        <div class="container">
            <div>
                <h2>Suomen parhaat diilit joulukuussa</h2>
                <p>Nämä ovat EvelynArcaden kuratoimia Pay N Play -kasinoita. Klikkaa ja siirry suoraan pelaamaan ilman rekisteröitymistä.</p>
            </div>
        </div>
    </section>

    <section class="container cards" aria-label="Kasinolistaukset">
        <?php foreach ($casinos as $casino): ?>
            <?php
            $ctaLink = htmlspecialchars($casino['cta_link'], ENT_QUOTES, 'UTF-8');
            $ctaText = htmlspecialchars($casino['cta_text'], ENT_QUOTES, 'UTF-8');
            $bonus = htmlspecialchars($casino['bonus'], ENT_QUOTES, 'UTF-8');
            $name = htmlspecialchars($casino['name'], ENT_QUOTES, 'UTF-8');
            $tag = isset($casino['tag']) ? htmlspecialchars($casino['tag'], ENT_QUOTES, 'UTF-8') : null;
            $logo = htmlspecialchars($casino['logo'], ENT_QUOTES, 'UTF-8');
            $freeSpins = $casino['free_spins'] ?? null;
            $reviewPath = $casino['review_path'] ?? null;
            $reviewLabel = $casino['review_label'] ?? 'Lue arvostelu';
            ?>
            <article class="casino-card <?php echo !empty($casino['highlight']) ? 'is-highlight' : ''; ?>" role="button" tabindex="0" data-href="<?php echo $ctaLink; ?>" aria-label="<?php echo $name; ?>">
                <div class="bg-glow" aria-hidden="true"></div>
                <?php if (!empty($casino['highlight'])): ?>
                    <div class="badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polygon points="12 2 15 8.5 22 9.3 17 14.1 18.2 21 12 17.7 5.8 21 7 14.1 2 9.3 9 8.5 12 2"></polygon>
                        </svg>
                        Suositeltu
                    </div>
                <?php endif; ?>
                <?php if (!empty($tag)): ?>
                    <div class="tag"><?php echo $tag; ?></div>
                <?php endif; ?>
                <div class="content">
                    <div class="logo-block">
                        <div class="logo-wrap">
                            <img src="<?php echo $logo; ?>" alt="<?php echo $name; ?> logo" loading="lazy">
                        </div>
                        <div class="rating" aria-label="Arvosana <?php echo number_format((float)$casino['rating'], 1); ?>">
                            <span><?php echo number_format((float)$casino['rating'], 1); ?></span>
                            <span class="stars"><?php echo render_stars((float)$casino['rating']); ?></span>
                        </div>
                    </div>

                    <div class="features">
                        <div class="label">Tervetuliaistarjous</div>
                        <div class="bonus"><?php echo $bonus; ?></div>
                        <?php if (!empty($freeSpins)): ?>
                            <div class="free-spins">+ <?php echo htmlspecialchars($freeSpins, ENT_QUOTES, 'UTF-8'); ?> ilmaiskierrosta</div>
                        <?php endif; ?>
                        <div class="feature-list" aria-label="Tarjouksen kohokohdat">
                            <?php foreach ($casino['features'] as $feature): ?>
                                <div class="feature-item">
                                    <span class="dot" aria-hidden="true"></span>
                                    <span><?php echo htmlspecialchars($feature, ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="cta">
                        <a class="button" href="<?php echo $ctaLink; ?>" target="_blank" rel="nofollow sponsored noopener noreferrer" aria-label="Pelaa nyt: <?php echo $name; ?>">
                            <?php echo $ctaText; ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m13 6 6 6-6 6"></path>
                            </svg>
                        </a>
                        <?php if (!empty($reviewPath)): ?>
                            <a class="review" href="<?php echo htmlspecialchars($reviewPath, ENT_QUOTES, 'UTF-8'); ?>">
                                <?php echo htmlspecialchars($reviewLabel, ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<footer class="site-footer" aria-label="Alatunniste">
    <div class="container footer-grid">
        <div>
            <h3>Kasinon Uudet Tuulet</h3>
            <p>Autamme suomalaisia pelaajia löytämään luotettavat ja nopeat kasinot ilman rekisteröitymistä. Muista pelata vastuullisesti.</p>
            <div style="margin-top: 12px; display: flex; flex-direction: column; gap: 6px;">
                <a href="https://www.peluuri.fi/fi" target="_blank" rel="noopener noreferrer">Peluuri – tarvitsetko apua?</a>
            </div>
        </div>
        <div>
            <h3>Vastuullinen pelaaminen</h3>
            <p>Pelaaminen on kielletty alle 18-vuotiailta. Hae apua, jos pelaamisesta tulee ongelma.</p>
        </div>
        <div>
            <h3>Huomio</h3>
            <p>Osa sivuston linkeistä on affiliatelinkkejä. Klikkauksen seurauksena voimme saada komission. Linkit on merkitty <span style="font-weight: 600;">rel="sponsored"</span> -attribuutilla.</p>
        </div>
    </div>
    <div class="container footer-meta">© <?php echo date('Y'); ?> Kasinon Uudet Tuulet. Kaikki oikeudet pidätetään.</div>
</footer>

<script>
    // Make the entire card open the CTA link for convenience.
    document.querySelectorAll('.casino-card').forEach((card) => {
        const href = card.dataset.href;
        if (!href) return;
        const open = () => window.open(href, '_blank', 'noopener,noreferrer');
        card.addEventListener('click', (event) => {
            if (event.target.closest('a')) return;
            open();
        });
        card.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                open();
            }
        });
    });
</script>
</body>
</html>