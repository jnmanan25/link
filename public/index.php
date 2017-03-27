<?php

require_once  __DIR__ . "/../vendor/autoload.php";

ToroHook::add("404", function() {
	echo "404";
	http_response_code(404);
});
<?php

require_once  __DIR__ . "/../vendor/autoload.php";

ToroHook::add("404", function() {
	echo "404";
	http_response_code(404);
});

Toro::serve([
	'/' => Link\Controllers\HomeController::class,
	'/post' => Link\Controllers\PostController::class,
	'/home' => Link\Controllers\SigninController::class,
	'/save' => Link\Controllers\LinkController::class,
	]);
?>