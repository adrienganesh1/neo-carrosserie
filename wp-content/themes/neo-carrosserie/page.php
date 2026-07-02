<?php
get_header();
$neo_wc = function_exists('is_cart') && ( is_cart() || is_checkout() || is_account_page() );
?>
<?php if ($neo_wc): ?>
<main class="neo-shop"><div class="neo-shop-inner">
<?php else: ?>
<main style="max-width:1000px;margin:0 auto;padding:70px 44px;font-family:Manrope,system-ui,sans-serif;color:#15140F">
<?php endif; ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<?php if ( ! ( function_exists('is_cart') && is_cart() ) ): ?>
  <h1 style="font-family:Archivo;font-weight:900;letter-spacing:-.02em"><?php the_title(); ?></h1>
<?php endif; ?>
  <div><?php the_content(); ?></div>
<?php endwhile; else: ?>
  <p>Contenu à venir.</p>
<?php endif; ?>
<?php echo $neo_wc ? '</div></main>' : '</main>'; ?>
<?php get_footer();
