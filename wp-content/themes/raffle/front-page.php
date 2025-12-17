<?php
/**
 * Front page template pulling the landing content from the static index.html.
 */
get_header();
$hero_image = get_theme_file_uri('/assets/images/herobackground02.png');
?>

<main>
  <section class="hero" id="home">
    <div class="container hero-grid">
      <div class="hero-copy">
        <p class="eyebrow">Compete &amp; win big every week</p>
        <h1 class="hero-title">Up to $154,000 cash prizes weekly</h1>
        <div class="hero-prize-stack">
          <span class="hero-prize">$3,780 Current Licensed Draw</span>
          <span class="hero-prize-sub">995 tickets • $10 each • Licence #465790</span>
        </div>
        <p class="hero-sub">zlottour is a licensed raffle experience with real cash prizes. Enter the current draw, track the countdown, and see winners posted after the official date.</p>
        <div class="countdown-card">
          <p class="countdown-title">Draw date: December 26, 2025</p>
          <div class="countdown" id="countdown">
            <div class="slot"><span class="value" id="countdownDays">27</span><small>Days</small></div>
            <div class="slot"><span class="value" id="countdownHours">00</span><small>Hours</small></div>
            <div class="slot"><span class="value" id="countdownMinutes">00</span><small>Minutes</small></div>
            <div class="slot"><span class="value" id="countdownSeconds">00</span><small>Seconds</small></div>
          </div>
        </div>
        <div class="hero-cta">
          <a href="#" class="btn primary" data-signup-btn>Join Now &amp; Start Winning</a>
          <a href="#how" class="btn ghost">How it works</a>
        </div>
        <div class="badges">
          <span class="pill accent"><i class="fa-solid fa-certificate"></i> Licence #465790</span>
          <span class="pill"><i class="fa-solid fa-ticket"></i> 995 tickets total</span>
          <span class="pill"><i class="fa-solid fa-calendar-day"></i> Draw: Dec 26, 2025</span>
        </div>
      </div>

      <div class="hero-visual">
        <div class="halo"></div>
        <img src="<?php echo esc_url( $hero_image ); ?>" alt="zlottour Raffle hero">
        <span class="hero-label"><i class="fa-solid fa-circle-info"></i> Real cash prizes</span>
      </div>
    </div>
  </section>

  <section class="packages" id="packages">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Grand prize</p>
        <h2 class="section-title">Limited tickets. One epic $3,780 prize.</h2>
        <p class="section-sub">A vivid, licensed raffle experience —built to stand out and easy to enter.</p>
      </div>

      <div class="grand-prize-wrap">
        <article class="grand-card">
          <h3>Prize overview</h3>
          <p class="value">$3,780 value</p>
          <p class="sub">Only 995 tickets • $10 each • Licence #465790</p>
          <p class="pitch">Think flagship gear, premium apparel, and field-ready accessories curated for a single lucky winner.</p>
          <div class="cta-stack">
            <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Get Tickets Now</a>
            <span class="pill accent"><i class="fa-solid fa-clock"></i> Draw: Dec 26, 2025</span>
          </div>
        </article>

        <div class="stat-grid">
          <div class="stat-box">
            <p class="label">Ticket pool</p>
            <p class="num">995</p>
            <p class="hint">Maximum odds: 1 in 995</p>
          </div>
          <div class="stat-box">
            <p class="label">Price per ticket</p>
            <p class="num">$10</p>
            <p class="hint">First-come, first-served</p>
          </div>
          <div class="stat-box">
            <p class="label">Winner count</p>
            <p class="num">1</p>
            <p class="hint">One grand prize package</p>
          </div>
          <div class="stat-box">
            <p class="label">Draw date</p>
            <p class="num">Dec 26</p>
            <p class="hint">2025 • Licensed &amp; posted</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packages" id="how">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">How it works</p>
        <h2 class="section-title">Simple raffle flow</h2>
        <p class="section-sub">Purchase, wait for the draw, and support conservation.</p>
      </div>

      <div class="package-grid">
        <article class="package-card">
          <div class="package-name">1. Purchase tickets</div>
          <p class="package-note">Only 995 tickets available, $10 each.</p>
        </article>
        <article class="package-card">
          <div class="package-name">2. Wait for draw</div>
          <p class="package-note">Official draw on December 26, 2025.</p>
        </article>
        <article class="package-card">
          <div class="package-name">3. Win the prize</div>
          <p class="package-note">One winner receives the $3,780 package.</p>
        </article>
        <article class="package-card">
          <div class="package-name">4. Support conservation</div>
          <p class="package-note">Proceeds align with wildlife and outdoor heritage causes.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="impact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Your impact</p>
        <h2 class="section-title">Tickets that support conservation</h2>
        <p class="section-sub">Every purchase echoes theraffle spirit—backing wildlife and outdoor heritage.</p>
      </div>
      <div class="package-grid">
        <article class="package-card">
          <p class="package-note">
            Every ticket helps fund wildlife and habitat initiatives similar to the Pheasant Release Program. Together we keep ecosystems healthy and outdoor experiences thriving.
          </p>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn primary">Ask about the mission</a>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="winners">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Winners</p>
        <h2 class="section-title">Winners announced after the draw</h2>
        <p class="section-sub">Check back after December 26, 2025 for the official winner announcement.</p>
      </div>
      <div class="package-grid">
        <article class="package-card">
          <p class="package-note">We’ll post the verified winner and prize claim details here once the draw is completed.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="regulatory" id="responsible">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Compliance</p>
        <h2 class="section-title">Licensed &amp; regulated</h2>
        <p class="section-sub">Licensed raffle with clear limits, posted draw date, and a focus on player wellbeing.</p>
      </div>

      <div class="rg-grid">
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Licence &amp; limits</h3>
          <p>Licence #465790 • 995 tickets • $10 each • Draw: Dec 26, 2025 • One $3,780 winner.</p>
          <span class="rg-badge-pill"><i class="fa-solid fa-scale-balanced"></i> Posted odds: max 1 in 995</span>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>Play safe, every time</h3>
          <p>19+ only. Set limits, keep raffle play fun, and take breaks. We promote balance over impulse.</p>
          <a class="rg-cta" href="https://aglc.ca/gaming/responsible-gambling" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-arrow-up-right-from-square"></i> Responsible gaming tips</a>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
          <h3>Need support?</h3>
          <p>Helpline: <a href="tel:18663322322" class="link-accent">1-866-332-2322</a> • Alberta Health Services Addiction Helpline.</p>
          <ul class="res-links">
            <li><a href="https://gamesenseab.ca/" target="_blank" rel="noopener noreferrer">GameSense Alberta</a></li>
            <li><a href="https://www.gambleaware.org/" target="_blank" rel="noopener noreferrer">BeGambleAware</a></li>
            <li><a href="https://selfexclusion.ca/" target="_blank" rel="noopener noreferrer">Self-Exclusion Program</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Contact</p>
        <h2 class="section-title">We’re here to help</h2>
        <p class="section-sub">Questions about tickets, rules, or responsible gaming? Reach out anytime.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-card">
          <h3>Message us</h3>
          <p>Email: <a href="mailto:support@zlottour.com">support@zlottour.com</a></p>
          <p>Hours: Mon–Fri, 9:00 AM – 5:00 PM (MT)</p>
          <p>Response time: within 1–2 business days</p>
        </div>
        <div class="contact-form-card">
          <h3>Need assistance?</h3>
          <p>Visit the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a> or <a href="<?php echo esc_url( home_url('/rules') ); ?>">Rules</a> for quick answers.</p>
          <div class="form-status" aria-live="polite">Prefer a call? Email us to schedule.</div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="sticky-ribbon">
  <div class="item"><i class="fa-solid fa-circle-exclamation"></i> 19+</div>
  <div class="item"><i class="fa-solid fa-shield"></i> Responsible Gaming</div>
  <div class="item"><i class="fa-solid fa-ticket"></i> Licence #465790</div>
  <div class="item"><i class="fa-solid fa-bolt"></i> Fast Checkout</div>
</div>

<div class="zlottour-modal" id="signupModal" aria-hidden="true">
  <div class="modal-card">
    <button class="modal-close" type="button" data-modal-close aria-label="Close form"><i class="fa-solid fa-xmark"></i></button>
    <h3>Ticket Purchase Inquiry</h3>
    <p>Send us a message about buying raffle tickets. We’ll respond with next steps.</p>
    <form id="signupForm" class="modal-form">
      <input type="text" id="signupName" placeholder="Full name" required>
      <input type="email" id="signupEmail" placeholder="Email address" required>
      <input type="tel" id="signupPhone" placeholder="Phone number" required>
      <textarea id="signupMessage" placeholder="Your message or ticket request" rows="3" required></textarea>
      <button type="submit" class="btn primary">Send message</button>
      <p id="signupStatus" class="modal-status" aria-live="polite"></p>
    </form>
  </div>
</div>

<div class="sticky-footer">
  <div class="container">
    <div class="badge"><span class="age-number">19+</span></div>
    <div class="badge"><i class="fa-solid fa-shield-check"></i> Responsible Gaming</div>
    <div class="badge"><i class="fa-solid fa-certificate"></i> Licence #465790</div>
  </div>
</div>

<?php get_footer(); ?>
