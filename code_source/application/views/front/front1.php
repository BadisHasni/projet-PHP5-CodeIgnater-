<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Echange,Don,Entraide</title>
	
	
	  
	
	
	
	 <!--ajouter  Bootstrap Core CSS -->
    <link href="<?php echo my_url("assets/css_main/bootstrap.min.css");?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo my_url("assets/css_main/plugins/metisMenu/metisMenu.min.css");?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo my_url("assets/css_main/sb-admin-2.css");?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo my_url("assets/font-awesome-4.1.0/css/font-awesome.min.css");?>" rel="stylesheet" type="text/css">



    <!-- Bootstrap Core CSS -->
    <link href="<?php echo my_url("assets/css_main/bootstrap.min.css");?>" rel="stylesheet">
    <link href="<?php echo my_url("assets/css_main/bootstrap.css");?>" rel="stylesheet">
    <link href= "<?php echo my_url("assets/css_main/bootstrapbadis.css");?>" rel="stylesheet">
	<link href="<?php echo my_url("assets/css_main/bootstrap-theme.css");?>" rel="stylesheet">
	<link href="<?php echo my_url("assets/css_main/bootstrap-theme.min.css");?>" rel="stylesheet">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript" language="javascript">
  
	 
	 function change_autorefreshdiv(){
    var NAME = document.getElementById("meni");
    var currentClass = NAME.className;
    if (currentClass == "dropdown-menu") { // Check the current class name
        NAME.className = "dropdown-menu in";   // Set other class name
    } else {
        NAME.className = "dropdown-menu";  // Otherwise, use `second_name`
    }
} 

function out() {
var NAME = document.getElementById("meni");
    var currentClass = NAME.className;
    if (currentClass == "dropdown-menu") { // Check the current class name
        NAME.className = "dropdown-menu out";   // Set other class name
    } else {
        NAME.className = "dropdown-menu";  // Otherwise, use `second_name`
    }
}
	 </script>


</head>


<body>

 
   
<!-- Navigation -->
    <div class="top1">		
		<nav>
		     
			     
	  
	   
	    
				 <!-- Split button -->
			<div class="btn-group">
			
			  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" onclick="change_autorefreshdiv();" ><u>Mon compte</u></button>
		  
			  <!--button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" onclick="change_autorefreshdiv();" >
				<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
			  </button-->
			  
			  <!--ul class="dropdown-menu" role="menu" id="meni">
				<li><a href="#">Contacté Nous</a></li>
				<li><a href="#">Comment sa marche</a></li>
				<li><a href="#">FAQ</a></li>
				<li class="divider"></li>
				<li><a href="#">Me déconnecté</a></li>
			  </ul-->
			</div>
			
			
			
			    
				    
		       
		</nav><!-- /.nav -->
       
    
     </div>   <!--/.top1-->        
	
	
	
<!--Logo et publicité -->
        <div class="top2">	
		
             <div class="container">
				
                 <div class="row">
				
					<div class="col-xs-6 col-md-4">
					      <img src="<?php echo my_url("assets/image_main/logo_logo.jpg");?>" alt="paysage" class="img-rounded" id="decl_img">
					</div>
				    <div class="col-xs-12 col-md-8">Publicité </div>

                 </div><!-- /.row --> 
			</div><!-- /.container -->
		 
		</div>	<!-- /.top2 -->	 
		
		
		
<!--Menu et bouton déposer annonce-->	
	         <div class="top3">	
                 <div class="container">
				 
				     <div class="row">
				         <div class="col-xs-12 col-sm-6 col-md-8">
						 
						 <!--Pour mettre le menu dans un bouton (respnsive)-->
						    <div class="navbar-header" >
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
									</button>
							</div><!-- ./div respnsive-->
												
						         <div class="mainmenu pull-left">
						               <div class="menu">
						 
						
									<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="" target="_blank" id="imEchange">Echange</a></li>
									<li><a href="#" target="_blank" id="imDon">Don</a></li>
									<li><a href="#" target="_blank" id="imEntraide">Entraide</a></li>								
									</ul>
									
									     </div><!-- /.menu -->
										 
										 
									
								  </div><!-- /.mainmenu pull-left -->	
							 		
                                 </br>
				                 <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vous êtes ici :????????????</h6>
						 
						 
						 </div><!-- /.col-xs-12 col-sm-6 col-md-8 -->
				         <div class="col-xs-6 col-md-4" >
						<a href=<?php echo base_url()."index.php/front/accueil/asso" ;?>>
						 <button type="button" class="btn btn-warning" id="droite" ><strong>DEPOSER</br>UNE ANNONCE</strong></button>
				         </a>
				         </div>
				     </div><!-- /.row -->	
                 </div><!-- /.container -->
			</div>	<!-- /.top3 -->	 
				 
<!--Le contenue de la page -->  

	    <div class="top3">	
			<div class="container">			 
			    <div class="row">
					 
			         <!--Partie gauche-->
					<div class="col-md-3">
						<h5 id="categ"><strong>Les Catégories</strong> -----------------------------</h5>
	
          <!-- Navigation -->
            
                
            <ul class="nav" id="side-menu">
                        
                
						<?php 
							if(isset($categorie)){

								foreach ($categorie->result() as $row) {
									echo '<li>
	                						<a href="#">';
												echo $row->titre;
									echo    '</a>';

										$sousCategorie = $this->categorie_model->getSousCategorie($row->id_categorie);
										
										echo '<ul class="nav nav-second-level">';
			                                
				                            foreach ($sousCategorie->result() as $row2) {
				                                    		
				                            	echo  '<li>
				                                    	<a href="#">';
				                                    		echo $row2->titre;	
				                                echo  '</a>
				                                	  </li>';
				                            }
				                                    	
				                                 
				                                    	
			                           
		                                echo '</ul>';
									
									echo '</li>';
								}
							}
						?>
	              
                     
            	   
                
                <?php /*<li>
                            <a href="#">Livres</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Livres Artistique</a>
                                </li>
                                <li>
                                    <a href="#">Livres Littérature</a>
                                </li>
								<li>
                                    <a href="#">Livres de Poche</a>
                                </li>
								<li>
                                    <a href="#">Livres Enfant</a>
                                </li>
								<li>
                                    <a href="#">Livres Erotique</a>
                                </li>
								<li>
                                    <a href="#">Livres Science-fiction</a>
                                </li>
								<li>
                                    <a href="#">Livres Religion</a>
                                </li>
								<li>
                                    <a href="morris.html">Livres Informatique</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                </li> */?>
                        
 
                        
            </ul>
               
            
			
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
		
									<!--div class="list-group">
										<a href="#" class="list-group-item">catégorie 1</a>
										<a href="#" class="list-group-item">catégorie 2</a>
										<a href="#" class="list-group-item">catégorie 3</a>
										<a href="#" class="list-group-item">catégorie 4</a>
										<a href="#" class="list-group-item">catégorie 5</a>
										<a href="#" class="list-group-item">catégorie 6</a>
									</div-->
									 <h5 id="categ"><strong>Comment sa marche?</strong> ----------------------</h5>
									 <p>tttttttttttttt</br>ttttttttttttttt</br>tttttttttttttttttttttt</br>tttttttttttttttttt</br>ttttttttttttttttttt</br>ttttttttttttttttt</p>
									 <h5 id="categ"><strong>Bienvenue sur le 1er site d'échange !</strong></h5>
									 <p>aaaaaaaaaaaaaaaaa</br>aaaaaaaaaaaaaaaaaaaa</br>aaaaaaaaaaaaaaaaaaaaaaaaaaa</br>aaaaaaaaaaaaaaaaaaaaaaaa</br>aaaaaaaaaaaaaaaaaaaaaaa</br>aaaaaaaaaaaaaaaaaaaa</p>

            
			    </div><!-- /.col-md-3 -->	
			
			
		                <!-- Partie droite  -->	
			
			
			                <div class="col-md-9">
                                <div class="top3">	
                                     <div class="row carousel-holder">

                                        <div class="col-md-12">
										   
									
										  
										  <div class="col-sm-9" id="cercle" >
												<h5 id="cherche"><strong>Je cherche un échange:</strong></h5>
													<div class="row" style="background:#808080">
															<div class="col-xs-8 col-sm-5">
																 <input class="form-control"  type="text" placeholder="Je cherche ...!!!">
															</div><!-- /.col-xs-8 col-sm-4-->	
															<div class="col-xs-4 col-sm-5">
																 <div class="form-group">
																	  
																		<select id="disabledSelect" class="form-control">
																			 <option>Choisir une Catégorie</option>													
																		</select>
																	
																 </div><!-- /.form-group-->	
															   
															
															 </div><!-- /.col-xs-4 col-sm-4-->	
															 
															  <button type="submit" class="btn btn-warning" >recherche</button>
																 
															
													</div><!-- /.row -->	
													
															 <h5 id="cherche">Exemple : harry potter, Uncharted, lady gaga, twilight</h5>
													
										   </div><!-- /.col-sm-9 -->
  
										
										   
										</div><!-- /.col-md-12 -->	

									</div><!-- /.row carousel-holder -->
									</div><!-- /.top3 -->
									
	<!--*************************************************************************************************************-->								
								<div class="top3">	
									 	
                                     <div class="row carousel-holder">

                                        <div class="col-md-12">
										   
									
										  
										  <div class="col-sm-9" id="cercle" >
												
												  <h4 id="cherche"><strong>don, entraide, échange : films, musique, livres, jeux vidéo...</strong></h4>
												
													
										   </div><!-- /.col-sm-9 -->
  
										
										   
										</div><!-- /.col-md-12 -->	

									</div><!-- /.row carousel-holder -->
							</div>	<!-- /.top3 -->
		
									
									
									
									
									
	<!--*************************************************************************************************************-->	

	        <!-- description de site et publicité-->
			
			                 <div class="top3">
			
									<div class="row">
									
									
								          <div class="col-xs-6"><img src="<?php echo my_url("assets/image_main/logo.jpg");?>" alt="paysage" class="img-rounded"></br>	
										  <h5>BIENVENUE sur le 1er Service de troc depuis 2014  : échangez vos DVD, vos livres, .... contre des nouveaux.</br></br>Troc de jeux, troc de jouets, .... Tout s'échange sur eTroc !  Passez vos annonces d'échange et vous aussi profitez des échanges avec nos membres.</br></br>N'achetez plus, échangez, c'est facile !</h5>
										  </div>
                                          <div class="col-xs-6">Publicité</div>
									
									
									</div><!-- /.row -->
							 </div>	<!-- /.top3 -->
						
								
									

									<div class="row">

										<div class="col-sm-4 col-lg-4 col-md-4">
											<div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="">
												<div class="caption">
												   
													<h4><a href="#">Description</a></h4>
												 
												</div><!--caption -->
												<div class="ratings">
												   <!-- <p class="pull-right">15 reviews</p>-->
													<p>
													   <button type="button" class="btn btn-warning">Je le veux</button>
													  
													</p>
												</div><!--ratings -->
											</div><!--thumbnail -->
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->

										<div class="col-sm-4 col-lg-4 col-md-4">
											 <div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="">
												<div class="caption">
												   
													<h4><a href="#">Description</a></h4>
												 
												</div><!--caption -->
												<div class="ratings">
												   <!-- <p class="pull-right">15 reviews</p>-->
													<p>
													   <button type="button" class="btn btn-warning">Je le veux</button>
													</p>
												</div><!--ratings -->
											</div><!--thumbnail -->
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->

										<div class="col-sm-4 col-lg-4 col-md-4">
											<div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="">
												<div class="caption">
												   
													<h4><a href="#">Description</a></h4>
												 
												</div><!--caption -->
												<div class="ratings">
												   <!-- <p class="pull-right">15 reviews</p>-->
													<p>
													   <button type="button" class="btn btn-warning">Je le veux</button>
													
													</p>
												</div><!--ratings -->
											</div><!--thumbnail -->
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->

										<div class="col-sm-4 col-lg-4 col-md-4">
											 <div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="">
												<div class="caption">
												   
													<h4><a href="#">Description</a></h4>
												 
												</div><!--caption -->
												<div class="ratings">
												   <!-- <p class="pull-right">15 reviews</p>-->
													<p>
													   <button type="button" class="btn btn-warning">Je le veux</button>
													
													</p>
												</div><!--ratings -->
											</div><!--thumbnail -->
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->

										<div class="col-sm-4 col-lg-4 col-md-4">
											 <div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="">
												<div class="caption">
												   
													<h4><a href="#">Description</a></h4>
												 
												</div><!--caption -->
												<div class="ratings">
												   <!-- <p class="pull-right">15 reviews</p>-->
													<p>
													   <button type="button" class="btn btn-warning">Je le veux</button>
													   
													</p>
												</div><!--ratings -->
											</div><!--thumbnail -->
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->
										
										
										 <div class="col-sm-4 col-lg-4 col-md-4">
											 <div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="">
												<div class="caption">
												   
													<h4><a href="#">Description</a></h4>
												 
												</div><!--caption -->
												<div class="ratings">
												   <!-- <p class="pull-right">15 reviews</p>-->
													<p>
													   <button type="button" class="btn btn-warning">Je le veux</button>
													  
													</p>
												</div><!--ratings -->
											</div><!--thumbnail -->
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->
										
										 <div class="col-sm-4 col-lg-4 col-md-4">
											 <div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="">
												<div class="caption">
												   
													<h4><a href="#">Description</a></h4>
												 
												</div><!--caption -->
												<div class="ratings">
												   <!-- <p class="pull-right">15 reviews</p>-->
													<p>
													   <button type="button" class="btn btn-warning">Je le veux</button>
													 
													</p>
												</div><!--ratings -->
											</div><!--thumbnail -->
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->
										
										 <div class="col-sm-4 col-lg-4 col-md-4">
											 <div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="">
												<div class="caption">
												   
													<h4><a href="#">Description</a></h4>
												 
												</div><!--rcaption -->
												<div class="ratings">
												   <!-- <p class="pull-right">15 reviews</p>-->
													<p>
													   <button type="button" class="btn btn-warning">Je le veux</button>
													
													</p>
												</div><!--ratings -->
											</div><!--thumbnail -->
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->
										
										
										<div class="col-sm-4 col-lg-4 col-md-4">
											<h4><a href="#">Partie publicité???????????????????????</a></h4>
											
										</div><!-- /.col-sm-4 col-lg-4 col-md-4 -->

									</div><!-- /.row -->

                     </div><!-- /.col-md-9 -->	
			
		
			      
                 </div><!-- /.row -->
			 
			 
			 </div><!-- /.container -->
		</div>	<!-- /.top3 -->	



<!-- footer -->

        <div class="container">
				 
				  <div class="row">
				
					<div class="col-xs-6 col-md-4"><img src="<?php echo my_url("assets/image_main/logo_footer.jpg");?>" alt="paysage" class="img-rounded"></div><!--col-xs-6 col-md-4 -->
				    <div class="col-xs-12 col-md-8">
							    
                             <p>fb,twitter</p>
								
					</div><!--col-xs-12 col-md-8 -->

                 </div><!-- /.row --> 

			      <div class="row">
		             <div class="col-md-3"><h5><strong><abbr title="attribute">Les services</abbr></strong></h5>
					<h5><img src="<?php echo my_url("assets/image_main/echange.jpg");?>" alt="paysage" class="img-rounded">&nbsp;<a href="#" target="_blank" id="imgEchange">Echange</a></h5>
					<h5><img src="<?php echo my_url("assets/image_main/location.jpg");?>" alt="paysage" class="img-rounded">&nbsp;<a href="#" target="_blank" id="imgLocation">Location</a></h5>
					<h5><img src="<?php echo my_url("assets/image_main/don.jpg");?>" alt="paysage" class="img-rounded">&nbsp;<a href="#" target="_blank" id="imgDon">Don</a></h5>
					<h5><img src="<?php echo my_url("assets/image_main//troc.jpg");?>" alt="paysage" class="img-rounded">&nbsp;<a href="#" target="_blank"  id="imgTroc">Troc</a></h5>
					 </div>
		             <div class="col-md-3"><h5><strong><abbr title="attribute">Les Plus</abbr></strong></h5>
					 <h6>Qui somme nous?</br>Conditions générales</br>Contacté eTroc</br>Troc</h6>
					 </div>
		             <div class="col-md-3"><h5><strong><abbr title="attribute">Les infos</abbr></strong></h5>
					 <h6>Echange</br>Location</br>Don</br>Troc</h6>
					 </div>
					 <div class="col-md-3"><h5><strong>Publicité</strong></h5>
					 </div>
			       </div><!--row-->
			  

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <h6>etroc &copy; site web 2014</br>
					Le service d'échange de consoGlobe vous propose de troquer vos objets contre des points. Créez la liste des produits que vous avez et que vous voulez troquer ou échanger puis la liste des produits que vous voulez recevoir en échange.
					Ne jetez plus vos vieux Films, DVD, jeux video, livres, CD echanger les avec d'autres gratuitement ! 
					Les annonces de consoGlobe sont 100% gratuites, sans aucune commission, aucun prélèvement sur vos recettes. Ancien digitroc, l'échange sur consoGlobe est le 1er site d'échange gratuit sur internet depuis 2005.</h6>
                </div><!--col-lg-12-->
            </div><!--row-->
        </footer><!--/. Footer -->

    </div> <!-- /.container -->
   		
	  <!--ajouter -->


	  
	  
	   <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo my_url("assets/js_main/jquery-1.11.0.js");?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo my_url("assets/js_main/bootstrap.min.js");?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo my_url("assets/js_main/plugins/metisMenu/metisMenu.min.js");?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo my_url("assets/js_main/sb-admin-2.js");?>"></script>
	  

  </body>
</html>