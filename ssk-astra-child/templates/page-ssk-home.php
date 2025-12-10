<?php
/**
 * Template Name: S&S Kreates Home
 * Description: Mobile-first hero, progress, and featured challenges for S&S Kreates Co.
 *
 * @package ssk-astra-child
 */

get_header();

$shop_url      = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
$account_url   = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/my-account/' );
$cart_url      = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' );
$learn_more_id = esc_attr( 'learn-with-rose' );
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="ssk-page">
      <div class="top-bar" aria-label="S&S Kreates navigation">
        <a class="logo-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <span class="logo-icon" aria-hidden="true">S&S</span>
          <span class="logo-text">S&S Kreates Co</span>
        </a>
        <div class="top-actions" style="display:flex;align-items:center;gap:0.65rem;">
          <a class="ghost-link" href="<?php echo esc_url( $account_url ); ?>">Sign in</a>
          <a class="icon-pill" href="<?php echo esc_url( $cart_url ); ?>">
            <span aria-hidden="true">🛒</span>
            <span class="sr-only">View cart</span>
            <span>Cart</span>
          </a>
        </div>
      </div>

      <section class="hero" aria-labelledby="ssk-hero-heading">
        <span class="page-decoration" style="top: -20px; right: 10%;" aria-hidden="true">🌹</span>
        <span class="page-decoration" style="bottom: 20px; left: 5%;" aria-hidden="true">🦋</span>
        <div class="hero-card">
          <div class="hero-copy">
            <h1 id="ssk-hero-heading"><span class="decorative-icon" aria-hidden="true">🌹</span> Gamified savings challenges for pastel-loving planners <span class="decorative-icon" aria-hidden="true">🦋</span></h1>
            <p>Pick a savings challenge, track mini wins, and watch your progress bar glow. Designed by Rose of S&S Kreates Co.</p>
            <div class="chip-row" role="list">
              <span class="chip" role="listitem">🌸 Pastel planners</span>
              <span class="chip" role="listitem">✨ Scratch-offs</span>
              <span class="chip" role="listitem">💖 Savings wins</span>
            </div>
          </div>
          <div class="btn-row" role="group" aria-label="Primary actions">
            <a class="btn btn-primary" href="<?php echo esc_url( $shop_url ); ?>">🛍️ Shop challenges</a>
            <a class="btn btn-secondary" href="#pick-your-challenge">See how it works</a>
          </div>
        </div>
        <div class="hero-visual">
          <div class="hero-card-stack" aria-label="Challenge preview cards">
            <div class="mini-card">
              <span class="pill-meta">🌹 Weekly challenge</span>
              <h4>Scratch, save, and celebrate mini wins</h4>
              <p class="section-subtitle" style="margin:0;">Track your progress in-app or on paper.</p>
            </div>
            <div class="mini-card">
              <span class="pill-meta">🦋 Digital + printable</span>
              <h4>Just log your mini wins</h4>
              <p class="section-subtitle" style="margin:0;">Use the progress bar to stay motivated.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="ssk-progress-heading">
        <div class="section-header">
          <p class="section-subtitle">Mini wins from this account</p>
          <h2 class="section-title" id="ssk-progress-heading">Your progress</h2>
        </div>
        <div class="ssk-progress-band">
          <div class="ssk-progress-summary">
            <span class="ssk-progress-label">Mini wins logged</span>
            <span class="ssk-progress-value"><?php echo do_shortcode( '[ssk_mini_wins_number]' ); ?></span>
          </div>
          <?php echo do_shortcode( '[ssk_savings_progress_bar]' ); ?>
        </div>
      </section>

      <section class="section" aria-labelledby="pick-your-challenge">
        <span class="page-decoration" style="top: 10px; right: 5%;" aria-hidden="true">🌸</span>
        <div class="section-header">
          <h2 class="section-title" id="pick-your-challenge">🌹 Pick your challenge</h2>
          <p class="section-subtitle">Choose a pastel-friendly savings adventure.</p>
        </div>
        <div class="card-row-scroll" role="list">
          <article class="category-card" role="listitem">
            <span class="category-tag">✨ Scratch-Off Cards</span>
            <h3 class="category-name">Peel, reveal, and save</h3>
            <p class="category-desc">Physical scratch cards with pastel foil and motivational rewards.</p>
            <div class="category-meta">
              <span class="pill-soft">🌸 Beginner friendly</span>
              <span class="pill-soft">📦 Ships in 3 days</span>
            </div>
          </article>
          <article class="category-card" role="listitem">
            <span class="category-tag">📄 Printable Trackers</span>
            <h3 class="category-name">Mark progress your way</h3>
            <p class="category-desc">Downloadable trackers for envelopes, binders, and planners.</p>
            <div class="category-meta">
              <span class="pill-soft">⚡ Instant download</span>
              <span class="pill-soft">🦋 Kawaii icons</span>
            </div>
          </article>
          <article class="category-card" role="listitem">
            <span class="category-tag">📱 Digital Planners</span>
            <h3 class="category-name">Tap to log mini wins</h3>
            <p class="category-desc">GoodNotes-ready planner pages and widgets for progress bars.</p>
            <div class="category-meta">
              <span class="pill-soft">💫 iPad + Android</span>
              <span class="pill-soft">🔗 Hyperlinked tabs</span>
            </div>
          </article>
        </div>
      </section>

      <section class="section" aria-labelledby="how-it-works">
        <div class="section-header">
          <h2 class="section-title" id="how-it-works">How it works</h2>
          <p class="section-subtitle">Three simple steps to gamify your savings.</p>
        </div>
        <div class="step-list">
          <div class="step-card">
            <div class="step-icon" aria-hidden="true">1</div>
            <div>
              <h3 class="step-title">Pick a challenge</h3>
              <p class="step-text">Choose a scratch-off, printable, or digital planner.</p>
            </div>
          </div>
          <div class="step-card">
            <div class="step-icon" aria-hidden="true">2</div>
            <div>
              <h3 class="step-title">Log mini wins</h3>
              <p class="step-text">Scratch a spot or mark your tracker every time you save.</p>
            </div>
          </div>
          <div class="step-card">
            <div class="step-icon" aria-hidden="true">3</div>
            <div>
              <h3 class="step-title">See your glow-up</h3>
              <p class="step-text">Celebrate progress with the pastel progress bar and share your wins.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="demo-block">
        <div class="section-header">
          <h2 class="section-title" id="demo-block">Try a demo</h2>
          <p class="section-subtitle">Scratch a few spots to see the surprise savings amounts.</p>
        </div>
        <div class="demo-card">
          <div class="demo-visual" aria-hidden="true">
            <div class="demo-grid">
              <div class="demo-dot"></div>
              <div class="demo-dot scratched"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot scratched"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot"></div>
              <div class="demo-dot scratched"></div>
              <div class="demo-dot"></div>
            </div>
            <p class="demo-label">Pastel scratch grid</p>
          </div>
          <div>
            <h3 class="demo-copy-title">Reveal mini wins</h3>
            <p class="demo-copy-text">Each spot hides a number—save that amount and log it to see your bar grow.</p>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="featured-challenges">
        <span class="page-decoration" style="top: 0; left: 3%;" aria-hidden="true">🦋</span>
        <div class="section-header">
          <h2 class="section-title" id="featured-challenges">🌟 Featured challenges</h2>
          <p class="section-subtitle">Customer favorites for pastel savers.</p>
        </div>
        <div class="product-grid">
          <article class="product-card">
            <div class="product-media">
              <span class="product-badge">New</span>
              <span class="product-meta-pill">30 spots</span>
            </div>
            <div class="product-body">
              <h3 class="product-name">Aurora Scratch Savings</h3>
              <p class="product-label">Foiled rainbow scratch card</p>
              <p class="product-price">$24.00</p>
            </div>
            <div class="product-actions">
              <a class="btn-ghost" href="<?php echo esc_url( $shop_url ); ?>">Details</a>
              <a class="btn-fill" href="<?php echo esc_url( $shop_url ); ?>">Add</a>
            </div>
          </article>
          <article class="product-card">
            <div class="product-media">
              <span class="product-badge">Bestseller</span>
              <span class="product-meta-pill">Digital</span>
            </div>
            <div class="product-body">
              <h3 class="product-name">Cloud Planner Bundle</h3>
              <p class="product-label">Hyperlinked GoodNotes spreads</p>
              <p class="product-price">$19.00</p>
            </div>
            <div class="product-actions">
              <a class="btn-ghost" href="<?php echo esc_url( $shop_url ); ?>">Details</a>
              <a class="btn-fill" href="<?php echo esc_url( $shop_url ); ?>">Add</a>
            </div>
          </article>
          <article class="product-card">
            <div class="product-media">
              <span class="product-badge">Limited</span>
              <span class="product-meta-pill">Printable</span>
            </div>
            <div class="product-body">
              <h3 class="product-name">Sunrise Savings Tracker</h3>
              <p class="product-label">Print-at-home envelopes</p>
              <p class="product-price">$12.00</p>
            </div>
            <div class="product-actions">
              <a class="btn-ghost" href="<?php echo esc_url( $shop_url ); ?>">Details</a>
              <a class="btn-fill" href="<?php echo esc_url( $shop_url ); ?>">Add</a>
            </div>
          </article>
        </div>
      </section>

      <section class="section" id="<?php echo $learn_more_id; ?>" aria-labelledby="learn-with-rose">
        <span class="page-decoration" style="top: 20px; right: 8%;" aria-hidden="true">🌹</span>
        <div class="section-header">
          <h2 class="section-title" id="learn-with-rose">🌹 Learn with Rose</h2>
          <p class="section-subtitle">Watch how to set up your first challenge.</p>
        </div>
        <div class="learning-grid">
          <article class="yt-card">
            <div class="yt-thumb">
              <div class="yt-play" aria-hidden="true">▶</div>
            </div>
            <div class="yt-copy">
              <h3 class="step-title" style="margin:0;">Savings challenge walkthrough</h3>
              <p class="step-text">See how Rose logs mini wins and keeps the vibe pastel.</p>
            </div>
          </article>
          <div class="link-pills" role="list">
            <a class="link-pill" role="listitem" href="<?php echo esc_url( home_url( '/learning/beginners-guide/' ) ); ?>">Beginner's guide</a>
            <a class="link-pill" role="listitem" href="<?php echo esc_url( home_url( '/learning/first-challenge/' ) ); ?>">Pick your first challenge</a>
            <a class="link-pill" role="listitem" href="<?php echo esc_url( home_url( '/learning/irregular-income/' ) ); ?>">Irregular income tips</a>
            <a class="link-pill" role="listitem" href="<?php echo esc_url( home_url( '/learning/sinking-funds/' ) ); ?>">Pair with sinking funds</a>
          </div>
        </div>
      </section>

      <section class="section" aria-labelledby="real-results">
        <div class="section-header">
          <h2 class="section-title" id="real-results">Real results</h2>
          <p class="section-subtitle">Pastel savers sharing their wins.</p>
        </div>
        <div class="review-row" role="list">
          <article class="review-card" role="listitem">
            <div class="review-stars" aria-hidden="true">★★★★★</div>
            <p class="review-quote">“Scratching off each spot makes saving fun!”</p>
            <p class="review-name">Jenna — $450 saved</p>
          </article>
          <article class="review-card" role="listitem">
            <div class="review-stars" aria-hidden="true">★★★★★</div>
            <p class="review-quote">“The pastel planner keeps me logging every mini win.”</p>
            <p class="review-name">Alex — emergency fund</p>
          </article>
          <article class="review-card" role="listitem">
            <div class="review-stars" aria-hidden="true">★★★★★</div>
            <p class="review-quote">“My kids love revealing the amounts. Family win!”</p>
            <p class="review-name">Sam — vacation savings</p>
          </article>
        </div>
      </section>

      <section class="section" aria-labelledby="email-strip">
        <div class="email-strip">
          <h2 class="email-strip-title" id="email-strip">Get new challenges, launches, and savings tips</h2>
          <p class="email-strip-text">Join Rose’s list for pastel goodies and mini challenges.</p>
          <form class="email-form" action="#" method="post">
            <label class="sr-only" for="ssk-email-input">Email address</label>
            <input class="email-input" id="ssk-email-input" type="email" name="email" placeholder="you@example.com" required />
            <button class="email-btn" type="submit">Sign me up</button>
            <p class="email-footnote">We respect your inbox. Unsubscribe anytime.</p>
          </form>
        </div>
      </section>

      <footer class="footer-block" aria-label="Footer">
        <div class="footer-links">
          <a href="<?php echo esc_url( $shop_url ); ?>">Shop all</a>
          <a href="#how-it-works">How it works</a>
          <a href="<?php echo esc_url( $account_url ); ?>">My account</a>
          <a href="<?php echo esc_url( home_url( '/help/' ) ); ?>">Help &amp; FAQ</a>
        </div>
      </footer>
    </div>
  </main>
</div>

<?php
get_footer();
