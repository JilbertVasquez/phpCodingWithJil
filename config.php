<?php 

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800, //30 mins
    'domain' => 'localhost',
    'path' => '/', 
    'secure' => true,
    'httponly' => true
]);

session_start();

session_regenerate_id(true);

if (!isset($_SESSION['last_regeneration'])) {

    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}
else {
    $interval = 60 * 30; //30 mins (60 sec * 30 mins)

    if (time() - $_SESSION['last_regeneration'] >= $interval) {

        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}
