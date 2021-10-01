<?php

use MVC4PHP\SQLTable;

$name = "status_now";
$fields = ["code:key", "status"];
$pk = "code";
return new SQLTable($name, $fields, $pk);
