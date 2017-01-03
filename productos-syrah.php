
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dolium</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



<style>

.productos a {

    color:#fff !important;
}
</style>




<div class="container">

<div class="col-lg-12">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-responsive"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="bodega"><a href="bodega.php">BODEGA</a></li>
      <li class="empresa"><a href="empresa-b.php">EMPRESA B</a></li>
      <li class="productos"><a href="productos.php">PRODUCTOS</a></li> 
      <li class="visitas"><a href="visitas.php">VISITAS</a></li>
      <li class="tienda"><a href="tienda.php">TIENDA</a></li> 
      <li class="contacto"><a href="#">CONTACTO</a></li>  
    </ul>
  </div>
</nav>

</div>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

<img src="img/productos.jpg" class="img-responsive">

</div>


<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 " >

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 productos-02" style="background:#FFF;padding: 35px 20px;">
<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
<div class="linea">
<h3>VINOS</h3>

<h4>LINEA ECO ESTATE</h4>

<ul>
<a href="productos.php" ><li>MALBEC 2011</li></a>
<a href="productos-reserva.php" ><li>RESERVA MALBEC</li></a>
<a href="productos-late.php"><li>LATE H MALBEC</li></a>
<a href="productos-rose.php" ><li>ROSÉ MALBEC</li></a>
<a href="productos-grand.php" ><li>GRAND MALBEC</li></a>
<a href="productos-syrah.php" class="syrah" ><li>SYRAH</li></a>
</ul>
</div>
</div>
<div class="col-lg-9 col-sm-9 col-md-9 col-xs-12 productos-texto">

<h3>ECO ESTATE</h3>
<h4>SYRAH 2010</h4>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
<img src="img/productos-01.png" class="img-responsive" style="margin: 65px 0;">
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
<p><strong>Maceración en Frio:</strong> 3 días entre 13°C y 15°C.<br><br>

<strong>Fermentación alchólica:</strong> Tradicional, en temperaturas entre 25 a 28oC  con levaduras seleccionadas.<br><br>

<strong>Maceración Post-Fermentativa:</strong> 2 días <br><br>

<strong>Fermentación Maloláctica:</strong> Completa con cepas indígenas. <br><br>

<strong>Crianza:</strong> En tanques y/o barricas . En tanque de Acero Inoxidable y 20% con duelas por 1 mes.<br><br>

<strong>Filtración:</strong> Gruesa de abrillantamiento<br><br>

<strong>Crianza min. en botella:</strong> 4 meses.<br><br>

<strong>Alcohol:</strong>  14,7 % Vol.        <strong>PH:</strong> 3,6<br><br>

<strong>Acidez Total:</strong> 5,88 g/l</p>
</div>

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="padding-left:0;padding-right:0;">

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

<p style="margin: 0 0 35px;"><strong>Variedad:</strong>  Syrah 100%<br><br>

<strong>Región:</strong> Agrelo<br><br>

<strong>Fecha de Vendimia:</strong> Tercera semana de marzo<br><br>

<strong>Vendimia:</strong> A primeras hs del dia y en cajas de 20 Kg<br><br>

<strong>Sangria:</strong> 5%</p>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

<p style="margin: 0 10px 35px;"><strong>Notas de degustación :</strong>  A la vista presenta un color rojo rubí profundo y de muy buena intensidad. Aromas intensos de frutos negros, como cassis, frutos secos como higos, datiles y especias como clavo de olor, anis y pimienta negra . 
En boca tiene una entrada elegante, con una buena estructura, redondo y equilibrado con un final muy agradable y prolongado.</p>
</div>

</div>


</div>


</div>
</div>


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
            
            //Ajax post data to server
            $.post('contact_me.php', post_data, function(response){  

                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    
                    //reset values in all input fields
                    $('#contact_form input').val(''); 
                    $('#contact_form textarea').val(''); 
                }
                
                $("#result").hide().html(output).slideDown();
            }, 'json');
            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    
});
</script>

 <link rel="stylesheet" href="css/style.css">



<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="background:#3c3c3b;">
<div style="float:right;padding: 30px 0;" class="footer-banderas">
<h3>VISITAS PERSONALIZADAS</h3>
<img src="img/bandera-01.jpg" style="display:inline-block;">
<img src="img/bandera-02.jpg" style="display:inline-block;">
<img src="img/bandera-03.jpg" style="display:inline-block;">
<img src="img/bandera-04.jpg" style="display:inline-block;">
<img src="img/bandera-05.jpg" style="display:inline-block;">
<div>
<button data-js="open" style="background: rgba(0, 0, 0, 0);">
<h2>HACE TU RESERVA AQUÍ</h2>
</button>
</div>
<div class="popup">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 popup-form" style="background:#fff;padding: 25px 0;">
<div style="border-bottom: 1px #000 solid;margin-left: 15px;margin-right: 15px;">
<h3>RESERVAS</h3><h4 style="display:inline-block;">COMPLETA EL FORMULARIO</h4>

</div>
  <fieldset id="contact_form">
    <div id="result"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <h4>NOMBRE y APELLIDO*</h4>
    <input type="text" name="name" id="name" />
   
    </div>


    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <h4>TELEFONO*</h4>
    <input type="text" name="apellido" id="apellido" />
   
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0;padding-right:0;">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <h4>fECHA</h4>
    <input type="date" name="name" id="name" />
   
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <h4>n° personas</h4>
    <input type="text" name="apellido" id="apellido" />
   
    </div>

  

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0;padding-right:0;">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <h4>e-mail</h4>
    <input type="text" name="name" id="name" />
   
    </div>


    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <h4>pais, ciudad o region</h4>
    <input type="text" name="apellido" id="apellido" />
   
    </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>DEJANOS TU MENSAJE/ DEGUSTACIÓN A MEDIDA </h4>
    <textarea style="height: 85px;" name="message" id="message"></textarea>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <label style="float:right;"><span>&nbsp;</span>
    <button class="submit_btn" id="submit_btn">Enviar</button>
    </label>
    </div>
</fieldset>
</div>
  <button class="popup-cerrar" name="close">Cerrar</button>
</div>
</div>
</div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

        <script src="js/index.js"></script><div class="container footer">


<div class="col-lg-9 col-sm-9 col-md-9 col-xs-12">

<p>Dolium s.a. - Ruta Provincial 15 - Km. 30 (sin número) - Agrelo - (5509) Luján de Cuyo - Mendoza - Argentina<br>
Tel. (+54) 0261 4900 190 / 226 - dolium@dolium.com - cel (+54 9 261) 598 5676 or (+54 9 261) 598 5742 
 </p>
</div>

<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 redes">


<div style="display:inline-block;margin: 30px 15px;float: right;" class="redes-div">
<a href="https://twitter.com/dolium_bod_subt" target="__blank">
<img src="img/twitter-logo.png" class="img-responsive" style="display:inline-block;">
</a>
<a href="https://www.tripadvisor.com.ar/Attraction_Review-g1605214-d2049536-Reviews-Dolium_Winery-Agrelo_Mendoza_Province_of_Mendoza_Cuyo.html" target="__blank">
<img src="img/trip-logo.png" class="img-responsive" style="display:inline-block;">
</a>
<a href="https://www.facebook.com/Dolium-Bodega-Subterr%C3%A1nea-279701045389373/?fref=ts" target="__blank">
<img src="img/facebook-logo.png" class="img-responsive" style="display:inline-block;">
</a>
<a href="https://www.instagram.com/doliumbodegasubterranea/" target="__blank">
<img src="img/instagram-logo.png" class="img-responsive" style="display:inline-block;">
</a>


</div>

</div></div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
