<?php
require '../app/Autoloader.php';
App\Autoloader::register();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}


ob_start();
if ($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'system') {
    require '../pages/system.php';
} elseif ($p === 'argot') {
    require '../pages/argot.php';
} elseif ($p === 'photo') {
    require '../pages/photo.php';
} elseif ($p === 'tarba') {
    require '../pages/tarba.php';
} elseif ($p === 'gallery') {
    require '../pages/gallery.php';
} elseif ($p === 'photo2') {
    require '../pages/photo2.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';
?>

