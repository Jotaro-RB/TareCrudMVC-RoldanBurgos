<?php
require_once '../app/models/producto.php';

class ProductoController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Producto($db);
    }

    public function index()
    {
        $productos = $this->model->getAll();
        require_once '../app/views/index.php';
    }

    public function create()
    {
        require_once '../app/views/create.php';
    }

    // Muestra el formulario con los datos cargados
    public function edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $producto = $this->model->getById($id);
            require_once '../app/views/edit.php';
        }
    }

    // Procesa la actualización en la BD    
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $data = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'precio' => $_POST['precio'],
                'stock' => $_POST['stock']
            ];

            if ($this->model->update($id, $data)) {
                header("Location: index.php?controller=producto&action=index");
            }
        }
    }

    public function store()
    {
        // Validaciones básicas
        if ($_POST['precio'] <= 0 || strlen($_POST['nombre']) < 3) {
            header("Location: index.php?controller=producto&action=create&error=1");
            return;
        }

        $data = [
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'precio' => $_POST['precio'],
            'stock' => $_POST['stock']
        ];

        if ($this->model->save($data)) {
            header("Location: index.php?controller=producto&action=index");
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->model->delete($_GET['id']);
        }
        header("Location: index.php?controller=producto&action=index");
    }
}
