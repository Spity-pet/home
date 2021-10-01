<?php
require_once "../vendor/autoload.php";
require_once "../resources/scripts/mvc4php/globalsinviews.php";

use MVC4PHP\View;

View::render(function () {

}, [
    "js" => ["resources/scripts/template/js/jquery.min.js", "resources/scripts/template/js/bootstrap.min.js", "resources/scripts/template/js/jquery.easing.min.js", "resources/scripts/template/js/swiper.min.js", "resources/scripts/template/js/jquery.magnific-popup.js", "resources/scripts/template/js/scripts.js"],
    "css" => ["resources/scripts/template/css/bootstrap.css", "resources/scripts/template/css/fontawesome-all.css", "resources/scripts/template/css/swiper.css", "resources/scripts/template/css/magnific-popup.css", "resources/scripts/template/css/styles.css"],
    "module" => ["resources/scripts/views/base/base.v1.js"]
]);