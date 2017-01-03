
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

</head>

<body>


<style>
.tienda a {

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
<div class="col-lg-12">

<img src="img/tienda.jpg" class="img-responsive">

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tienda">

<h3>COMPLETA EL FORMULARIO</h3>

<p>Para realizar pedidos de cotización de vinos (2) complete este formulario seleccionando el vino y canditades de cajas requeridas. A la brevedad nos pondremos en contacto con Ud.<br>
(1) Los pagos no se realizan on-line.<br>
(2) Pedidos sujetos a disponibilidad.<br>
*Debe cololar el dato solicitado.<br>
Recibí tu pedido en cualquier parte del país.<br><br>

<strong>*Ya nos visitaste? Aprovechá los “descuentos del día” en bodega, enviando simplemente un mail a dolium@dolium.com</strong></p>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tienda" style="text-align:center;">


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tienda" style="text-align:center;background:#ebe5e5;padding: 25px 0;">


<fieldset id="contact_form">
    <div id="result"></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>NOMBRE*</h4>
    <input type="text" name="name" id="name" />
   
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>APELLIDO*</h4>
    <input type="text" name="apellido" id="apellido" />
   
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>Empresa</h4>
    <input type="text" name="empresa" id="empresa" />
   
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>Rubro</h4>
    <input type="text" name="domicilio" id="domicilio" />
   
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>E-mail*</h4>
    <input type="email" name="email" id="email" />
  
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>Telefono*</h4>
    <input type="text" name="phone" id="phone" />
   
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>domicilio*</h4>
    <input type="text" name="domicilio" id="domicilio" />
   
    </div>


    

     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 40px 0 0;">
     <div class="col-lg-5 col-lg-5 col-md-5 col-xs-12">
    <h5>vinos</h5>
    </div>
     <div class="col-lg-5 col-lg-5 col-md-5 col-xs-12">
    <select>
 <option value=""></option>
  <option value="1">MALBEC 2011</option>
  <option value="2">RESERVA MALBEC</option>
  <option value="3">LATE H MALBEC</option>
  <option value="4">ROSÉ MALBEC</option>
  <option value="5">GRAND MALBEC</option>
  <option value="6">SYRAH</option>
</select>
</div>
 <div class="col-lg-1 col-lg-1 col-md-1 col-xs-12 tienda-acomodar" style="position: relative;right: 14%;">
 <h5 style="margin:10px 0">cajas</h5>
 </div>
  <div class="col-lg-1 col-lg-1 col-md-1 col-xs-12 tienda-acomodar" style="position: relative;right: 15%;">
 <input type="number" name="domicilio" id="domicilio"  style="width:100%;"/>
 </div>
   
    </div>

       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 40px 0 0;">
     <div class="col-lg-5 col-lg-5 col-md-5 col-xs-12">
    <h5>vinos</h5>
    </div>
     <div class="col-lg-5 col-lg-5 col-md-5 col-xs-12">
    <select>
 <option value=""></option>
  <option value="1">MALBEC 2011</option>
  <option value="2">RESERVA MALBEC</option>
  <option value="3">LATE H MALBEC</option>
  <option value="4">ROSÉ MALBEC</option>
  <option value="5">GRAND MALBEC</option>
  <option value="6">SYRAH</option>
</select>
</div>
 <div class="col-lg-1  col-lg-1 col-md-1 col-xs-12 tienda-acomodar" style="position: relative;right: 14%;">
 <h5 style="margin:10px 0">cajas</h5>
 </div>
  <div class="col-lg-1  col-lg-1 col-md-1 col-xs-12 tienda-acomodar" style="position: relative;right: 15%;">
 <input type="number" name="domicilio" id="domicilio"  style="width:100%;"/>
 </div>
   
    </div>

       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 40px 0 ;">
     <div class="col-lg-5 col-lg-5 col-md-5 col-xs-12">
    <h5>vinos</h5>
    </div>
     <div class="col-lg-5 col-lg-5 col-md-5 col-xs-12">
    <select>
  <option value=""></option>
  <option value="1">MALBEC 2011</option>
  <option value="2">RESERVA MALBEC</option>
  <option value="3">LATE H MALBEC</option>
  <option value="4">ROSÉ MALBEC</option>
  <option value="5">GRAND MALBEC</option>
  <option value="6">SYRAH</option>
</select>
</div>
 <div class="col-lg-1 col-lg-1 col-md-1 col-xs-12 tienda-acomodar"   style="position: relative;right: 14%;">
 <h5 style="margin:10px 0">cajas</h5>
 </div>
  <div class="col-lg-1 col-lg-1 col-md-1 col-xs-12 tienda-acomodar"   style="position: relative;right: 15%;">
 <input type="number" name="domicilio" id="domicilio"  style="width:100%;"/>
 </div>
   
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h4>Consulta</h4>
    <textarea style="height: 85px;" name="message" id="message"></textarea>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <label><span>&nbsp;</span>
    <button class="submit_btn" id="submit_btn">Enviar</button>
    </label>
    </div>
</fieldset>

</div>
</div>

<div class="container footer">


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
