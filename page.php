<?php get_header(); ?>

<section class="fullPanel intro" data-aos="fade-left">
  <div class="row">
    <div class="col-xs-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-sm-12 col-md-6">
        <h1> <?php the_title(); ?> </h1>
        <h2 class="h4"><?php the_field('subheading')?></h2>
      </div>
      <div class="col-sm-12 col-md-6">
        <?php the_content(); ?>
      </div>
      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
