<?php 
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
delete_option( 'csn-cs-total' );
delete_option( 'csn-cs-row' );
delete_option( 'csn-cs-css' );
delete_option( 'csn-cs-directoryListing' );
delete_option( 'csn-cs-support' ); 
?>