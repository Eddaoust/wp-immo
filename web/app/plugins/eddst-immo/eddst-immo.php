<?php
/*
 * Plugin Name: eddst-immo
 * Plugin URI: https://github.com/Eddaoust
 * Description: Plugin to manage the property for the real estate agency
 * Version: 1.0
 * Author: Ed Daoust
 */
require_once '/Users/edmonddaoust/Documents/Web_dev/WORDPRESS/eddst-immo/web/app/plugins/eddst-immo/vendor/autoload.php';

$eddst = new \Eddst\Eddst();
$eddst->execute();