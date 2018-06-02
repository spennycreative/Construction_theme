<?php

/**
 * Get ACF Layout
 */
    if ( have_rows( 'layout_builder' ) ) {

        while ( have_rows( 'layout_builder' ) ) {

            the_row();

            switch ( get_row_layout() ) {

                case 'hero' :
                    get_template_part('template-parts/layout', 'hero');
                    break;
                  
                case 'text_area' :
                    get_template_part('template-parts/layout', 'text_area');
                    break;

                case 'side_by_side' :
                    get_template_part('template-parts/layout', 'side_by_side');
                    break;

                case 'full_width_cta' :
                    get_template_part('template-parts/layout', 'full_width_cta');
                    break;

                case 'contact_form' :
                    get_template_part('template-parts/layout', 'contact_form');
                    break;
                
                case 'multi_column' :
                    get_template_part('template-parts/layout', 'multi_column');
                    break;
            }
        }
    }
    