<!-- Resource: https://www.awesomeacf.com/responsive-images-wordpress-acf/ -->

<!-- POST FEATURED IMAGE -->

<a class="post-link focus-visible" href="<?php echo the_permalink(); ?>">

  <?php $featured_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

      $postAltImage = get_post_meta(get_post_thumbnail_id($post->ID) , '_wp_attachment_image_alt', true); 

      if(!empty($featured_image)): ?>

      <img class="featured-image" <?php awesome_acf_responsive_image(get_post_thumbnail_id($post->ID),'medium','640px'); ?> alt="<?php echo $postAltImage;?>" /> 

  <?php endif; ?>  

</a>


<!-- ACF IMAGE ID -->

<?php $imageAcf = get_sub_field('image'); 

 $imageAcf_alt = get_post_meta($imageAcf, '_wp_attachment_image_alt', true)

if(!empty($pizzaMenuTopImg)) :  ?>

<img class="thumbnail" <?php awesome_acf_responsive_image($imageAcf,'thumbnail','400px'); ?> alt="<?php echo $imageAcf_alt; ?>"/>  

<?php endif; ?> 