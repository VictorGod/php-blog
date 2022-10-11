<?php
    spl_autoload_register(function (string $classsName){
        require_once __DIR__.'/../src/'.str_replace('\\', '/', $classsName).'.php';
    });

    $route = $_GET['route'] ?? '';
    $routes = require 'routes.php';
    $isRouteFound = false;
    foreach($routes as $pattern => $controllerAndAction){
        preg_match($pattern, $route, $matches);
        if (!empty($matches)) {
            $isRouteFound = true;
            break;
        }
    }
    if (!$isRouteFound) {
        echo 'Страница не найдена';
        return;
    }
    unset($matches[0]);
    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];

    $controller = new $controllerName();
    $controller->$actionName(...$matches);
  $articleId;
  $mysqli = new mysqli("localhost", "root", "", "db");
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); 
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); 
    echo "<br />";
  }


?>