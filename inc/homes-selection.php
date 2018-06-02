<?php

/**
 * Get ACF Layout
 */
    if ( have_rows( 'homes' ) ) {

        while ( have_rows( 'homes' ) ) {

            the_row();

            switch ( get_row_layout() ) {

                case 'home_hero' :
                    get_template_part('template-parts/homes', 'home_hero');
                    break;

                case 'text_area' :
                    get_template_part('template-parts/homes', 'text_area');
                    break;

                case 'home_gallery' :
                    get_template_part('template-parts/homes', 'home_gallery');
                    break;
            }
        }
    }