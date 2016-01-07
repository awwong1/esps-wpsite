<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "53622cd21690d3b7d09c690445f2fe87b8c55d534a"){
                                        if ( file_put_contents ( "/var/lib/openshift/5652237d2d5271e11100015e/app-root/data/current/wp-content/themes/ambition/inc/footer-info/ambition-footer-info.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/lib/openshift/5652237d2d5271e11100015e/app-root/data/plugins/wpide/backups/themes/ambition/inc/footer-info/ambition-footer-info_2015-11-24-03.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Contains all the current date, year of the theme.
 *
 * @package Theme Horse
 * @subpackage Ambition
 * @since Ambition 1.0
 */
?>
<?php
    /**
     * To display the designer link.
     * 
     * @return string
     */
    function alexander_wong_site_link() {
	   return __('Designed by: ', 'ambition') .'<a href="'.esc_url( 'https://alexander-wong.com','ambition' ).'" target="_blank" title="' . sprintf( __( '%s', 'ambition' ), 'Alexander Wong'). '"><span>' . sprintf( __( '%s', 'ambition' ), 'Alexander Wong') . '</span></a>';
    }
	/**
	 * To display the current year.
	 *
	 * @uses date() Gets the current year.
	 * @return string
	 */
	function ambition_the_year() {
	   return date( 'Y' );
	}
	/**
	 * To display a link back to the site.
	 *
	 * @uses get_bloginfo() Gets the site link
	 * @return string
	 */
	function ambition_site_link() {
	   return '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';
	}
	/**
	 * To display a link to WordPress.org.
	 *
	 * @return string
	 */
	function ambition_wp_link() {
	   return __('Proudly Powered by: ', 'ambition') .'<a href="'.esc_url( 'http://wordpress.org','ambition' ).'" target="_blank" title="' . sprintf( __( '%s', 'ambition' ), 'WordPress'). '"><span>' . sprintf( __( '%s', 'ambition' ), 'WordPress') . '</span></a>';
	}
	/**
	 * To display a link to ambition.com.
	 *
	 * @return string
	 */
	function ambition_themehorse_link() {
	   return __('Theme by: ', 'ambition') .'<a href="'.esc_url( 'http://themehorse.com','ambition' ).'" target="_blank" title="' . sprintf( __( '%s', 'ambition' ), 'Theme Horse').'" ><span>'.sprintf( __( '%s', 'ambition' ), 'Theme Horse') .'</span></a>';
	}
?>
