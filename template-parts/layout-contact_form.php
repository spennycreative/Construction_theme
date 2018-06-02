<?php
  //variables
  $heading = get_sub_field('heading');
  $subHeading = get_sub_field('sub_heading');
  $contactForm = get_sub_field('form');

  //button
  $buttonText = get_sub_field('button_text');
  $buttonLink = get_sub_field('button_url');
  $buttonClass = get_sub_field('button_class');

  //colors
  $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
?>

<section class="contact-form-section" style="<?php echo $textColor . $backgroundColor;?>">
    <div class="contact-form-content">
      <h1><?php echo $heading; ?></h1>
      <h4><?php echo $subHeading; ?></h4>
      <div class="contact-form-wrapper">
        <?php echo $contactForm; ?>
      </div>
    </div>
</section>