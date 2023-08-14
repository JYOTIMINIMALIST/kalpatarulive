<?php
	/* -------------  CSRF TOKEN ------------ */
    function generateToken($formName){
	    $secretKey = 'gsfhs154aergz2#';
	    if (!isset($_SESSION['csrf_key'])) {
	        $_SESSION['csrf_key'] = bin2hex(random_bytes(32));
	    }
	    $sessionId = $_SESSION['csrf_key'];
	    return sha1($formName.$sessionId.$secretKey);
	}

	function checkToken($token,$formName){
	    return $token === generateToken($formName);
	}
?>