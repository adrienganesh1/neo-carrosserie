<?php get_header(); ?>
<main style="max-width:1000px;margin:0 auto;padding:70px 44px;font-family:Manrope,system-ui,sans-serif;color:#15140F">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
  <h1 style="font-family:Archivo;font-weight:900"><?php the_title(); ?></h1>
  <div><?php the_content(); ?></div>
<?php endwhile; else: ?>
  <p>Contenu à venir.</p>
<?php endif; ?>
</main>
<?php get_footer(); ?>
