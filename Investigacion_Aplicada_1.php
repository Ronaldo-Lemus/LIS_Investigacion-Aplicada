<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/codigo.js"></script>
   <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Investigacion Aplicada</title>
</head>
<body>

        <nav  class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search" >
                <button class="btn btn-outline-success my-2 my-sm-0" type="button"  id="button" >Buscar</button>
              </form>
          </nav>
    </div>
    <div class="con">
      
          <div class="ab">
              <br>
              <div id="content">
                  <span class="finded">
            <h5>¿Que son las expresiones regulares?</h5>      <br>
            <p>En cómputo teórico y teoría de lenguajes formales una expresión regular, 
                o expresión racional, también son conocidas como regex o regexp, por su 
                contracción de las palabras inglesas regular expression, es una secuencia 
                de caracteres que conforma un patrón de 
                búsqueda. Se utilizan principalmentes para la búsqueda de 
                patrones de cadenas de caracteres u operaciones de sustituciones.</p>
                <br>
                <p>Las expresiones regulares son patrones utilizados para encontrar una
                     determinada combinación de caracteres dentro de una cadena de texto.</p>
                     <br>
                     <p>Las expresiones regulares proporcionan una manera muy flexible de 
                         buscar o reconocer cadenas de texto. Por ejemplo, el grupo formado 
                         por las cadenas Handel, Händel y Haendel se describe con el patrón 
                         "H(a|ä|ae)ndel".</p></span>
          </div>
        </div>
          <div class="bc">
              <br>
              <h5>Ejemplos de expresiones regulares</h5>
              <br>
              <h6 style="color: blue;">Complete el siguiente formulario</h6>
              <br>
              <div>
              <form onsubmit="alert('Dato ingresado.');return false;">
                <imput class="btn btn-outline-success my-2 my-sm-0" onclick="ingresar()" type="submit">Ingresar(Minusculas)</button>
              </form>
              <form onsubmit="alert('Dato Ingresado con exito.');return false;">
                <input type="text" required=""
                   pattern="[a-z]{1,50}"
                   name="pattern_fecha" id="pattern_fecha"
                   placeholder="Ingrese un valor" />
                <input type="submit" value="Ingresar" />
             </form></div>
             <br><div>
             <form onsubmit="alert('Dato ingresado.');return false;">
                <imput class="btn btn-outline-success my-2 my-sm-0" onclick="ingresar()" type="submit">Ingresar(Mayusculas)</button>
              </form>
              <form onsubmit="alert('Dato Ingresado con exito.');return false;">
                <input type="text" required=""
                   pattern="[A-Z]{1,50}"
                   name="pattern_fecha" id="pattern_fecha"
                   placeholder="Ingrese un valor" />
                <input type="submit" value="Ingresar" />
             </form></div><br>
             <div>
                <form onsubmit="alert('Dato ingresado.');return false;">
                   <imput class="btn btn-outline-success my-2 my-sm-0" onclick="ingresar()" type="submit">Ingresar(Mayusculas y minusculas)</button>
                 </form>
                 <form onsubmit="alert('Dato Ingresado con exito.');return false;">
                   <input type="text" required=""
                      pattern="[a-z-A-Z]{1,50}"
                      name="pattern_fecha" id="pattern_fecha"
                      placeholder="Ingrese un valor" />
                   <input type="submit" value="Ingresar" />
                </form></div><br>
                <div>
                    <form onsubmit="alert('Dato ingresado.');return false;">
                       <imput class="btn btn-outline-success my-2 my-sm-0" onclick="ingresar()" type="submit">Ingresar(correo)</button>
                     </form>
                     <form onsubmit="alert('Dato Ingresado con exito.');return false;">
                       <input type="text" required=""
                          pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"
                          name="pattern_fecha" id="pattern_fecha"
                          placeholder="Ingrese un valor" />
                       <input type="submit" value="Ingresar" />
                    </form></div><br>
                    <div>
                        <form onsubmit="alert('Dato ingresado.');return false;">
                           <imput class="btn btn-outline-success my-2 my-sm-0" onclick="ingresar()" type="submit">Ingresar(DUI)</button>
                         </form>
                         <form onsubmit="alert('Dato Ingresado con exito.');return false;">
                           <input type="text" required=""
                              pattern="^[0-9]{8}-[0-9]{1}"
                              name="pattern_fecha" id="pattern_fecha"
                              placeholder="Ingrese un valor" />
                           <input type="submit" value="Ingresar" />
                        </form></div>
        </div>
          <div class="cd">
              <br>
            <h5>¿Como funciona?</h5>
            <br> 
            <p style="text-align: center;"><span id="results"></span></p>
            <p>1) Ingresa una palabra en el buscador de la parse superior de la barra de navegacion</p>
           <p>2) Una vez hallas ingresado la palabra que desas buscar presiona el boton "Buscar"  </p>
           <p>3) A continuacion veras que la palabra que has introduciido se sombreara en el parrafo del lateral izquierdo y en la parte superior 
           del lateral derecho veras cuantas veces se repite esa palabra y de caso que no halla ninguna te mostrara un mensaje "No se ah encontrado".
           <br>
           <div><img src="imagenes/aaaaa.jpg" style="width: 250px; height: 200px;"></div>
    
           </p>
          </div>
        </div>
      </div>
      <footer>
        <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-6 text-left">
                  <h6 class="text-muted lead" style="text-align: left;">CONTACTO:</h6>
                  <h6 class="text-muted" style="text-align: left;">
                  xxxxxx-xx No. xxx-xx xxx xx<br>
                  xxxxx-xxx-xx.<br>
                  Teléfonos: 98987973 – 3987965668.<br>
                  </h6>
              </div>
      
              <div class="col-xs-12 col-md-6 text-right">
                  <h6 class="text-muted lead" style="text-align: right;">ENCUENTRANOS EN LAS REDES</h6>
                  <div class="redes-footer">
                    <a href="https://www.facebook.com/"><img src="imagenes/descarga.png"></a>
                    <a href="https://twitter.com/"><img src="imagenes/imag.png"></a>
                    <a href="https://www.youtube.com/"><img src="imagenes/you.png"></a>
                    <p class="text-muted small" style="text-align: right;">Santos Lemus, Manuel Duran, Steven Gomez, UDB @2020.<br> Todos los derechos reservados.</p>
                  </div>
              </div>

          <div class="row"> 
      
              <div class="col-md-12 text-right">
                
              </div>
          </div>
          </div>
        </div>  
      </footer>
    
</body>
</html>