<?php
require "../vendor/autoload.php";
require "../resources/scripts/mvc4php/globalsincontrollers.php";

use MVC4PHP\Controller;
$controller = new Controller();



try {
    $controller->processAction();
} catch (Exception $ex) {
    Controller::sendResponse(json_encode(["status" => "error", "message" => $ex->getMessage()]));
}
