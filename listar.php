<?php
  $db = mysql_connect("localhost","root","");

  mysql_select_db("cepemacre",$db);

  $sql ="select * from clientes";

  $result = mysql_query($sql);

?>
<html>
    <head>
        <title>Centro Pedagogico Manitos Creativas </title>
        <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
 <body background="red">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> SIAP </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="cliente.html"> CLIENTE <span class="sr-only">(current)</span></a></li>
               
                <li class="dropdown">
                  
                  <div class="dropdown">
          
           
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"> BUSCAR </button>
              </form>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#"> fiesta de colores </a></li>
              
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      </div>
              
        <table border="6px"> 
           <tr>
              <td> <strong> Nombres</strong></td>
              <td> <strong> Cedula</strong></td>
              <td> <strong> Edad</strong></td>
              <td> <strong> Correo</strong></td>
                <td> <strong> Celular</strong></td>
              <td> <strong> Telefono</strong></td>
            
              
            </tr>
            <?php
              while ($row = mysql_fetch_row($result)){ 
            ?>
              <tr>
                <td><?php echo $row[0] ?></td>
                 <td><?php echo $row[1] ?></td>
                  <td><?php echo $row[2] ?></td>
                   <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                     <td><?php echo $row[5] ?></td>
              </tr>
          <?php
            } 
          ?>
        </table>
    </body>
</html>
