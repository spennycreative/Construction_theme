<?php
  //variables
  $logo = get_sub_field('logo');
  $textColor = get_sub_field('text_color') ? 'color: ' . get_sub_field('text_color') . '; ' : '';
  $backgroundColor = get_sub_field('background_color') ? 'background-color: ' . get_sub_field('background_color') . '; ' : '';
?>

<section class="main-footer-area-section" style="<?php echo $textColor . $backgroundColor; ?>">
  <div class="main-footer-area-logo">
    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
  </div>
    <div class="main-footer-area-content">
      <div class="main-footer-area-link-container">
        <?php if( have_rows('primary_link') ) : ?>
          <div class="main-footer-area-link-header">
            <?php while( have_rows('primary_link') ): the_row(); ?>
            <!-- repeater -->

              <div class="actual-p-link">
                <?php if( have_rows('actual_links') ) : ?>
                    <?php while( have_rows('actual_links') ) : the_row(); 
                      $p_link_text = get_sub_field('p_link_text');
                    ?>
                      <a class="strong-link" href="#"><?php echo $p_link_text ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
              </div>

            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <?php if( have_rows('secondary_link') ) : ?>
          <div class="main-footer-area-link">
            <?php while( have_rows('secondary_link') ): the_row(); ?>
            <!-- repeater -->
              <div class="actual-s-link">
                <?php if( have_rows('actual_links') ) : ?>
                    <?php while( have_rows('actual_links') ) : the_row(); 
                      $s_link_text = get_sub_field('s_link_text');
                      $s_link_url = get_sub_field('s_link_url');
                      $s_link_class = get_sub_field('s_link_class');
                      $phone_number = get_sub_field('phone_number') ? 'tel: ' . get_sub_field('phone_number') : '';
                    ?>
                    <?php if( $s_link_url ) : ?>
                      <a class="<?php echo $s_link_class; ?>" href="<?php echo $s_link_url; ?>"><?php echo $s_link_text; ?></a>
                    <?php endif; ?>
                    <?php if( $phone_number ) : ?>
                      <a class="<?php echo $s_link_class; ?>" href="<?php echo $phone_number; ?>"><?php echo $s_link_text; ?></a>
                    <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
</section>