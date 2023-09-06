<?php
// Convierte la primera letra del nombre del controlador en mayúscula
$controller = ucwords($controller);

// Construye la ruta al archivo del controlador
$controllerFile = "Controllers/".$controller.".php";

// Verifica si el archivo del controlador existe
if (file_exists($controllerFile)) {
    // Incluye el archivo del controlador
    require_once($controllerFile);

    // Verifica si la clase del controlador existe
    if (class_exists($controller)) {
        // Crea una instancia del controlador
        $controllerInstance = new $controller();

        // Verifica si el método existe en el controlador
        if (method_exists($controllerInstance, $method)) {
            // Llama al método del controlador con los parámetros proporcionados
            $controllerInstance->{$method}($params);
        } else {
            // Si el método no existe, incluye el controlador de errores
            require_once("Controllers/Error.php");
        }
    } else {
        // Si la clase del controlador no existe, incluye el controlador de errores
        require_once("Controllers/Error.php");
    }
} else {
    // Si el archivo del controlador no existe, incluye el controlador de errores
    require_once("Controllers/Error.php");
}
?>
