<?php

use MVC4PHP\SQLTable;

$name = "status_future";
$fields = ["code:key", "date:datetime"];
$pk = "code";
return new SQLTable($name, $fields, $pk);
