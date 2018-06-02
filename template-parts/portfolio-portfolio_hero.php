<?php
  //variables
  $image = get_sub_field('image') ? 'background-image:url( ' . get_sub_field('image') . '); ' : '';
  $heading = get_sub_field('heading');
  $subHeading = get_sub_field('sub_heading');
  $height = get_sub_field('background_height') ? 'height: ' . get_sub_field('background_height') . '; ' : '';

  //button
  $buttonText = get_sub_field('button_text');
  $buttonLink = get_sub_field('button_url');
  $buttonClass = get_sub_field('button_class');

  //colors
  $textShadow = get_sub_field('text_shadow') ? 'text-shadow: ' . get_sub_field('text_shadow') . '; ' : '';
  $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
?>

<section class="portfolio-hero-section" style="<?php echo $textColor . $backgroundColor . $textShadow; ?>">
  <div class="portfolio-hero" style="<?php echo $image . $height; ?>">
    <div class="portfolio-hero-content">
      <h1><?php echo $heading; ?></h1>
      <p><?php echo $subHeading; ?></p>
      <?php if( $buttonText && $buttonLink ) : ?>
        <a class="<?php echo $buttonClass; ?>" href="<?php echo $buttonLink; ?>"><?php echo $buttonText; ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>