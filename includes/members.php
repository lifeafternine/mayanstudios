<?php

$args = array( 'post_type' => 'etglaw_members', 'orderby' => 'menu_order', 'order' => 'ASC');
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
/*$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) );*/
?>
  <div class='item'>
    <h3><?php the_title(); ?></h3>
  	<p> <?php echo $loop->post_id; ?>
          <?php the_post_thumbnail( array(150, 150,'class' => ' alignleft')); ?>
      <?php the_content();  ?>
    </p>
  </div>
<?php
endwhile;
?>
