<?php get_header(); ?>

<section class="fullPanel intro" data-aos="fade-left">
  <div class="row">
    <div class="col-xs-12">
      <div class="col-sm-12 col-md-6">
        <h1> <?php the_field('heading_one')?> </h1>
        <h2 class="h4"><?php the_field('heading_two')?></h2>
      </div>
      <div class="col-sm-12 col-md-6">
        <?php the_field('paragraph_text')?>
      </div>
    </div>
  </div>
</section>

<section class="fullPage">
  <div class="row">
    <div class="col-xs-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="blogPost col-sm-12 col-md-4">
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" id="featured-thumbnail">
            <?php the_post_thumbnail('large-feature'); ?>
          </a>
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
          <p><?php echo esc_attr(get_the_date()); ?> </p>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
