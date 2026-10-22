<?php
    require_once __DIR__ . '/../controllers/controllerIkasleak.php';
    
    // Instancia correcta usando el namespace de la clase
    $controller = new controllerIkasleak();
    $ikasleak = $controller->getIkasleak();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ikasleak</title>
</head>
<body>

    <h1>Lista de Alumnos</h1>
    <p>Abre la consola del navegador (F12) para ver el array de objetos generado.</p>

    <!-- El código JS ahora se ejecutará correctamente en el navegador -->
    <script>
        console.log(<?php echo json_encode($ikasleak); ?>);
    </script>

</body>
</html>
