<?php
/* Minimum required to start an app with bremaframework */
$profStart = microtime(true);

/* Fill out all of the values in config/path_config.php */
include("../config/path_config.php");

include(BREMA_DIR . "/loader.php");
define("STAY_LOGGED_IN_COOKIE","j0f29asdfj092903asdfasdf22fj23f");

$user = new user();

$router->go();

$profEnd = microtime(true);
echo "<!-- " . ( round($profEnd - $profStart,2) ) . " -->";
?>
