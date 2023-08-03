<!DOCTYPE html>
<html lang="es">
  <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
      <title>Bollitos Crocantes</title>
      <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" >

      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
      <link href="css/owl.carousel.min.css" rel="stylesheet">
      
<!--
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

-->
<script src="js/jquery-2.1.4.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>	
      <script src="js/jquery.validate.js"></script>

      <!-- recaptcha  -->
	  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	  <!-- / recaptcha -->

  </head>
<body>
  <header>
    <nav class="navbar">
        <div class="container">
          <div class="navbar-inner">
            <a class="navbar-brand" href="index.html"><img src="images/brand.svg"/></a>
            <nav class="menu">
              <ul class="menu-inner">
                <li class="menu-link active link-home">
                  <a href="#presentacion">Home</a>
                </li>
                <li class="menu-link">
                  <a href="#empresa">Empresa</a>
                </li>
                <li class="menu-link">
                  <a href="#productos">Productos</a>
                </li>
                <li class="menu-link">
                  <a href="#contacto">Contacto</a>
                </li>
                <li class="menu-social">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.55 28.38"><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path style="fill:#fff;" d="M28.55,14.28a14.28,14.28,0,1,0-16.5,14.1v-10H8.42V14.28h3.63V11.13c0-3.58,2.13-5.55,5.39-5.55a22.56,22.56,0,0,1,3.19.27V9.37h-1.8a2.06,2.06,0,0,0-2.32,2.23v2.68h4l-.64,4.12H16.51v10a14.28,14.28,0,0,0,12-14.1"/></g></g></svg>
                  </a>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.05 28.05"><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path style="fill:#fff;" d="M14,2.53c3.75,0,4.19,0,5.67.08a7.84,7.84,0,0,1,2.61.48A4.67,4.67,0,0,1,25,5.75a7.84,7.84,0,0,1,.48,2.61c.07,1.48.08,1.92.08,5.66s0,4.19-.08,5.67A7.84,7.84,0,0,1,25,22.3,4.67,4.67,0,0,1,22.3,25a7.84,7.84,0,0,1-2.61.48c-1.48.07-1.92.08-5.67.08s-4.18,0-5.66-.08A7.84,7.84,0,0,1,5.75,25,4.67,4.67,0,0,1,3.09,22.3a7.84,7.84,0,0,1-.48-2.61c-.07-1.48-.08-1.92-.08-5.67s0-4.18.08-5.66a7.84,7.84,0,0,1,.48-2.61A4.67,4.67,0,0,1,5.75,3.09a7.84,7.84,0,0,1,2.61-.48c1.48-.07,1.92-.08,5.66-.08M14,0C10.21,0,9.74,0,8.24.08a10.21,10.21,0,0,0-3.4.66A6.91,6.91,0,0,0,2.35,2.35,6.78,6.78,0,0,0,.74,4.84a10.21,10.21,0,0,0-.66,3.4C0,9.74,0,10.22,0,14s0,4.29.08,5.79a10.21,10.21,0,0,0,.66,3.4A6.78,6.78,0,0,0,2.35,25.7a7,7,0,0,0,2.49,1.61,10,10,0,0,0,3.4.65c1.5.07,2,.09,5.78.09s4.29,0,5.79-.09a10,10,0,0,0,3.4-.65,7.14,7.14,0,0,0,4.1-4.1,10,10,0,0,0,.65-3.4c.07-1.5.09-2,.09-5.79S28,9.74,28,8.24a10,10,0,0,0-.65-3.4,6.94,6.94,0,0,0-1.62-2.49A6.79,6.79,0,0,0,23.21.74a10.21,10.21,0,0,0-3.4-.66C18.31,0,17.83,0,14,0"/><path style="fill:#fff;" d="M14,6.82A7.21,7.21,0,1,0,21.23,14,7.21,7.21,0,0,0,14,6.82M14,18.7A4.68,4.68,0,1,1,18.7,14,4.67,4.67,0,0,1,14,18.7"/><path style="fill:#fff;" d="M23.19,6.54a1.68,1.68,0,1,1-1.68-1.68,1.68,1.68,0,0,1,1.68,1.68"/></g></g></svg>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </nav>
  </header>
  <section class="presentacion" id="presentacion">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-4 col-xl-4">
              <div class="caption">
                  <h1>Un Sabor <br>que Combina <br>con Todo</h1>
                  <p>Ya sea que los coma solos o como el compañero perfecto para untar, Bollitos Crocantes son un excelente bocadillo en cualquier momento.</p>
              </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8 col-xl-8 main-img">
              <img class="grisines" src="images/grisines.png"/>
            </div>
        </div>
    </div>
  </section>
  <section class="empresa" id="empresa">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Empresa</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="owl-carousel">
              <div class="item"><img src="images/slide1.png"></div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="intro">
              <p>Esta fábrica comenzó realizando el grisin redondo en el año 1998, denominado
              bollitos crocantes.</p>
              <p>Para producir este producto fue necesario contar con una máquina
              especialmente diseñada para lograr dicho formato.</p>
              <p>Una vez conseguido, con el ingenio y perseverancia se logró dar comienzo a
              una pequeña empresa familiar. Tal es así que el 3 de Junio de ese mismo año se
              inscribió este producto en el Instituto nacional de la Propiedad industrial
              (Ministerio de Economía y Obra de servicios Públicos) I.N.P.I :065788 con todos los
              derechos reservados.</p>
              <p>La consigna fue realizar un artículo comestible, lo más natural posible, sin
              aditivos, conservantes o elementos que puedan ser perjudiciales para nuestra
              salud.</p>
              <p>Es por ello que en especial el bollito y todos los grisines de nuestra producción,
              resultan tan livianos, crocantes, tiernos y secos al paladar.</p>
              <p>Fruto de un estricto sentido de cuidar la mejor calidad de nuestra producción, y
              más de 20 años de trabajo, avalan nuestro prestigio.</p>
              <p>Hoy contamos con una variedad de grisines para cubrir una procurada puesta
              en el mercado.</p>
            </div>
          </div>
        </div>
    </div>
  </section>
  <section class="productos" id="productos">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <h1>Productos</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel">
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-300.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-6">
                    <div class="product-info">
                      <h2>Grisines Crocantes sin colesterol 300Grs.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura, sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina 1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por cada 100grs. de grisines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>0,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-1500.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                      <h2>Grisines Crocantes con Gluten 1500Grs.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura, sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina 1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por 100grs. de grisines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>1,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-bollitos-200.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                      <h2>Bollitos Crocantes sin Colesterol 200Grs.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura, sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina 1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por 100grs. de grisines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>1,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-bollitos-1000.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                      <h2>Bollitos Crocantes sin Colesterol 1000Grs.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura, sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina 1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por 100grs. de bollitos</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>1,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-bolsita.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                      <h2>Grisines Crocantes sin Colesterol - Dietéticos con Gluten.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura,
                      sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina
                      1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por 100grs. de grisines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>1,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-dieteticos-200.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                      <h2>Grisines Crocantes Dietéticos con Gluten 200Grs.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura,
                      sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina
                      1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por 100grs. de grisines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>1,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-dieteticos-1000.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                      <h2>Grisines Crocantes Dietéticos Crocantes con Gluten 1000Grs.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura,
                      sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina
                      1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por 100grs. de grisines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>1,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-salbado-200.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                      <h2>Grisines Crocantes con Salvado - Light con Gluten 200Grs.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura,
                      sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina
                      1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por 100grs. de grisines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>1,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="product-img">
                    <img src="images/grisines-salbado-1000.png">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                      <h2>Grisines Crocantes con Salvado - Light con Gluten 1000Grs.</h2>
                      <h3>Ingredientes</h3>
                      <p>Harina de trigo fortificada según Ley 25630 (*), salvado, gluten, malta, levadura,
                      sal, matria grasa alimenticia vegetal, agua potable.</p>
                      <p>(*) hierro 30mg/kg, ácido fólico 2,2mg/kg, tiamina 5,3mg/kg, riboflavina
                      1,3mg/kg, miacina 13mg/kg.</p>
                      <div class="tabla-nutricional">
                        <h3>Información Nutricional</h3>
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Composición Química</th>
                                <th>Por 100grs. de grisines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Hidratos de Carbono (g)</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Proteínas (g)</td>
                                <td>22,70</td>
                            </tr>
                            <tr>
                              <td>Materia Grasa (g)</td>
                              <td>2,10</td>
                            </tr>
                            <tr>
                              <td>Fibra (g)</td>
                              <td>1,55</td>
                            </tr>
                            <tr>
                              <td>Valor Energético (K/Cal)</td>
                              <td>375,4</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contacto" id="contacto">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Contacto</h1>
            <div class="contact-info">
              <p><b>México 348 - Villa María - Cba.</b></p>
              <p>Tel. 0353 - 4520904</p>
              <p><b>info@bollitoscrocantes.com.ar</b></p>
            </div>
            <form name="contact_form" id="contact_form" method="post" class="form" action="contacto_send.php">	
            	<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y Apellido *" required />
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail *" required email />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="telefono"  id="telefono" placeholder="Teléfono *" required />
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="localidad"  id="localidad" placeholder="Localidad *" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea name="mensaje" rows="8" class="form-control" placeholder="Mensaje *" required></textarea>
                  </div>
                  <div class="form-action">
                      <div id="mensajes">
                          <div id="contact_form_fail"  style="display:none">
                              <p class='thanks_error'>Hubo un error en el envío.<br/>Intente nuevamente más tarde.</p>
                          </div>
                          <div id="contact_form_fail" class="errorcap" style="display:none">
            							     <p class="thanks_error">Hubo un error en el envío.<br>Verifique que no sea un robot.</p>
            							</div>
                          <div id="contact_form_ok" style="display:none">
                              <p class='thanks'>¡Consulta enviada!</p>
                          </div>
                      </div>
                      <div class="g-recaptcha" data-sitekey="6Lc_7sUZAAAAANBQ0y1TGLHSFGpyEkrfBSi76lwv"></div>
										<br>
                    
                      <button id="submit" type="submit" class="btn">Enviar</button>
                  </div>					
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
  </section>
  <section class="mapa">
    <div id="map" class="map"></div>
  </section>
  <footer>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="footer-content">
              <div class="brand">
                <img src="images/brand.svg"/>
              </div>
              <div class="menu-social">
                <a href="#"><img src="images/icon-facebook.svg"/></a>
                <a href="#"><img src="images/icon-instagram.svg"/></a>
              </div>
              <p class="copy">© Copyright 2020 | Todos los derechos Reservados</p>
            </div>
            <a class="agency" href="http://houston.com.ar"><img src="images/houston.svg" alt="Houston"/></a> 
          </div>
        </div> 
    </div>
  </footer>
<script>
  var marker;
  function initMap() {
    var image = 'images/map-marker.png';
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: {lat: -32.411650, lng: -63.252454}
    });
    marker = new google.maps.Marker({
      map: map,
      icon: image,
      animation: google.maps.Animation.DROP,
      position: {lat: -32.411650, lng: -63.252454}
    });
    marker.addListener('click', toggleBounce);
  }
  function toggleBounce() {
    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        autoplay:true,
        items:1
    });


    $('#contact_form').validate({	
        submitHandler: function(form) {
            
            $("#contact_form_fail").hide();
            $("#contact_form_ok").hide();
            $("#submit").html("Enviando...");
            
            $.ajax(
            {
                data: $(form).serialize(),
                type: "POST",
                url: "contacto_send.php", 
                dataType: 'json',
                success: function(response, textStatus, jqXHR) 
                {
                   
                    if(response.status == 'error')
          					{

          						$(".errorcap").hide();
          						$("#contact_form_fail").show('slow');
          						//$("#submit").attr('disabled', 'disabled'); 							

          					}else if(response.status == "errorcaptcha"){

          						$(".errorcap").show('slow');
          						//$("#submit").html("Reenviar...");
          						$("#submit").html("Volver a enviar");
          					
          					}else if(response.status == "ok"){

          						$(".errorcap").hide();
          						$(".g-recaptcha").hide();								
          						$("#contact_form_ok").show('slow');								
          						$("#submit").hide();								
          						$("#contact_form")[0].reset();
          						//$(location).attr('href','contacto-gracias.php');

          					}else{
          						("#contact_form_fail").show('slow');
          					}


                },
                error: function (xhr, textStatus, errorThrown) 
                {
                    $("#contact_form_ok").show('slow');
                    //$("#submit").attr('disabled', 'disabled'); 
                }
            });
            
          //  $("#submit").attr('disabled', 'disabled'); 
            return false;
        }
    });
  });
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbY3wxcBNXmHszaOXZagNyhMriiKWxgW0&callback=initMap"></script>    
</body>
</html>
