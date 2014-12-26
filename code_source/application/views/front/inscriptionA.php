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

</head>


<body>

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
   
<!-- Navigation -->
    <div class="top1">		
		<nav>
		     
			     
	  
	   
	    
				 <!-- Split button -->
			<div class="btn-group">
			  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" onclick="change_autorefreshdiv();" >Mon compte</button>
			  <!--button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" onclick="change_autorefreshdiv();" >
				<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
			  </button-->
			  <ul class="dropdown-menu" role="menu" id="meni">
				<li><a href="#">Contacté Nous</a></li>
				<li><a href="#">Comment sa marche</a></li>
				<li><a href="#">FAQ</a></li>
				<li class="divider"></li>
				<li><a href="#">Me déconnecté</a></li>
			  </ul>
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
						 <button type="button" class="btn btn-warning" id="droite" ><strong>DEPOSER</br>UNE ANNONCE</strong></button>
				         
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
												
												  <h4 id="cherche"><strong>Connectez vous ou inscrivez vous : </strong></h4>
												
													
										   </div><!-- /.col-sm-9 -->
  
										
										   
										</div><!-- /.col-md-12 -->	

									</div><!-- /.row carousel-holder -->
							</div>	<!-- /.top3 -->
		
									
									
									
									
									
	<!--*************************************************************************************************************-->	

	        <!-- description de site et publicité-->
			
			                 <div class="top3">
			
									<div class="row">
									
									           <!-- 1 éme formulaire *******************************************************************--> 
									
								          <div class="col-xs-6">	
										  
										            <div class="panel panel-default">
													
														  <div class="panel-heading" id="formul">
																  <h4><strong>&nbsp;&nbsp;&nbsp;Pas encore membre? Inscrivez vous</strong></h4>
														  </div><!--panel-heading-->
													  
													  
													  
													      <!--Contenu-->
														  <div class="panel-body">
															      <!--button type="button" class="btn btn-primary btn-lg btn-block">Inscrit vous avec Facebook</button-->
																			

																	<div class="btn-group">
																	
																	  

																	  <button type="button" class="btn btn-primary btn-lg active">Pas encore membre? Inscrivez vous</button>  
																	  
																	 
																	  
																	</div><!--btn-group-->
																	
																	
																  <hr>
																  
																  
																  
																  
																  
														<?php
						
														 //echo validation_errors('<div class="alert alert-error">', '</div>');
														  //echo form_open('formulaire/form_perso_add');
																
																echo validation_errors('<div class="alert alert-danger" role="alert" id="error">', '</div>');
																echo form_open('front/accueil/asso'); 
																
																echo '<form method="post" action="">' ;
																echo  '
																	  
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
						   
																		 
																			<label for="exampleInputLogin"><h4><strong>Nom de l\'association</strong></h4></label>
																			
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">
																			<input type="text" class="form-control" name="nom_asso" value="';echo set_value('nom_asso'); echo '" id="disabledTextInput" placeholder="Entrer le nom de l \'association">																		   
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																	  
																	  
																	
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																	   
																	   
																			<label for="exampleInputNom"><h4><strong>Nom de Responsable</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">
																			<input type="text" class="form-control" name="nom" value="';echo set_value('nom'); echo '" id="disabledTextInput" placeholder="Entrer le nom de responsable">
																		 </div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																		  
																	
																	
																	
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputLogin"><h4><strong>Login</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">
																			<input type="text" class="form-control" name="login" value="';echo set_value('login'); echo '" id="disabledTextInput" placeholder="Entrer votre login">
																		  </div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																
																
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputEmail1"><h4><strong>Email</h4></strong> </label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">	
																			<input type="email" class="form-control" name="email" value="';echo set_value('email'); echo '" id="exampleInputEmail1" placeholder="Entrer votre email">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																
																
																
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputPassword1"><h4><strong>Mot de passe</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">	
																			<input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Entrer votre mot de passe">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																
																
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																		   
																			<label for="exampleInputPassword1"><h4><strong>Confirmation</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">		
																			<input type="password" class="form-control" name="pwd_confirm" id="exampleInputPassword1" placeholder="Confirmer votre mot de passe">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																		   
																		   
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputLogin"><h4><strong>Matricule</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">	
																			<input type="number" class="form-control" name="mat_asso" value="';echo set_value('mat_asso'); echo '" id="disabledTextInput" placeholder="Entrer votre matricule">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->		 
																		 
																		 
																		  
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputLogin"><h4><strong>Téléphone</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">	
																			<input type="number" class="form-control" name="tel" value="';echo set_value('tel'); echo '" id="disabledTextInput" placeholder="Entrer votre numéro de téléphone">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																
																
																
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputLogin"><h4><strong>Téléphone-fixe</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">	
																			<input type="number" class="form-control" name="tel_fixe" value="';echo set_value('tel_fixe'); echo '" id="disabledTextInput" placeholder="Entrer votre numéro de téléphone-fixe">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																		  
																		  
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">		  
																			<label for="exampleInputLogin"><h4><strong>Adresse</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">		
																			<input type="text" class="form-control" name="adr" value="';echo set_value('adr'); echo '" id="disabledTextInput" placeholder="Entrer votre Adresse">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																
																
																
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																				<label for="exampleInputLogin"><h4><strong>Ville</h4></strong></label>
																			</div><!--col-md-4-->	
																		
																		    <div class="col-md-8">		
																				<select id="disabledSelect"  name="ville" value="';echo set_value('ville'); echo '" class="form-control">
																					<option  name="ville"  selected>--Choisir une Ville--</option>	';
																					foreach ($ville->result() as $row2) {
																						
																							echo '<option value="'.$row2->id_ville.'" >'.$row2->nom.'</option>';
																											
																					}
																					
																				echo '
												
									                                             </select>								
																											
																			</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																
																
																
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputLogin"><h4><strong>Code Postale</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">		
																			<input type="number" class="form-control" name="postale" value="';echo set_value('postale'); echo '" id="disabledTextInput" placeholder="Entrer votre code postale">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																		  
																		  <h5 id="astuce"><strong>NB:</strong> Tous les champs sont obligatoire ! .</h5>
																		  
																		  <h6 id="submit">  En cliquant sur \'Je m\'inscris\', je reconnais avoir pris connaissance des Conditions générales d\'utilisation de etroc et les accepte dans leur intégralité.</h6>

																		  
																		  
																<div class="row">
																    <div class="col-md-4"></div><!--col-md-4-->	
																	    <div class="col-md-4">
																
																		  <input type="submit" value="Je m\'inscrit"  class="btn btn-warning"/>
																		   
																		</div><!--col-md-4-->	
																	<div class="col-md-4"></div><!--col-md-4-->		
																		
																</div><!--row-->	  

													
															</form>';
																	
																	?>		
																	
																	      
																	   
																   
																
																  
																  
														  </div><!--panel-body-->
														  
													</div><!--panel panel-default-->

										  
										  </div><!--col-xs-6-->
										  
										  
										        <!--2 eme formulaire *******************************************************************--> 
										  
										  
                                          <div class="col-xs-6">
										  
										             <div class="panel panel-default">
													
														  <div class="panel-heading" id="formul">
																  <h4><strong>&nbsp;&nbsp;&nbsp;Déjà membre? Connectez vous</strong></h4>
														  </div><!--panel-heading-->
													  
													  
														  <div class="panel-body">
															      
															<form role="form">	  
																  
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputLogin"><h4><strong>Login :</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">
																			<input type="text" class="form-control" id="disabledTextInput" placeholder="Entrer votre login">
																		  </div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->  
																  
																  
																  
																  
																  
																  
																  
																<div class="row">
																	<div class="form-group" id="formul1">
																	   <div class="col-md-4">
																			<label for="exampleInputPassword1"><h4><strong>Mot de passe</h4></strong></label>
																		</div><!--col-md-4-->	
																		
																		<div class="col-md-8">	
																			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe">
																		</div><!--col-md-8-->
																	</div><!--form-group-->
																		 
																</div><!--row-->
																
																
																
																<div class="row">
																    <div class="col-md-4"></div><!--col-md-4-->	
																	    <div class="col-md-4">
																
																		 <input type="submit" value="Je me connecte"  class="btn btn-warning"/>
																		   
																		</div><!--col-md-4-->	
																	<div class="col-md-4"></div><!--col-md-4-->		
																		
																</div><!--row-->	
																  
																  
															</form>	  
																  
														  </div><!--panel-body-->
														  
													</div><!--panel panel-default-->
										  
										  </div>
									
									
									</div><!-- /.row -->
							 </div>	<!-- /.top3 -->
						
<!--*************************************************************************************************************-->	
									

								

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

    <!--ajouter  Bootstrap Core CSS -->
    <link href="<?php echo my_url("assets/css_main/bootstrap.min.css");?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo my_url("assets/css_main/plugins/metisMenu/metisMenu.min.css");?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo my_url("assets/css_main/sb-admin-2.css");?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo my_url("assets/font-awesome-4.1.0/css/font-awesome.min.css");?>" rel="stylesheet" type="text/css">
	  

  </body>
</html>