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

<?php $imageAcf = get_field('image'); 

 $imageAcf_alt = get_post_meta($imageAcf, '_wp_attachment_image_alt', true)

if(!empty($imageAcf)) :  ?>

<img class="thumbnail" <?php awesome_acf_responsive_image($imageAcf,'thumbnail','400px'); ?> alt="<?php echo $imageAcf_alt; ?>"/>  

<?php endif; ?> 


<!------------------- DYNAMIC POST THUMBNAIL - ID ----------------------> 

<?php 
  // Retrieve data using the post ID
    $thumbnail_id = get_post_thumbnail_id($post_id); // Fetch the thumbnail ID for the specific post
    $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

    // Get the image sizes
    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'team-card-mob-size');
    $medium_url = wp_get_attachment_image_src($thumbnail_id, 'team-card-med-size');
    $large_url = wp_get_attachment_image_src($thumbnail_id, 'team-card-large-size');

    // Check if the thumbnail exists
    $thumbnail_src = $thumbnail_url ? $thumbnail_url[0] : ''; // Fallback if no image
    $medium_src = $medium_url ? $medium_url[0] : '';
    $large_src = $large_url ? $large_url[0] : '';
?>


 <?php if ($thumbnail_src): ?>
                      
  <img class="people-image img-fluid" 
      src="<?php echo esc_url($thumbnail_src); ?>" 
      alt="<?php echo esc_attr($thumbnail_alt); ?>" 
      srcset="<?php echo esc_url($medium_src); ?> 500w, <?php echo esc_url($large_src); ?> 1024w" 
      sizes="(max-width: 500px) 100vw, 500px" 
      loading="lazy">
                  
  <?php endif; ?>


<!------------------- ACF IMAGE ID ----------------------> 

<?php

$review_image_shot = get_field('review_image_shot'); // Return Format ID

      $images_url = wp_get_attachment_image_src($review_image_shot, 'thumbnail'); // Get the thumbnail size
      $medium_url = wp_get_attachment_image_src($review_image_shot, 'medium'); // Get the medium size
      $large_url = wp_get_attachment_image_src($review_image_shot, 'large'); // Get the large size
  
      // Get the image alt text
      $images_alt = get_post_meta($review_image_shot, '_wp_attachment_image_alt', true);

?>

    <?php if ($images_url): ?>
        <img class="people-image img-fluid" 
            src="<?php echo esc_url($images_url[0]); ?>" 
            alt="<?php echo esc_attr($images_alt); ?>" 
            srcset="<?php echo esc_url($medium_url[0]); ?> 500w, <?php echo esc_url($large_url[0]); ?> 1024w" 
            sizes="(max-width: 400px) 100vw, 400px" 
            width="95" height="95"
            loading="lazy">
    <?php endif; ?>



<!------------------- ACF IMAGE ARRAY ----------------------> 
<?php 
$image = get_field('your_acf_image_field'); 

if ($image) : 
    $image_full = $image['url'];
    $image_large = $image['sizes']['large'];  // Default WP size
    $image_medium = $image['sizes']['medium'];
    $image_small = $image['sizes']['thumbnail'];
    $image_alt = !empty($image['alt']) ? $image['alt'] : get_the_title(); // Fallback alt text
?>
    <img class="full-img" 
         src="<?php echo esc_url($image_full); ?>" 
         srcset="<?php echo esc_url($image_large); ?> 1024w, 
                 <?php echo esc_url($image_medium); ?> 768w, 
                 <?php echo esc_url($image_small); ?> 480w" 
         sizes="(max-width: 1000px) 100vw, 1000px"
         alt="<?php echo esc_attr($image_alt); ?>"
         loading="lazy" />
<?php endif; ?>


<!------------ STATIC - USED REGENERATE THUMBNAIL PLUGIN TO RESIZE THE IMAGE ----------------> 

          <img class="full-img" src="<?php echo get_site_url().'2025/03/about-row-2.jpg';?>" 
             srcset="<?php echo get_site_url().'/wp-content/uploads/2025/03/about-row-2-1200x689.jpg';?> 1024w, 
             <?php echo get_site_url().'/wp-content/uploads/2025/03/about-row-2-980x400.jpg';?> 980w,  
             <?php echo get_site_url().'/wp-content/uploads/2025/03/about-row-2-768x479.jpg';?> 768w, 
             <?php echo get_site_url().'/wp-content/uploads/2025/03/about-row-2-600x600.jpg';?> 600w"
             sizes="(max-width: 1000px) 100vw, 1000px"
            width="1000" alt="Pillows Designs"/>
