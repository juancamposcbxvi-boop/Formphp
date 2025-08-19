<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Productos</title>
</head>
<body>
    <h2>Ingrese los datos de los productos</h2>
    <form action="process.php" method="post">
        <div>
            <label>Producto 1 Nombre:</label>
            <input type="text" name="product1_name" required><br>
            <label>Producto 1 Precio:</label>
            <input type="number" step="0.01" name="product1_price" required><br><br>
        </div>
        <div>
            <label>Producto 2 Nombre:</label>
            <input type="text" name="product2_name" required><br>
            <label>Producto 2 Precio:</label>
            <input type="number" step="0.01" name="product2_price" required><br><br>
        </div>
        <div>
            <label>Producto 3 Nombre:</label>
            <input type="text" name="product3_name" required><br>
            <label>Producto 3 Precio:</label>
            <input type="number" step="0.01" name="product3_price" required><br><br>
        </div>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
