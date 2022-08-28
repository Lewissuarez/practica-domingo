<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Teinda Web1</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Restaurante WEB</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="formulario.php">Registrar Platos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="productosbodega.php">Platos Registrados</a>
                  </li>
                </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
    </header>
    <main>
          <div class="container">
            <div class="row justify-content-center ">
              <div class="col4">
                <form class="mt-5" enctype="multipart/form-data" action="registrarproductos.php" method="POST">
                    <H4 class="text-center">ADMINISTRACIÓN DE PLATOS</H4>
                    <div class="row mt-4">
                        <div class="col">
                            <input name="Nombreplato" type="text" class="form-control" placeholder="Nombre del plato">
                        </div>
                                                   
                    </div>
                        
                        <div class="col4 mt-4">
                            <input name="precioPlato" type="text" class="form-control" placeholder="Precio del plato">
                        </div>
                        <div class="col4 mt-4">
                            <textarea class="form-control" name="txAreaDescripcion" rows="3" placeholder="Descripcion"></textarea>
                        </div>
                        <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary mt-5 " name=btnRegistrar>Registrar</button>
                        </div>
                    </div>                    
                </form>
              </div>
            </div>
          </div>
    </main>
    
    <footer>
    
    
    
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>