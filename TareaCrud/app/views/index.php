<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Productos</h2>
    <a href="?controller=producto&action=create" class="btn btn-success mb-3">Nuevo Producto</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nombre'] ?></td>
                <td>$<?= $p['precio'] ?></td>
                <td><?= $p['stock'] ?></td>
                <td>
                    <a href="?controller=producto&action=edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="?controller=producto&action=delete&id=<?= $p['id'] ?>" 
                       class="btn btn-danger btn-sm" 
                       onclick="return confirm('¿Estás seguro de eliminar este producto?')">Borrar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>