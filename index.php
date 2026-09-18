<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<div class="container" style="padding:180px 40px 100px;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?> style="margin-bottom:60px;">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div style="color:var(--muted);"><?php the_excerpt(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p>No content found.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
