<?php
/**
 * Template Name: S&S Kreates Learning
 * Description: Learning resources and YouTube highlights for S&S Kreates Co.
 *
 * @package ssk-astra-child
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="ssk-page">
      <section class="hero" aria-labelledby="ssk-learning-hero">
        <div class="hero-card">
          <div class="hero-copy">
            <h1 id="ssk-learning-hero">Pick how you want to learn</h1>
            <p>Videos, quick reads, and planner-friendly guides to get you saving with mini wins.</p>
          </div>
          <div class="btn-row" role="group" aria-label="Learning actions">
            <a class="btn btn-primary" href="#ssk-learning-links">Browse lessons</a>
            <a class="btn btn-secondary" href="#ssk-featured-video">Watch the feature</a>
          </div>
        </div>
        <div class="hero-visual">
          <div class="mini-card">
            <span class="pill-meta">Fresh drop</span>
            <h4>Challenges for beginners</h4>
            <p class="section-subtitle" style="margin:0;">A simple roadmap for your first savings game.</p>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-featured-video" id="ssk-featured-video">
        <div class="section-header">
          <h2 class="section-title">Featured video</h2>
          <p class="section-subtitle">Rose walks you through a full challenge setup.</p>
        </div>
        <div class="learning-grid">
          <article class="yt-card">
            <div class="yt-thumb">
              <div class="yt-play" aria-hidden="true">▶</div>
            </div>
            <div class="yt-copy">
              <h3 class="step-title" style="margin:0;">Savings challenge starter kit</h3>
              <p class="step-text">Learn the basics of choosing a goal, setting a mini-win target, and tracking it.</p>
            </div>
          </article>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-learning-links" id="ssk-learning-links">
        <div class="section-header">
          <h2 class="section-title">Learning resources</h2>
          <p class="section-subtitle">Read, watch, and apply the savings glow-up.</p>
        </div>
        <div class="link-pills" role="list">
          <a class="link-pill" role="listitem" href="<?php echo esc_url( home_url( '/learning/beginners-guide/' ) ); ?>">Beginner’s guide to savings games</a>
          <a class="link-pill" role="listitem" href="<?php echo esc_url( home_url( '/learning/first-challenge/' ) ); ?>">How to choose your first challenge</a>
          <a class="link-pill" role="listitem" href="<?php echo esc_url( home_url( '/learning/irregular-income/' ) ); ?>">Budgeting with irregular income</a>
          <a class="link-pill" role="listitem" href="<?php echo esc_url( home_url( '/learning/sinking-funds/' ) ); ?>">Pairing scratch-offs with sinking funds</a>
        </div>
      </section>
    </div>
  </main>
</div>

<?php
get_footer();
