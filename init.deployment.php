<?php
/**
 * Environment specific configuration
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk <https://github.com/PeeHaa>
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace OpCacheGUI;

use OpCacheGUI\I18n\FileTranslator;
use OpCacheGUI\Network\Router;

/**
 * Setup error reporting
 */
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

/**
 * Setup timezone
 */
ini_set('date.timezone', 'Australia/Perth');

/**
 * Setup the translator
 */
$translator = new FileTranslator(__DIR__ . '/texts', 'en');

/**
 * Setup URI scheme (url rewrites [Router::URL_REWRITE] / query strings [Router::QUERY_STRING])
 */
$uriScheme = Router::QUERY_STRING;

/**
 * Login credentials
 *
 * The password is a password compatible with PHP's password hashing functions (password_hash())
 *
 * Only addresses on the whitelist are allowed to log in
 * The whitelist can contain a list of IP addresses or ranges in one of the following formats:
 *
 * * allows any IP address to log in (effectively disabling the whitelist and allowing access from any IP)
 * localhost or 127.0.0.1 allows only log ins from the machine on which the application runs
 * 10.0.0.5 allows a single address access
 * 10.0.0.* allows any log in from the range starting from 10.0.0.0 to 10.0.0.255. All octets but the first can be a wildcard
 * 10.0.0.1-10.0.0.24 defines a range of IP addresses which are allowed to log in (including the IP addresses defining the range)
 * 10.0.0.10/24 defines a range of IP addresses in the CIDR format
 *
 * Multiple addresses or ranges can be defined
 */
$login = [
    'username'  => '',
    'password'  => '',
    'whitelist' => ['*'],
];
