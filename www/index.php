<?php



 require_once __DIR__ . '/autoload.php';

$path = parse_url($_SERVER['REQUEST_URL'], PHP_URL_PATH);
$pathParts = explode('/', $path);
var_dump($pathParts);



$ctrl = !empty($pathParts[1]) ? ucfirst($pathParts[1]) : 'News';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'All';

$controllerClassName = 'Application\\Controllers\\' . $ctrl;
// require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';



try {
 $controller = new $controllerClassName;
 $method = 'action' . $act;
 $controller->$method();

} catch (Exception $e) {
 $view = new View();
 $view->error = $e->getMessage();
 $view->display('error.php');
}
