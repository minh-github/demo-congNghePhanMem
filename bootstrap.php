<?php
    define('_DIR_ROOT', __DIR__);

    $folder = str_replace($_SERVER['DOCUMENT_ROOT'],"",_DIR_ROOT);
    $webRoot = "http://".$_SERVER['HTTP_HOST'].$folder;

    define('WEB_ROOT', $webRoot);



require_once WEB_ROOT."configs/routes.php";
require_once WEB_ROOT."core/BaseRoute.php";
require_once WEB_ROOT."app/app.php";
require_once WEB_ROOT."core/BaseDatabase.php";
require_once WEB_ROOT."core/BaseModel.php";
require_once WEB_ROOT."core/BaseController.php";

?>