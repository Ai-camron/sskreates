<?php
/**
 * Template Name: S&S Kreates Shop
 * Description: Shop intro and WooCommerce products grid for S&S Kreates Co.
 *
 * @package ssk-astra-child
 */

get_header();

$shop_url    = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
$account_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/my-account/' );
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="ssk-page">
      <section class="hero" aria-labelledby="ssk-shop-hero">
        <span class="page-decoration" style="top: -10px; right: 15%;" aria-hidden="true">🌹</span>
        <span class="page-decoration" style="bottom: 30px; left: 10%;" aria-hidden="true">🦋</span>
        <div class="hero-card">
          <div class="hero-copy">
            <h1 id="ssk-shop-hero">🛍️ Shop savings challenges</h1>
            <p>Pastel scratch-offs, printable trackers, and digital planners to gamify your savings goals.</p>
            <div class="chip-row" role="list">
              <span class="chip" role="listitem">✨ New this month</span>
              <span class="chip" role="listitem">📱 Printable + digital</span>
              <span class="chip" role="listitem">🌍 Ships worldwide</span>
            </div>
          </div>
          <div class="btn-row" role="group" aria-label="Shop actions">
            <a class="btn btn-primary" href="<?php echo esc_url( $shop_url ); ?>">🌸 Browse all</a>
            <a class="btn btn-secondary" href="<?php echo esc_url( $account_url ); ?>">My account</a>
          </div>
        </div>
        <div class="hero-visual">
          <div class="mini-card">
            <span class="pill-meta">🌟 New this month</span>
            <h4>Celestial scratch series</h4>
            <p class="section-subtitle" style="margin:0;">Limited pastel foil cards to reveal your wins.</p>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-shop-filters">
        <span class="page-decoration" style="top: 10px; left: 5%;" aria-hidden="true">🌸</span>
        <div class="section-header">
          <h2 class="section-title" id="ssk-shop-filters">🦋 Filter by category</h2>
          <p class="section-subtitle">Pick a format to explore. (Filters are decorative for now.)</p>
        </div>
        <div class="chip-row" role="list">
          <button class="link-pill" type="button" role="listitem">✨ Scratch-offs</button>
          <button class="link-pill" type="button" role="listitem">📄 Printable trackers</button>
          <button class="link-pill" type="button" role="listitem">📱 Digital planners</button>
          <button class="link-pill" type="button" role="listitem">🎁 Bundles</button>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-shop-grid">
        <span class="page-decoration" style="top: 0; right: 10%;" aria-hidden="true">🌹</span>
        <div class="section-header">
          <h2 class="section-title" id="ssk-shop-grid">🌟 Shop all challenges</h2>
          <p class="section-subtitle">Newest arrivals first.</p>
        </div>
        <div>
          <?php echo do_shortcode( '[products limit="8" columns="4" orderby="date" order="DESC" visibility="visible"]' ); ?>
        </div>
      </section>
    </div>
  </main>
</div>

<?php
get_footer();
