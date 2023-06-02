<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <img src="hola.png" class="card-img-top" alt="Imagen Fabricantes">
            <div class="card-body">
              <h5 class="card-title">Total de Fabricantes</h5>
              <?php
              include('connection/connection.php');

              $consulta = "SELECT COUNT(*) AS total_fabricantes FROM fabricante";
              $query = mysqli_query($conn, $consulta);
              $resultado = mysqli_fetch_assoc($query);
              $totalFabricantes = $resultado['total_fabricantes'];
              ?>
              <h2 class="card-text">
                <?php echo $totalFabricantes; ?>
              </h2>
            </div>
            <a href="fabricantes.php" class="stretched-link"></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img
              src="https://cdn-3.expansion.mx/dims4/default/25543b1/2147483647/resize/1280x/quality/90/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F62%2Fc9%2Fb4fa9d784717b9d10424390183ca%2Fproductos-coca-cola-femsa.jpeg"
              class="card-img-top" alt="Imagen Productos">
            <div class="card-body">
              <h5 class="card-title">Total de Productos</h5>
              <?php
              $consulta = "SELECT COUNT(*) AS total_productos FROM producto";
              $query = mysqli_query($conn, $consulta);
              $resultado = mysqli_fetch_assoc($query);
              $totalProductos = $resultado['total_productos'];
              ?>
              <h2 class="card-text">
                <?php echo $totalProductos; ?>
              </h2>
            </div>
            <a href="productos.php" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
  </main>


  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>