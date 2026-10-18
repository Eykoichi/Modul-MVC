<?php
require_once __DIR__ . '/../app/controllers/BukuController.php';

$controller = new BukuController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'create':
    case 'edit':
    case 'index':
        $controller->index();
        break;
    case 'store':
        $controller->store();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->index();
        break;
}