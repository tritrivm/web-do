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
