<?php
/**
 * Front Page Template - Northview
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$hero_image    = get_theme_mod( 'northview_hero_image', get_template_directory_uri() . '/assets/images/hero.svg' );
$getaway_image = get_theme_mod( 'northview_getaway_image', get_template_directory_uri() . '/assets/images/getaway.svg' );
$img_base      = get_template_directory_uri() . '/assets/images/';
?>

<section class="hero" style="--hero-img:url('<?php echo esc_url( $hero_image ); ?>');">
  <div class="container hero-inner">
    <div class="loc">&#128205; <?php echo esc_html( get_theme_mod( 'northview_hero_location', 'Pacific Northwest, USA' ) ); ?></div>
    <h1><?php echo esc_html( get_theme_mod( 'northview_hero_title_1', 'Luxury Living' ) ); ?><br>
        <span class="accent"><?php echo esc_html( get_theme_mod( 'northview_hero_title_2', 'in Perfect Places' ) ); ?></span></h1>
    <p><?php echo esc_html( get_theme_mod( 'northview_hero_text', 'Discover breathtaking rentals and exceptional property management services across the most beautiful destinations.' ) ); ?></p>
    <div class="pill-row">
      <div class="pill">&#9968; Mountain</div>
      <div class="pill">&#127958; Lake View</div>
      <div class="pill">&#128293; Fireplace</div>
      <div class="pill">&#9971; Hot Tub</div>
    </div>
    <div class="cta-row">
      <button class="btn-gold">Explore Properties &#8594;</button>
      <div class="price-note">Starting from <b>$<?php echo esc_html( get_theme_mod( 'northview_hero_price', '189' ) ); ?></b> / night</div>
    </div>
    <div class="rating-row">
      <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      <?php echo esc_html( get_theme_mod( 'northview_hero_rating', '4.9' ) ); ?>
      <span>(<?php echo esc_html( get_theme_mod( 'northview_hero_reviews', '1250+ Reviews' ) ); ?>)</span>
    </div>
  </div>
</section>

<section class="why-section">
  <div class="container why-grid">
    <div>
      <div class="eyebrow">WHY MANAGE WITH US</div>
      <h2>We Handle Everything<br>You Can Relax</h2>
      <p>From marketing to maintenance, we take care of every detail so you can enjoy peace of mind while your property is in good hands.</p>
      <div class="feat-list">
        <div class="feat-item"><span class="dot">&#128100;</span> Guest Management</div>
        <div class="feat-item"><span class="dot">&#128200;</span> High Occupancy</div>
        <div class="feat-item"><span class="dot">&#128295;</span> Property Maintenance</div>
        <div class="feat-item"><span class="dot">&#128737;</span> Secure Payments</div>
        <div class="feat-item"><span class="dot">&#128337;</span> 24/7 Support</div>
        <div class="feat-item"><span class="dot">&#128203;</span> Detailed Reports</div>
      </div>
      <a href="#" class="btn-outline">Learn More About Us &#8594;</a>
    </div>
    <div class="diamond-wrap">
      <div class="diamond d1"><img src="<?php echo esc_url( $img_base . 'gallery-1.svg' ); ?>" alt="Property view"></div>
      <div class="diamond d2"><img src="<?php echo esc_url( $img_base . 'gallery-2.svg' ); ?>" alt="Property view"></div>
      <div class="diamond d3"><img src="<?php echo esc_url( $img_base . 'gallery-3.svg' ); ?>" alt="Property view"></div>
      <div class="diamond d4"><img src="<?php echo esc_url( $img_base . 'gallery-4.svg' ); ?>" alt="Property view"></div>
      <div class="center-badge"><span>&#127968;</span></div>
    </div>
  </div>
</section>

<section class="getaway" style="background-image:none;--getaway-img:url('<?php echo esc_url( $getaway_image ); ?>');">
  <div class="container getaway-grid">
    <div>
      <div class="eyebrow">FEATURED GETAWAY</div>
      <h2>Your Next Getaway<br>is Closer Than You Think</h2>
      <ul class="check-list">
        <li><span class="tick">&#10003;</span> Cozy cabins &amp; modern villas</li>
        <li><span class="tick">&#10003;</span> Perfect for families &amp; groups</li>
        <li><span class="tick">&#10003;</span> Flexible stay &amp; easy booking</li>
      </ul>
    </div>
    <div class="booking-card">
      <div class="booking-price">From <b>$<?php echo esc_html( get_theme_mod( 'northview_getaway_price', '189' ) ); ?></b> / night</div>
      <div class="booking-specs">
        <div class="spec"><span class="val"><?php echo esc_html( get_theme_mod( 'northview_getaway_guests', '4' ) ); ?></span>Guests</div>
        <div class="spec"><span class="val"><?php echo esc_html( get_theme_mod( 'northview_getaway_beds', '2' ) ); ?></span>Bedrooms</div>
        <div class="spec"><span class="val"><?php echo esc_html( get_theme_mod( 'northview_getaway_baths', '2' ) ); ?></span>Bathrooms</div>
      </div>
      <button class="btn-gold full">Check Availability &#8594;</button>
    </div>
  </div>
</section>

<?php get_footer(); ?>
