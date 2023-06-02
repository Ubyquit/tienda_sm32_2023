<!doctype html>
<html lang="en">

<head>
    <title>Fabricantes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- ========== Start formulario ========== -->
                    <form action="insert/registro_producto.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Ingresa un producto</label>
                            <input name="nombre_producto" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input name="precio" type="number" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fabricante</label>
                            <select name="id_fabricante" class="form-select" aria-label="Default select example">
                                <?php
                                include('connection/connection.php');

                                $consulta = "SELECT * FROM fabricante";
                                $query = mysqli_query($conn, $consulta);

                                while ($fila = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $fila['id_fabricante']; ?>"><?php echo $fila['nombre']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    <!-- ========== End formulario ========== -->
                </div>
                <div class="col-md-8">
                    <!-- ========== Start table ========== -->
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Fabricante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('connection/connection.php');

                            $consulta = "call p_verProductos()";
                            $query = mysqli_query($conn, $consulta);

                            while ($fila = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $fila['id_producto']; ?>
                                    </th>
                                    <td>
                                        <?php echo $fila['producto']; ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['precio']; ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['fabricantes']; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- ========== End table ========== -->
                </div>
            </div>
        </div>
    </main>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>