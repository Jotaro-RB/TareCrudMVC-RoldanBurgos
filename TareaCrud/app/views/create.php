<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Registrar Producto</h4>
                </div>
                <div class="card-body">
                    <form action="?controller=producto&action=store" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ej: Monitor LED" required minlength="3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="3" placeholder="Detalles del producto..."></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">Precio</label>
                                    <input type="number" step="0.01" name="precio" class="form-control" required min="0.01">
                                </div>
                                <div class="col">
                                    <label class="form-label">Stock</label>
                                    <input type="number" name="stock" class="form-control" required min="0">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="?controller=producto&action=index" class="btn btn-secondary">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>