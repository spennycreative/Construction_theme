<?php
  //variables
  $heading = get_sub_field('heading');
  $subHeading = get_sub_field('sub_heading');

  //colors
  $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
?>

<section class="home-text-area-section" style="<?php echo $textColor . $backgroundColor; ?>">
    <div class="home-text-area-content">
      <h1><?php echo $heading; ?></h1>
      <p><?php echo $subHeading; ?></p>
    </div>
</section>