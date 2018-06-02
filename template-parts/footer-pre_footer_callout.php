<?php
  //variables
  $heading = get_sub_field('heading');
  $subHeading = get_sub_field('sub_heading');

  //button
  $buttonText = get_sub_field('button_text');
  $buttonLink = get_sub_field('button_url');
  $buttonClass = get_sub_field('button_class');

  //colors
  $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
?>

<section class="pre-footer-callout-section" style="<?php echo $textColor . $backgroundColor; ?>">
    <div class="pre-footer-callout-content">
      <h1><?php echo $heading; ?></h1>
      <a class="<?php echo $buttonClass; ?>" href="<?php echo $buttonLink; ?>"><?php echo $buttonText; ?></a>
    </div>
</section>