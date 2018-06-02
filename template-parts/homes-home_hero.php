<?php
  //variables
  $image = get_sub_field('image') ? 'background-image:url(' . get_sub_field('image') . '); ' : '';
  $title = get_sub_field('title');
  $height = get_sub_field('height') ? 'height: ' . get_sub_field('height') . '; ' : '';

  //button
  $buttonText = get_sub_field('button_text');
  $buttonLink = get_sub_field('button_url');
  $buttonClass = get_sub_field('button_class');

  //colors
  $textShadow = get_sub_field('text_shadow') ? 'text-shadow: ' . get_sub_field('text_shadow') . '; ' : '';
  $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
  $backgroundRepeat = get_sub_field('background_repeat') ? 'background-repeat: ' . get_sub_field('background_repeat') . '; ' : '';
  $backgroundPosition = get_sub_field('background_position') ? 'background-position: ' . get_sub_field('background_position') . '; ' : '';
  $backgroundSize = get_sub_field('background_size') ? 'background-size: ' . get_sub_field('background_size') . '; ' : '';
?>

<section class="home-hero-section" style="<?php echo $textColor . $backgroundColor; ?>">
  <div class="home-hero" style="<?php echo $image . $height . $backgroundSize . $backgroundPosition . $backgroundRepeat; ?>">
    <div class="home-hero-content" style="<?php echo $textShadow; ?>">
      <h1><?php echo the_title(); ?></h1>
      <h2><?php echo $title; ?></h2>
      <?php if( $buttonText && $buttonLink ) : ?>
        <a class="<?php echo $buttonClass; ?>" href="<?php echo $buttonLink; ?>"><?php echo $buttonText; ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>
