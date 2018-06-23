<!-- Photography template -->
<?php
/*
  Template Name: photography
*/
?>

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



<section class="fullPanel" data-aos="fade-up">
  <div class="grid">
    <div class="grid-sizer col-xs-12 col-sm-6 col-md-4"></div>

    <?php
    $args = array(
      'post_type' => 'photography_photo',
    );
    $query = new WP_Query( $args );
    ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="grid-item col-xs-12 col-sm-6 col-md-4">
      <div class="grid-item-content">
        <a class="fancybox" href="<?php the_field('full_image')?>" data-fancybox="group" data-caption="<?php the_field('caption')?>">
          <img class="img-responsive thumbs" src="<?php the_field('thumbnail')?>" alt="<?php ?>" />
        </a>
      </div>
    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>


  </div>






  <div class="col-xs-12">
    <h4 class="text-center">
      Like what you see?
    </h4>
    <p class="text-center">
      <a href="mailto:laurenvachon@gmail.com?subject=Order A Print" target="_blank" class="btn">Order a Print</a> <a href="mailto:laurenvachon@gmail.com?subject=Schedule A Photoshoot" target="_blank" class="btn">Schedule a Photoshoot</a>
    </p>
  </div>
</section>







<?php get_footer(); ?>
