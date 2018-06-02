<?php

/**
 * Get ACF Layout
 */
    if ( have_rows( 'portfolio' ) ) {

        while ( have_rows( 'portfolio' ) ) {

            the_row();

            switch ( get_row_layout() ) {

                case 'portfolio_hero' :
                    get_template_part('template-parts/portfolio', 'portfolio_hero');
                    break;
                  
                case 'cards' :
                    get_template_part('template-parts/portfolio', 'cards');
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
            }
        }
    }
    