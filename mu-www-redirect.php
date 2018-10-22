<?php

/**
 * Plugin Name: MU www redirect
 * Plugin URI: https://github.com/cdk-comp/mu-www-redirect
 * Description: Redirect non-www to www on production environment
 * Version: 1.0.0
 * Author: Dima Minka
 * Author URI: https://cdk.co.il/
 * License: MIT License
 */

class_exists('Roots\Bedrock\WWWRedirect') || require_once __DIR__.'/vendor/autoload.php';

use Roots\Bedrock\WWWRedirect;

if (php_sapi_name() != 'cli' && defined('WP_ENV') && WP_ENV == 'production') {
    (new WWWRedirect)->addRedirect();
}
