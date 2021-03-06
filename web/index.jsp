<%-- 
    Document   : index
    Created on : 23/04/2015, 16:59:04
    Author     : belchiorpalma
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="NEO STORE - PENSOU? ELE FAZ!">
    <meta name="author" content="ITFOX">
    <link rel="icon" href="../../favicon.ico">

    <title>NEO STORE - Pensou? Ele faz! </title>

    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="lib/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="lib/css/default.css" rel="stylesheet">
    <link href="lib/css/carousel.css" rel="stylesheet">
    <link href="lib/gridster/jquery.gridster.min.css" rel="stylesheet" >
    <link href="lib/gridster/gridster.css" rel="stylesheet">
    
  

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="./lib/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./lib/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar (Global navigation) -->
    <nav class="navbar navbar-default navbar-fixed-top" style="height:38px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">neoStore - PDV</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            
          </ul>
          	<div class="navbar-right">
        		<ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Usuário - ClasTech <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Abertura do Caixa</a></li>
                        <li><a href="#">Sangria</a></li>
                        <li><a href="#">Fechamento do Caixa</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Abrir Gaveta</li>
                      	<li><a href="#">Manual do Usuário</a></li>
                        <li><a href="#">Logout</a></li>
                      </ul>
                    </li>
                    <li><a href="#about"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a></li>
                    <li><a href="#contact"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li>
                </ul>    
        	</div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- End fixed navbar -->
    
    <!-- Begin second global navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="margin-top:40px; background:transparent;height:47px;">
    	 <div class="text-center" style="margin-top:0px;">
         		<span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Produtos:    
                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span><a href="#">  Fila  <span class="badge">42</span>     </a>
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <a href="#">  Pendentes  <span class="badge">42</span>     </a>
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <a href="#">  Cancelados  <span class="badge">42</span>     </a>
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <a href="#">  Feitos  <span class="badge">42</span>     </a>
               
        </div>
    </nav>
    <!-- End second global navigation -->
    
     <!-- Begin third global navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="margin-top:87px; background:transparent; height:120px">
    	 <div class="text-center" style="margin-top:0px;">
         		   <!-- Carousel
    ================================================== -->
    <!--
    	quando adicionar a classe slide a classe carousel ele comeca a executar
    -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
      <!-- Indicators
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
       -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          
          <div class="container">
            <div class="carousel-caption">
              
              <p>
              	<a class="btn btn-lg btn-primary colorPink" href="#" role="button">Express</a>
              	<a class="btn btn-lg btn-primary colorLightGreen" href="#" role="button">Top</a>
                <a class="btn btn-lg btn-primary colorLightBlue" href="#" role="button">Parmegiana</a>
                <a class="btn btn-lg btn-primary colorRoxo" href="#" role="button">Grelhados</a>
                <a class="btn btn-lg btn-primary colorLightOrange" href="#" role="button">Sobremesas</a>
                <a class="btn btn-lg btn-primary colorDarkRed" href="#" role="button">Bebidas</a>
                <a class="btn btn-lg btn-primary colorBlue" href="#" role="button">Massas</a>
                <a class="btn btn-lg btn-primary colorDarkGreen" href="#" role="button">Tábuas</a>
                <a class="btn btn-lg btn-primary colorLightRed" href="#" role="button">Porções</a>
              	<a class="btn btn-lg btn-primary colorOrange" href="#" role="button">Pratos Especiais</a>
                <a class="btn btn-lg btn-primary colorDarkGray" href="#" role="button">Kids</a>
                <a class="btn btn-lg btn-primary colorWhite" href="#" role="button">Saladas</a>
               
                
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
               
        </div>
    </nav>
    <!-- End third global navigation -->

    <!-- Begin page content -->
    <div class="container">
      
      <!-- Begin row -->
          <div class="row">
            <div class="col-xs-6 gray no-float" style="width:60%">
              <h2>Col 1</h2>
              <!-- Begin Gridster -->
               <div class="gridster demo">
                <ul>
                    <li data-row="1" data-col="1" data-sizex="1" data-sizey="1"></li>
                    
                </ul>
               </div>
              <!-- End Gridster -->
           
              
            </div>
            <div class="col-xs-6 gray no-float" style="width:40%">
              <h2>Col 2</h2>
            </div>
          </div>
      
      <!-- End row -->  
    </div>
    
	<!-- Begin footer -->
    <footer class="footer">
      <div class="container">
        <p class="text-muted">ClasTech Digital Multimídia. Todos os direitos reservados. <span class="navbar-right">Política de Uso &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        
      </div>
    </footer>
	<!-- End footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./lib/jquery/1.11.2/jquery.min.js"></script>
    <script src="./lib/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./lib/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="./lib/gridster/jquery.gridster.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="./lib/js/keyboard.js"></script>
    <script>
    	$(document).ready(function() {   
			// keyboard
			keyboard();
			
			 
			// carousel
		 
		   $('.carousel').carousel('pause');
		   var gridster;
		   gridster = $(".gridster ul").gridster({
				  widget_base_dimensions: [100, 100],
				  widget_margins: [10, 10],
				  helper: 'clone',
				  resize: {
					enabled: false,
					max_size: [2, 2],
					min_size: [1, 1]
				  }
				  
			}).data('gridster').disable();
			// build
			gridster.remove_all_widgets();
					
					// call ajax to get build
					var request = $.ajax({
					  url: "admin/getGridster.php",
					  method: "POST",
					  data: { gridsterId : 1 },
					  dataType: "json"
					});
					 
					request.done(function( msg ) {
					 	var serialization;	
						serialization = msg;
						/*
						gridster = $(".gridster ul").gridster({
						  widget_base_dimensions: [100, 100],
						  widget_margins: [10, 10]
						}).data('gridster');
						*/
			  			serialization = Gridster.sort_by_row_and_col_asc(serialization);
						$.each(serialization, function() {
							gridster.add_widget('<li />', this.size_x, this.size_y, this.col, this.row);
						});	
					  	$( "#log" ).html( "Done!" );
					});
					 
					request.fail(function( jqXHR, textStatus ) {
					   $( "#log" ).html("Request failed:"+ textStatus );
					});
		});
		
		
    </script>
  </body>
</html>