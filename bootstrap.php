<?php
    define('_DIR_ROOT', __DIR__);

    $folder = str_replace($_SERVER['DOCUMENT_ROOT'],"",_DIR_ROOT);
    $webRoot = "https://".$_SERVER['HTTP_HOST'].$folder;

    define('WEB_ROOT', $webRoot);

require_once "configs/routes.php";
require_once "core/BaseRoute.php";
require_once "App/App.php";
require_once "core/BaseDatabase.php";
require_once "core/BaseModel.php";
require_once "core/BaseController.php";
?>