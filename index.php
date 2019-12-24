<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://raw.githubusercontent.com/JohnBlazek/codepen-resources/master/3d-carousel/css/stylesheet.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin="anonymous">
		<link rel="stylesheet" href="css/styleHome.css">
        <script src="js/scriptHome.js"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
			//initialize popper
			 $(function(){
				$(".myPopover").popover();
			 });
			 //initialize dropdown
			 $(function(){
				$('.dropdown-toggle').dropdown();
			 });
         </script>
        <title> IEE Dashboard</title>
    </head>
    <body>
			 <!-- structure div Home Page -->
			 <div id="contentHome">
			 	<div id="menuCard">
			 			
				 <div class='row' style='width:97%; margin-left:2%'>
						  <div id='title_link'><button type="button" class="btn btn-primary btn-lg">Einlogen</button> </div>
						  <div id="title_dashboard">IEE Dashboard</div>
						  <div id='bloc_contentHome'>
							   
								<div class='container-fluid'> 
									<div class='row'>
											<div class='col-md'>
											<div class='card mb-3'>
												  <h3 class='card-header' id='title_card'>Ein neues Projekt erstellen </h3>
												  <div class='card-body' id='div_text_card'>
													 <p class='card-text'><img src='images/electronic.jpg' /></p> 
													 <a href="#" class="btn btn-primary btn-lg">New Projekt</a>
												  </div>
												  </div>
											</div>
											<div class='col-md'>
												<div class='card mb-3'>
												 <h3 class='card-header' id='title_card'>Daten Anlegen </h3>
												<div class='card-body' id='div_text_card'>
												   <p class='card-text'> <img src='images/datein.jpg' /></p>
												   <!--    Dropdown group for daten Anlegen menu -->
														<div class="btn-group">
														<button type="button" class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Neue Datein</button>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Algorithm</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Prüfstand</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Test Art</a>
															<div class="dropdown-divider"></div>
															<!-- Untere Menu Unit -->
															<a class="dropdown-item" href="#">Unit</a>
														</div>
														</div>
													<!-- End dropdown -->
												</div>
											 </div>
											</div>
									   
											<div class='col-md'>
												<div class='card mb-3'>
												 <h3 class='card-header' id='title_card'>Test Ausführen  </h3>
												<div class='card-body' id='div_text_card'>
												  <p class='card-text' ><img src='images/batterie.png' /> </p>
												  <a href="#" class="btn btn-primary btn-lg">Test</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
						  </div> 
						</div> 

				 </div>

			 </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://tympanus.net/Development/Slicebox/js/jquery.slicebox.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <!-- {% block javascripts %}{% endblock %} -->
    </body>
</html>