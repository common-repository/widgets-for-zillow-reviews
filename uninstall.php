<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_zillow = new TrustindexPlugin_zillow("zillow", __FILE__, "12.4.1", "Widgets for Zillow Reviews", "Zillow");
$trustindex_pm_zillow->uninstall();
?>