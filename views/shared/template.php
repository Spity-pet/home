<?php

use MVC4PHP\View;

$title = isset($data["title"]) ? $data["title"] . " - " : "Spity | Comodidad - Autenticidad - Seguridad";
$canonical = isset($data["canonical"]) ? "https://storend.com.co/" . $data["canonical"] : "https://storend.com.co/";
$description = isset($data["description"]) ? $data["description"] : "El ❤ amor es una palabra de cuatro patas. En Spity nos encanta ayudarte a prevenir el escape de los mejores amigos del hombre mediante la tecnología.";
$css = isset($data["css"]) ? $data["css"] : [];
$js = isset($data["js"]) ? $data["js"] : [];
$module = isset($data["module"]) ? $data["module"] : [];
$messages = View::validateMessages();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="" />
    <meta name="author" content="störend" />
    <meta name=”robots” content="index, follow">

    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:title" content="<?= $title ?>">

    <meta name="twitter:description" content="<?= $description ?>">
    <meta property="twitter:title" content="<?= $title ?>">
    <link rel="canonical" href="<?= $canonical ?>">

    <title><?= $title ?></title>
    <?= View::insertComponent("shared/plugins/favicon"); ?>
    <?= View::insertComponent("shared/scripts/css"); ?>
    <?= View::insertComponent("shared/plugins/analytics"); ?>

    <?php if (count($css) > 0) foreach ($css as $path) { ?>
        <link rel="stylesheet" href="<?= $path; ?>"><?php } ?>
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <?php
    $content();
    ?>

    <?= View::insertComponent("shared/scripts/js"); ?>


    <?php if (count($js) > 0) foreach ($js as $path) { ?>
        <script src="<?= $path; ?>"></script><?php } ?>

    <?php if (count($module) > 0) foreach ($module as $path) { ?>
        <script type="module" src="<?= $path; ?>"></script><?php } ?>
</body>

</html>