<?php
  //variables
  $heading = get_sub_field('heading');
  $gallery = get_sub_field('gallery');

  //colors
  $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
?>

<section class="home-gallery-section" style="<?php echo $textColor . $backgroundColor;?>">
    <div class="home-gallery-content">
      <h1><?php echo $heading; ?></h1>
      <div class="home-gallery-wrapper">
        <?php echo $gallery; ?>
      </div>
    </div>
</section>