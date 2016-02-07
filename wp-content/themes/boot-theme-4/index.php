<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-8 main-column">

          <div class="main">

            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h5 class="post-meta"><?php the_time('F j, Y'); ?></h5>
            
            <?php
              $attr = array(
                'class' => "attachment-image img-responsive",
                /*'alt' => trim(strip_tags( $attachment->post_excerpt )),
                'title' => trim(strip_tags( $attachment->post_title )),*/
              );
            
              if ( has_post_thumbnail() ) {
                echo get_the_post_thumbnail( $post->ID, 'featured-image', $attr ); 
              }
            ?>
            <?php the_excerpt(); ?>
            
            
            <?php endwhile; ?>
            <?php endif; ?>

          </div>

        </div>
        <div class="col-md-4 sidebar-column"> 
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
