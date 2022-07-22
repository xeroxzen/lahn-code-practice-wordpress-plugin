<?php
/**
 * Displays footer site info
 *
 * @subpackage Cyber Security Services
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info py-4 text-center">

    <?php
        echo esc_html( get_theme_mod( 'cyber_security_services_footer_text' ) );
        printf(
            /* translators: %s: Cyber Security WordPress Theme. */
            esc_html__( 'Cyber Security WordPress Theme', 'cyber-security-services' )
        );
    ?>

</div>