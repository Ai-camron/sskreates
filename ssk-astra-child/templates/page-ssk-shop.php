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
        <div class="hero-card">
          <div class="hero-copy">
            <h1 id="ssk-shop-hero">Shop savings challenges</h1>
            <p>Pastel scratch-offs, printable trackers, and digital planners to gamify your savings goals.</p>
            <div class="chip-row" role="list">
              <span class="chip" role="listitem">New this month</span>
              <span class="chip" role="listitem">Printable + digital</span>
              <span class="chip" role="listitem">Ships worldwide</span>
            </div>
          </div>
          <div class="btn-row" role="group" aria-label="Shop actions">
            <a class="btn btn-primary" href="<?php echo esc_url( $shop_url ); ?>">Browse all</a>
            <a class="btn btn-secondary" href="<?php echo esc_url( $account_url ); ?>">My account</a>
          </div>
        </div>
        <div class="hero-visual">
          <div class="mini-card">
            <span class="pill-meta">New this month</span>
            <h4>Celestial scratch series</h4>
            <p class="section-subtitle">Limited pastel foil cards to reveal your wins.</p>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-shop-filters">
        <div class="section-header">
          <h2 class="section-title" id="ssk-shop-filters">Filter by category</h2>
          <p class="section-subtitle">Pick a format to explore. (Filters are decorative for now.)</p>
        </div>
        <div class="chip-row" role="list">
          <span class="link-pill" role="listitem">Scratch-offs</span>
          <span class="link-pill" role="listitem">Printable trackers</span>
          <span class="link-pill" role="listitem">Digital planners</span>
          <span class="link-pill" role="listitem">Bundles</span>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-shop-grid">
        <div class="section-header">
          <h2 class="section-title" id="ssk-shop-grid">Shop all challenges</h2>
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
