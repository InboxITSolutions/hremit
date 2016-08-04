
<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = urldecode($uri);

<<<<<<< HEAD
$paths = require __DIR__.'/bootstrap/paths.php';
=======
$paths = require __DIR__.'/bootstrap/path.php';
>>>>>>> a02be301d35b8528f79a85647ef65d1ae806da76

$requested = $paths['public'].$uri;

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' and file_exists($requested))
{
	return false;
}

require_once $paths['public'].'/index.php';
