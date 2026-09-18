<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-about">
        <div class="footer-logo">
          <div class="logo-icon">&#127968;</div>
          <div class="logo-text">
            <div class="top"><?php bloginfo( 'name' ); ?></div>
            <div class="bottom">PROPERTY MANAGEMENT</div>
          </div>
        </div>
        <p><?php bloginfo( 'description' ); ?> Premium property management services for vacation rentals and residential properties.</p>
        <div class="social-row">
          <a href="#">f</a><a href="#">&#128247;</a><a href="#">in</a><a href="#">&#9658;</a>
        </div>
      </div>

      <div>
        <h4>Company</h4>
        <?php wp_nav_menu( array(
            'theme_location' => 'footer-company', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>',
            'fallback_cb' => function() { echo '<ul><li><a href="#">About Us</a></li><li><a href="#">Our Team</a></li><li><a href="#">Careers</a></li><li><a href="#">Contact Us</a></li></ul>'; },
        ) ); ?>
      </div>

      <div>
        <h4>Services</h4>
        <?php wp_nav_menu( array(
            'theme_location' => 'footer-services', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>',
            'fallback_cb' => function() { echo '<ul><li><a href="#">Property Marketing</a></li><li><a href="#">Guest Services</a></li><li><a href="#">Maintenance</a></li><li><a href="#">Cleaning &amp; Care</a></li></ul>'; },
        ) ); ?>
      </div>

      <div>
        <h4>Destinations</h4>
        <?php wp_nav_menu( array(
            'theme_location' => 'footer-destinations', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>',
            'fallback_cb' => function() { echo '<ul><li><a href="#">Mountains</a></li><li><a href="#">Lakeside</a></li><li><a href="#">Coastal</a></li><li><a href="#">Countryside</a></li></ul>'; },
        ) ); ?>
      </div>

      <div class="newsletter">
        <h4>Newsletter</h4>
        <p>Subscribe to get updates and exclusive offers.</p>
        <form id="northview-newsletter-form" method="post">
          <input class="news-input" type="email" name="northview_email" placeholder="Your email address" required>
          <button type="submit" class="btn-gold small full">Subscribe</button>
        </form>
        <?php dynamic_sidebar( 'footer-newsletter' ); ?>
      </div>
    </div>

    <div class="footer-bottom">
      <div>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</div>
      <div><a href="#">Privacy Policy</a><a href="#">Terms &amp; Conditions</a></div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
