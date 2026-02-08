<?php
require_once '../config/Database.php';
require_once '../app/controllers/ProductoController.php';

$database = new Database();
$db = $database->getConnection();

$controllerName = $_GET['controller'] ?? 'producto';
$action = $_GET['action'] ?? 'index';

if ($controllerName == 'producto') {
    $controller = new ProductoController($db);
    
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo "Acción no encontrada";
    }
}