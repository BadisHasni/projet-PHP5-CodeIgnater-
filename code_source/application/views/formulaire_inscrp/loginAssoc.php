﻿<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Echange,Don,Entraide</title>

    <!-- Bootstrap Core CSS -->
   <link href="<?php echo my_url("assets/css_front/bootstrap.min.css"); ?>" rel="stylesheet">
	

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--Logo et publicité -->
        <div class="top2">	
		
             <div class="container">
				
                 <div class="row">
				
					<div class="col-xs-9">
					      <img src=<?php echo my_url("assets/image_front/image/logo_logo.jpg"); ?> alt="paysage" class="img-rounded" id="decl_img">
					</div>
				    

                 </div><!-- /.row --> 
			</div><!-- /.container -->
		 
		</div>	<!-- /.top2 -->	 
		
		<hr>

    <!-- Page Content -->
    <div class="container">

				<!-- Jumbotron Header -->
				<header class="jumbotron hero-spacer">
				
				    <div class="row" id="col">
					  <div class="col-xs-6 col-md-2">
					        <h1> Etroc </h1>
					  </div>
					 </div><!--./row-->
					 
					 <div class="row" id="col">
					  <div class="col-xs-12 col-sm-6 col-md-10">
					        
					        <h3> Le premier site de troc en Tunisie</h3>
					  </div>
					</div><!--./row-->
				
				<h4 id="couleur">Pas encore membre? Inscrivez vous</h4>
				
				
					</br>
					    
						 <?php
						
						 //echo validation_errors('<div class="alert alert-error">', '</div>');
						  //echo form_open('formulaire/form_perso_add');
								
								echo validation_errors('<div class="alert alert-danger" role="alert" id="error">', '</div>');
								echo form_open('formulaire/inscription/association'); 
								
								echo '<form method="post" action="">' ;
						       
								echo'
								
								<div class="form-group">
									<label for="exampleInputNom">Nom de l \'association</label>
									<input type="text" class="form-control" name="nom_asso" value="';echo set_value('nom_asso'); echo '" id="disabledTextInput" placeholder="Entrer le nom de l \'association">
								  </div>';
								  
								  
								  echo'
								  <div class="form-group">
									<label for="exampleInputNom">Nom de Responsable</label>
									<input type="text" class="form-control" name="nom" value="';echo set_value('nom'); echo '" id="disabledTextInput" placeholder="Entrer le nom de responsable">
								 

								 </div>
								  
								  <div class="form-group">
									<label for="exampleInputLogin">Login</label>
									<input type="text" class="form-control" name="login" value="';echo set_value('login'); echo '" id="disabledTextInput" placeholder="Entrer votre login">
								  </div>
								   <div class="form-group">
									<label for="exampleInputEmail1">Email </label>
									<input type="email" class="form-control" name="email" value="';echo set_value('email'); echo '" id="exampleInputEmail1" placeholder="Entrer votre email">
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Mot de passe</label>
									<input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Entrer votre mot de passe">
								  </div>
								   <div class="form-group">
									<label for="exampleInputPassword1">Confirmer Mot de passe</label>
									<input type="password" class="form-control" name="pwd_confirm" id="exampleInputPassword1" placeholder="Confirmer votre mot de passe">
								  </div>
								  <div class="form-group">
									<label for="exampleInputLogin">Matricule</label>
									<input type="number" class="form-control" name="mat_asso" value="';echo set_value('mat_asso'); echo '" id="disabledTextInput" placeholder="Entrer votre matricule">
								  </div>
								 
								 
								   <div class="form-group">
									<label for="exampleInputLogin">Téléphone</label>
									<input type="number" class="form-control" name="tel" value="';echo set_value('tel'); echo '" id="disabledTextInput" placeholder="Entrer votre numéro de téléphone">
								  </div>
								  
								  <div class="form-group">
									<label for="exampleInputLogin">Téléphone-fixe</label>
									<input type="number" class="form-control" name="tel_fixe" value="';echo set_value('tel_fixe'); echo '" id="disabledTextInput" placeholder="Entrer votre numéro de téléphone-fixe">
								  </div>
								   <div class="form-group">
									<label for="exampleInputLogin">Adresse</label>
									<input type="text" class="form-control" name="adr" value="';echo set_value('adr'); echo '" id="disabledTextInput" placeholder="Entrer votre Adresse">
								  </div>
								  
								  
								   <div class="form-group">
										<label for="exampleInputLogin">Ville</label>							  
										<select id="disabledSelect"  name="ville" value="';echo set_value('ville'); echo '" class="form-control">
											<option  name="ville"  selected>--Choisir une Ville--</option>	';
											foreach ($ville->result() as $row2) {
												
													echo '<option value="'.$row2->id_ville.'" >'.$row2->nom.'</option>';
																	
											}
											
										echo '
												
									     </select>							
																	
									</div>
								   
								  <div class="form-group">
									<label for="exampleInputLogin">Code Postale</label>
									<input type="number" class="form-control" name="postale" value="';echo set_value('postale'); echo '" id="disabledTextInput" placeholder="Entrer votre code postale">
								  </div>
								  
								  
								 
								  <input type="submit" value="Je m\'inscrit"  class="btn btn-warning"/>
								  

							</form>';
							?>
					
					
					

					
					
					
					
					
					
				</header>

      

        


        <hr>

     
    </div>
    <!-- /.container -->

   <!-- jQuery Version 1.11.0 -->
    <script src=<?php echo my_url("assets/js_front/jquery-1.11.0.js");?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo my_url("assets/js_front/bootstrap.min.js");?>></script>

</body>

</html>
