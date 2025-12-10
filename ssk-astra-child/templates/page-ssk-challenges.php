<?php
/**
 * Template Name: S&S Kreates Challenges
 * Description: Challenges overview with demo and category cards.
 *
 * @package ssk-astra-child
 */

get_header();

$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="ssk-page">
      <section class="hero" aria-labelledby="ssk-challenges-hero">
        <span class="page-decoration" style="top: -15px; right: 10%;" aria-hidden="true">🦋</span>
        <span class="page-decoration" style="bottom: 25px; left: 12%;" aria-hidden="true">🌹</span>
        <div class="hero-card">
          <div class="hero-copy">
            <h1 id="ssk-challenges-hero">🌟 Explore all S&S savings challenges</h1>
            <p>Find the challenge that matches your goal—vacations, debt payoff, or sinking funds.</p>
          </div>
          <div class="btn-row" role="group" aria-label="Challenge actions">
            <a class="btn btn-primary" href="<?php echo esc_url( $shop_url ); ?>">🛍️ Go to Shop</a>
            <a class="btn btn-secondary" href="#ssk-scratch-demo">See scratch-off demo</a>
          </div>
        </div>
        <div class="hero-visual">
          <div class="mini-card">
            <span class="pill-meta">🎯 Challenge vault</span>
            <h4>Dozens of pastel-friendly games</h4>
            <p class="section-subtitle" style="margin:0;">Swipe through and pick your vibe.</p>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-scratch-demo" id="ssk-scratch-demo">
        <span class="page-decoration" style="top: 15px; right: 8%;" aria-hidden="true">🌸</span>
        <div class="section-header">
          <h2 class="section-title">✨ Scratch-off demo</h2>
          <p class="section-subtitle">Preview how the spots reveal your next mini win.</p>
        </div>
        <div class="demo-card">
          <div class="demo-visual" aria-hidden="true">
            <div class="demo-grid">
              <div class="demo-dot scratched"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot scratched"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot scratched"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot"></div>
            </div>
            <p class="demo-label">Glow-up scratch grid</p>
          </div>
          <div>
            <h3 class="demo-copy-title">Log each reveal</h3>
            <p class="demo-copy-text">Scratch a square, save the amount, and add it to your progress bar.</p>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-challenge-types">
        <span class="page-decoration" style="top: 5px; left: 6%;" aria-hidden="true">🌹</span>
        <div class="section-header">
          <h2 class="section-title" id="ssk-challenge-types">🦋 Challenge types</h2>
          <p class="section-subtitle">Pick the category that fits your current goal.</p>
        </div>
        <div class="card-row-scroll" role="list">
          <article class="category-card" role="listitem">
            <span class="category-tag">✈️ Vacation savings</span>
            <h3 class="category-name">Beach, mountains, or city</h3>
            <p class="category-desc">Build a dreamy travel fund with pastel scratch-offs.</p>
            <div class="category-meta">
              <span class="pill-soft">👨‍👩‍👧 Family friendly</span>
              <span class="pill-soft">🌟 Sticker rewards</span>
            </div>
          </article>
          <article class="category-card" role="listitem">
            <span class="category-tag">💳 Debt payoff</span>
            <h3 class="category-name">Snowball your balances</h3>
            <p class="category-desc">Motivating cards to knock out debts spot by spot.</p>
            <div class="category-meta">
              <span class="pill-soft">📊 Track interest</span>
              <span class="pill-soft">📅 Weekly pacing</span>
            </div>
          </article>
          <article class="category-card" role="listitem">
            <span class="category-tag">🎁 Sinking funds</span>
            <h3 class="category-name">Future-ready savings</h3>
            <p class="category-desc">Printable trackers and planners for birthdays, gifts, and more.</p>
            <div class="category-meta">
              <span class="pill-soft">✉️ Envelope ready</span>
              <span class="pill-soft">📱 Digital + paper</span>
            </div>
          </article>
        </div>
      </section>
    </div>
  </main>
</div>

<?php
get_footer();
