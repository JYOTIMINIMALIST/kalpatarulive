<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ip_restrict config
 *
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://mikefunk.com
 * @email		mike@mikefunk.com
 *
 * @file		ip_restrict.php
 * @version		1.1.1
 * @date		8/16/12
 */

// --------------------------------------------------------------------------

/**
 * possible values are whitelist or blacklist
 */
$config['ip_restrict_mode'] = 'whitelist';

// --------------------------------------------------------------------------

/**
 * add IP addresses which are allowed to connect.
 */
$config['ip_restrict_whitelist'] = array(
	'::1',
	'35.154.174.4/32',
	'124.124.8.0/26',
	'223.31.245.128/26',
	'115.248.207.0/26',
	'223.31.150.192/26',
	'103.149.124.0/23',
        '163.116.128.0/17'
);

// --------------------------------------------------------------------------

/**
 * all ip addresses which are not allowed to connect.
 */
$config['ip_restrict_blacklist'] = array(
);

// --------------------------------------------------------------------------

/**
 * possible values are display_error and redirect.
 */
$config['ip_restrict_action'] = 'redirect';

// --------------------------------------------------------------------------

/**
 * error message to display if ip address not in whitelist. This only happens if
 * ip_restrict_action = display_error
 */
$config['ip_restrict_error_message'] = 'Please contact support.';

// --------------------------------------------------------------------------

/**
 * where to redirect if ip check fails. Only applies if ip_restrict_action =
 * redirect. Relative to the base url of the application.
 */
$config['ip_restrict_redirect_url'] = base_url();

// --------------------------------------------------------------------------

/* End of file ip_restrict.php */
/* Location: ip_restrict/config/create_min_url.php */