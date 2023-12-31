<?php
/**
 * Bootstrap the application
 */

use Extendify\PartnerData;
use Extendify\Config;
use Extendify\Insights;
use Extendify\Launch\Admin as LaunchAdmin;
use Extendify\Library\Admin as LibraryAdmin;
use Extendify\Library\Frontend;
use Extendify\Assist\Admin as AssistAdmin;
use Extendify\Chat\Admin as ChatAdmin;
use Extendify\Draft\Admin as DraftAdmin;
use Extendify\AdminPageRouter;
use Extendify\Translations;

if (!defined('ABSPATH')) {
    die('No direct access.');
}

if (!defined('EXTENDIFY_PATH')) {
    define('EXTENDIFY_PATH', \plugin_dir_path(__FILE__));
}

if (!defined('EXTENDIFY_URL')) {
    define('EXTENDIFY_URL', \plugin_dir_url(__FILE__));
}

if (!defined('EXTENDIFY_PLUGIN_BASENAME')) {
    define('EXTENDIFY_PLUGIN_BASENAME', \plugin_basename(__DIR__ . '/extendify.php'));
}

if (is_readable(EXTENDIFY_PATH . 'vendor/autoload.php')) {
    require EXTENDIFY_PATH . 'vendor/autoload.php';
}

new PartnerData();
new Config();
new Insights();
new LaunchAdmin();
new LibraryAdmin();
new Frontend();
new AssistAdmin();
new ChatAdmin();
new DraftAdmin();
new AdminPageRouter();
new Translations();


require EXTENDIFY_PATH . 'routes/api.php';


// To cover legacy conflicts.
// phpcs:ignore
class ExtendifySdk
{
}
