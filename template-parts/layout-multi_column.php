<?php
  //colors
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
?>
<section class="multi-column-section" style="<?php echo $backgroundColor; ?>">
  <?php if( have_rows('column') ) : ?>
    <?php while( have_rows('column') ) : the_row();
      //variables
      $heading = get_sub_field('heading');
      $textArea = get_sub_field('text_area');

      //button
      $buttonText = get_sub_field('button_text');
      $buttonLink = get_sub_field('button_url');
      $buttonClass = get_sub_field('button_class');

      //colors
      $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
      $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
    ?>
        <div class="multi-column">
          <div class="multi-column-content" style="<?php echo $textColor . $backgroundColor; ?>">
            <h1><?php echo $heading; ?></h1>
            <p><?php echo $textArea; ?></p>
            <a class="<?php echo $buttonClass; ?>" href="<?php echo $buttonLink; ?>"><?php echo $buttonText; ?></a>
          </div>
        </div> 
    <?php endwhile; ?>
  <?php endif; ?>
</section>