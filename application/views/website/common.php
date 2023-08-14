<?php 	
	// $base_url =  "http://heptawork.com/kalpataru/";
	$base_url =  base_url();

	header("Strict-Transport-Security:max-age=63072000");
	header("X-Frame-Options: SAMEORIGIN");
	header("X-Content-Type-Options: nosniff");
	header("X-XSS-Protection: 1");
	header("Cache-control: max-age=2592000");
	header("Pragma: no-cache");
	header("Referrer-Policy: no-referrer-when-downgrade");
	header("Feature-Policy: geolocation 'self'");
	header("Permissions-Policy: geolocation 'self'");
	header("Expect-CT: max-age=86400");
	header("X-Permitted-Cross-Domain-Policies: 'master-only' | 'none'");
	/*header("Content-Security-Policy: default-src ".base_url());
	header("Content-Security-Policy: form-action 'script-src'");*/
?>