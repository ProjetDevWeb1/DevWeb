<?php

require_once 'router.php';

$router = new Router();
$router -> run();

function render($view, array $data = [])
{
    extract($data);
    require_once("src/views/$view.php");

}
 ?>
