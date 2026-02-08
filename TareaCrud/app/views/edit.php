<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Producto</h4>
                </div>
                <div class="card-body">
                    <form action="?controller=producto&action=update" method="POST">
                        <input type="hidden" name="id" value="<?= $producto['id'] ?>">

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?= $producto['nombre'] ?>" required minlength="3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="3"><?= $producto['descripcion'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">Precio</label>
                                    <input type="number" step="0.01" name="precio" class="form-control" value="<?= $producto['precio'] ?>" required min="0.01">
                                </div>
                                <div class="col">
                                    <label class="form-label">Stock</label>
                                    <input type="number" name="stock" class="form-control" value="<?= $producto['stock'] ?>" required min="0">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
                            <a href="?controller=producto&action=index" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>