<?php
if (!class_exists('WP_Http')) {
    include_once(ABSPATH . WPINC . '/class-http.php');
}
require_once ICL_PLUGIN_PATH . '/lib/xml2array.php';

class SitePress_Support
{


    function __construct() {

        if (isset($_GET['page']) && $_GET['page'] == ICL_PLUGIN_FOLDER . '/menu/support.php') {
            wp_enqueue_script('sitepress-icl_reminders', ICL_PLUGIN_URL . '/res/js/icl_reminders.js', array('jquery'), ICL_SITEPRESS_VERSION);
            add_action('icl_support_admin_page', array(&$this, 'admin_page'));
        }
    }

    function admin_page() {
        $this->offer_wpml_org_subscription();
    }


    function offer_wpml_org_subscription() {
		?>
		Paid support is not currently available, but if you have any questions or comments please post in the WordPress.org plugin forum.
		<?php
    }

    }