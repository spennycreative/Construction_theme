<?php
  //colors
  $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
?>
<section class="side-by-side-section" style="<?php echo $textColor . $backgroundColor; ?>">
  <?php if( have_rows('houses') ) : ?>
    <?php while( have_rows('houses') ) : the_row();
      //variables
      $image = get_sub_field('image');
      $heading = get_sub_field('heading');
      $textArea = get_sub_field('text_area');
      $contentAlignment = get_sub_field('content_alignment');

      //button
      $buttonText = get_sub_field('button_text');
      $buttonLink = get_sub_field('button_url');
      $buttonClass = get_sub_field('button_class');
    ?>
        <div class="side-by-side <?php echo $contentAlignment; ?>">
          <div class="side-by-side-content">
            <h1><?php echo $heading; ?></h1>
            <p><?php echo $textArea; ?></p>
            <a class="<?php echo $buttonClass; ?>" href="<?php echo $buttonLink; ?>"><?php echo $buttonText; ?></a>
          </div>
          <div class="side-by-side-image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </div>
        </div> 
    <?php endwhile; ?>
  <?php endif; ?>
</section>