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
     
	<!-- bxSlider CSS file -->
	<link href="lib/css/jquery.bxslider.css" rel="stylesheet" />
   

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
            <div class="col-xs-6 gray no-float" style="width:70%">
              <h2><div id="log"></div><button id="save" value="Salvar">Salvar</button><button id="build" value="Build">Build</button><button id="add" value="add">ADD+</button><button id="del" value="del">DEL-</button><button id="up" value="up">UP ^</button></h2>
              <!-- Begin Gridster -->
              
              <!-- 
              <div class="gridster demo bxslider">
              -->
              <div class="" >
                <ul class="bxslider">
                    <li data-row="1" data-col="1" data-sizex="1" data-sizey="1" data-id="1" data-price="15.98">
                    	<div style="background-image:url(lib/images/grelhados.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Primeiro</div>
                    </li>
                    <li data-row="1" data-col="2" data-sizex="1" data-sizey="1"  data-id="2" data-price="16.55">
                    	<div style="background-image:url(lib/images/kids.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Hamburger de Picanha</div>
                    </li>
                    <li data-row="1" data-col="3" data-sizex="1" data-sizey="1"  data-id="3" data-price="11.11">
                    	<div style="background-image:url(lib/images/massas.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Filézinho de Frango</div>
                    </li>
                    <li data-row="1" data-col="4" data-sizex="1" data-sizey="1"  data-id="4" data-price="12.23">
                    	<div style="background-image:url(lib/images/porcoes.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Calabresa Fatiada</div>
                    </li>
                     <li data-row="1" data-col="1" data-sizex="1" data-sizey="1" data-id="1" data-price="15.98">
                    	<div style="background-image:url(lib/images/grelhados.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Steak de Frango à Parmegiana</div>
                    </li>
                    <li data-row="1" data-col="2" data-sizex="1" data-sizey="1"  data-id="2" data-price="16.55">
                    	<div style="background-image:url(lib/images/kids.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Hamburger de Picanha</div>
                    </li>
                    <li data-row="1" data-col="3" data-sizex="1" data-sizey="1"  data-id="3" data-price="11.11">
                    	<div style="background-image:url(lib/images/massas.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Filézinho de Frango</div>
                    </li>
                    <li data-row="1" data-col="4" data-sizex="1" data-sizey="1"  data-id="4" data-price="12.23">
                    	<div style="background-image:url(lib/images/porcoes.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Penultimo</div>
                    </li>
                    <li data-row="1" data-col="4" data-sizex="1" data-sizey="1"  data-id="4" data-price="12.23">
                    	<div style="background-image:url(lib/images/porcoes.jpg)" class="boxBgSlider"></div>
                        <div style="" class="colorLightBlue boxBxSlider">Ultimo</div>
                    </li>
                    
                
             
                </ul>
            </div>
              <!-- Start outside slide -->
              <div class="outside">
                  
                  <p><a href="" id="slider-prev"></a> | <a href="javascript:void(0);" id="slider-next" class="bx-next"></a></p>
               </div>
              <!-- End outside slide -->
              <!-- End Gridster -->
            </div>
            
            <div class="col-xs-6 gray no-float" style="width:30%">
            	<div id="cupom">Cupom</div>
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
     <!-- bxSlider Javascript file -->
     <!-- jQuery library (served from Google) -->
	<script src="./lib/js/jquery.easing.1.3.js"></script>
	<script src="./lib/js/jquery.bxslider.min.js"></script>
    <script>
    	$(document).ready(function() {      
		   $('.carousel').carousel('pause');
		   var gridster;
		   var element;
		   
		   // -----> start gridster
		   /*
		   $(".gridster ul").gridster({
				widget_margins: [10, 10],
				widget_base_dimensions: [100, 100] 
			});*/
			  gridster = $(".gridster ul").gridster({
				  widget_base_dimensions: [160, 100],
				  widget_margins: [10, 10],
				  helper: 'clone',
				  resize: {
					enabled: true,
					max_size: [1, 1],
					min_size: [1, 1]
				  },/*
				  serialize_params: function ($w, wgd) {
					return {
						id: wgd.el[0].id,
						col: wgd.col,
						row: wgd.row,
						htmlContent: $($w).html()
					};*/
					serialize_params: function($w, wgd) 
					{ 
						var el =  $($w).html().replace(/"/g, "''")
						console.log(el)
						
						return { 
							   id: $($w).attr('id'), 
							   col: wgd.col, 
							   row: wgd.row, 
							   size_x: wgd.size_x, 
							   size_y: wgd.size_y, 
							   htmlContent : el
							 };
					}
				
			}).data('gridster');
		   // -----< end gridster
		   
		   $('#save').on('click', function() {
            var s = gridster.serialize();
			
			var request = $.ajax({
			  url: "admin/insertGridster.php",
			  method: "POST",
			  data: { serialize : JSON.stringify(s) },
			  dataType: "html"
			});
			 
			request.done(function( msg ) {
			  $( "#log" ).html( msg );
			});
			 
			request.fail(function( jqXHR, textStatus ) {
			   $( "#log" ).html("Request failed:"+ textStatus );
			});
			
			
				
			
			// para imprimir os dados
            //$('#log').val(JSON.stringify(s));
        });
		
		// build 
		// build gridster
			// sort serialization
			/*
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
						
			  			serialization = Gridster.sort_by_row_and_col_asc(serialization);
						$.each(serialization, function() {
							//gridster.add_widget('<li />', this.size_x, this.size_y, this.col, this.row);
							gridster.add_widget('<li   data-row="' + this.row + '"  data-col="' + this.col + '"  data-sizex="'+this.size_x+'" data-sizey="'+this.size_y+'" >' + this.htmlContent +
                '</li>');
						});	
					  	$( "#log" ).html( "Done!" );
					});
					 
					request.fail(function( jqXHR, textStatus ) {
					   $( "#log" ).html("Request failed:"+ textStatus );
					});
			  */
		
			  /*
		
				gridster = $(".gridster ul").gridster({
				  widget_base_dimensions: [100, 55],
				  widget_margins: [5, 5]
				}).data('gridster');*/
		
		
				 $('#build').on('click', function() {
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
						
						//console.log(serialization);
						/*
						gridster = $(".gridster ul").gridster({
						  widget_base_dimensions: [160, 100],
						  widget_margins: [10, 10]
						  
						}).data('gridster');
						*/
			  			serialization = Gridster.sort_by_row_and_col_asc(serialization);
						
						gridData = serialization;
						//gridData = serialization;
						var htmlString = '';
						$.each(gridData, function (index, value) {
				
							htmlString += '<li   data-row="' + this.row + '"  data-col="' + this.col + '"  data-sizex="'+this.size_x+'" data-sizey="'+this.size_y+'" >' + this.htmlContent +
                '</li>';
						});
				
						$(".demo").html(htmlString);
						/*
						$.each(serialization, function() {
							gridster.add_widget('<li />', this.size_x, this.size_y, this.col, this.row);
							
						});	*/
					  	$( "#log" ).html( "Done!" );
					});
					 
					request.fail(function( jqXHR, textStatus ) {
					   $( "#log" ).html("Request failed:"+ textStatus );
					});
					
					
					
				 });
				 
				 // add grid
				  $('#add').on('click', function() {
					  gridster.add_widget('<li class="new">The HTML of the widget...</li>', 2, 1);
				  });
				   $('#del').on('click', function() {
					  gridster.remove_widget( $('.gridster li').eq(element) );
				  });
				  
				  $('.gridster li').on('click', function(event) {
				  	 element = ($(this).index());
				  });
				  
				  //SLIDE UP
				  jQuery("#up").on("click", function () {
					  var $ul = $('.demo ul');
					  var y = $ul.scrollTop();
					  var $firstChild = $ul.children().first();
					  var step = $firstChild.outerHeight() + parseInt($firstChild.css('marginBottom'),10);
					  
					  console.log('before up', y, step);
					  if (y >= 0) {
						  y -= step;
						  console.log('after up', y);
						  
						  $ul.stop().animate({
							  scrollTop: y
						  }, 100);
					  }
				  });
				  
				  
				  
				  var slider = $('.bxslider').bxSlider({
				  mode: 'vertical',
				  	slideWidth: 693 ,
  					slideMargin: 3,
					auto: false,
  					autoControls: false,
					pager: false,
    				controls: false,
					infiniteLoop: false,
					minSlides: 1,
    				maxSlides: 30,
					moveSlides: 1, 
					hideControlOnEnd: true,
					adaptiveHeight: false,
					/*nextSelector: '#slider-next',
				    prevSelector: '#slider-prev',
				    /*nextText: 'Próximo →',
				    prevText: '← Anterior',*/
					
					easing: 'easeOutElastic',
					useCSS: false,
  					speed: 800,
					useCSS: false
				});
				
				
				 $('#slider-next').click(function(){
					  slider.goToNextSlide();
					  return false;
				  });
				  
				 $('#slider-prev').click(function() {
					  
					  slider.goToPrevSlide();
					  return false;
				  }); 
				
				// create cupom
				$('.bxslider li').on('click', function(event) {
					var price = $(this).attr("data-price");
					var name=  $(this).html();
					var id =  $(this).attr("data-id");
					
					var html = $('#cupom').html();
					
					$('#cupom').html(html+"<table><tr>"+"<td>"+id+"</td>"+"<td>"+name+"</td>"+"<td>"+price+"</td>"+"</tr></table>");
					
				  	 //element = ($(this).index());
				  });
		   
		});// end document.ready
		
		

     

    </script>
  </body>
</html>