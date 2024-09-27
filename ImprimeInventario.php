<?php
// Incluir las clases necesarias
require_once('conexion.php');
require_once('crud.php');
require_once('articulo.php'); 

$crud = new CrudArticulo();

$listaArticulos = $crud->mostrar();

// ordenamos alfabeticamente
function comparar_descripciones($a, $b) {
    return strcmp($a->getDescripcion(), $b->getDescripcion());
}

// ordenamos
usort($listaArticulos, 'comparar_descripciones');
?>

<html lang="es">
<head>
  

</head>
<body>
    <h2>Inventario de Artículos</h2>
    <table border="1">
        <tr>
            <th>Descripción del Artículo</th>
            <th>Existencias</th>
        </tr>
        <?php foreach ($listaArticulos as $articulo): ?>
        <tr>
            <td><?php echo $articulo->getDescripcion(); ?></td>
            <td><?php echo $articulo->getExistencias(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
