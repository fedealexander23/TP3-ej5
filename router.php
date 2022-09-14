<?php
require_once './app/subjects.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);


// tabla de ruteo
switch ($params[0]) {
    case 'home':
        showSubjects();
        break;
    case 'add':
        addSubject();
        break;
    case 'delete':
        deleteSubject($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
