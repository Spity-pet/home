<?php
require_once "../vendor/autoload.php";
require_once "../resources/scripts/mvc4php/globalsinviews.php";

use MVC4PHP\View;

View::render(function () {
    View::insertComponent('views/inicio/structure');
}, [
    "js" => ["resources/scripts/template/js/jquery.min.js", "resources/scripts/template/js/bootstrap.min.js", "resources/scripts/template/js/jquery.easing.min.js", "resources/scripts/template/js/swiper.min.js", "resources/scripts/template/js/jquery.magnific-popup.js", "resources/scripts/template/js/scripts.min.js"],
    "css" => ["resources/scripts/template/css/bootstrap.min.css", "resources/scripts/template/css/fontawesome-all.min.css", "resources/scripts/template/css/swiper.min.css", "resources/scripts/template/css/magnific-popup.min.css", "resources/scripts/template/css/styles.min.css"],
    "module" => ["resources/scripts/views/base/base.v1.js"]
]);