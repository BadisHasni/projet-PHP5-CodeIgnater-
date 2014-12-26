<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Admin || </title>

    <style>
          button[type=button]{
            font-size: 12px;
            height: 29px;
          }

          body{
            padding: 0;
            margin: 50px;
          }
    </style>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo my_url("assets/lib/bootstrap/css/bootstrap.min.css"); ?>">
	
	<!--Bootbox-->
    <script src=<?php echo my_url("assets/lib/bootbox/js/bootbox.min.js");?>  ></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo my_url("assets/lib/font-awesome/css/font-awesome.min.css");?>" >

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo my_url("assets/css/main.min.css");?>">

    <!-- Metis Theme stylesheet -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="base_url()assets/lib/html5shiv/html5shiv.js"></script>
        <script src="base_url()assets/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--For Development Only. Not required -->
    <script>
      less = {
        env: "development",
        relativeUrls: false,
        rootpath: '<?php echo my_url("assets/");?>'
      };

	  
		
		function myville(region,annonce){
			window.open("<?php echo my_url('index.php/admin/');?>editer_annonce/"+annonce+"/"+region, "_self");
		}
		
    </script>
    <link rel="stylesheet" href="<?php echo my_url("assets/css/style-switcher.css");?> ">
    <link rel="stylesheet/less" type="text/css" href="<?php echo my_url("assets/css/less/theme.less");?>">
    <script src=<?php echo my_url("assets/lib/less/less-1.7.3.min.js");?>></script>

    <!--Modernizr 2.8.2-->
    <script src=<?php echo my_url("assets/lib/modernizr/modernizr.min.js");?>  ></script>
  </head>

  <body>
    <div class="bg-dark dk" id="wrap" style="margin=0px;">
      <div id="top" >

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button>
              
            </header>
            <div class="topnav">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a> 
              </div>
              <div class="btn-group">
                
                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-danger">4</span> 
                </a> 
                
              </div>
              <div class="btn-group">
                <a href="<?php echo my_url("index.php/__admin__/logout"); ?>" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                  <i class="fa fa-bars"></i>
                </a> 
                 
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

             
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <header class="head">
          
          <div class="main-bar">
            <h3>
              <i class="fa fa-home"></i>&nbsp; etroc.tn</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media bg-dark dker">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
              <img class="media-object  user-img" width="115" height="30" alt="User Picture" src="<?php echo my_url("assets/img/logo.png"); ?>">
              
            </a> 
            <div class="media-body">
                <ul class="list-unstyled user-info">
                <li> <a href="">Administrator</a>  </li>
                
              </ul>
            </div>
          </div>
        </div>

        <!-- #menu -->
        <ul id="menu" class="bg-blue dker">
          <li class="nav-header">Menu</li>
          <li class="nav-divider"></li>
          <li class="">
            <a href="<?php echo base_url().'index.php/admin/';?>">
              <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Tableau de bord</span> 
            </a> 
          </li>
         
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span class="link-title">Annonces</span> 
              <span class="fa arrow"></span> 
            </a>
			<ul>
				<li>
					<a href="javascript:;">Troc  <span class="fa arrow"></span>  </a> 
					<ul>
						<li> <a href="<?php echo my_url('index.php/admin/');?>troc_actif">Active</a>  </li>
						<li> <a href="<?php echo my_url('index.php/admin/');?>troc_inactif">Inactive</a>  </li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">Don  <span class="fa arrow"></span>  </a> 
					<ul>
						<li> <a href="<?php echo my_url('index.php/admin/');?>don_actif">Active</a>  </li>
						<li> <a href="<?php echo my_url('index.php/admin/');?>don_inactif">Inactive</a>  </li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">Entraide  <span class="fa arrow"></span>  </a> 
					<ul>
						<li> <a href="<?php echo my_url('index.php/admin/');?>entraide_actif">Active</a>  </li>
						<li> <a href="<?php echo my_url('index.php/admin/');?>entraide_inactif">Inactive</a>  </li>
					</ul>
				</li>
			</ul>
		</li>
         
         
          <li>
            <a href="<?php echo my_url('index.php/admin/');?>categorie">
              <i class="fa fa-file"></i>
              <span class="link-title">Catégories</span> 
            </a> 
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span class="link-title">Membres</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul> 
                <li>
                    <a href="<?php echo my_url('index.php/admin/');?>Users">
                      <i class="fa fa-angle-right"></i>&nbsp; Utilisateurs</a> 
                    </li>
				<li>
                    <a href="<?php echo my_url('index.php/admin/');?>Associations">
                      <i class="fa fa-angle-right"></i>&nbsp; Associations</a> 
                    </li>
                  
                  
            </ul>
          </li>
        
          <li>
            <a href="chart.html">
              <i class="fa fa fa-bar-chart-o"></i>
              <span class="link-title">
           Statistiques
          </span> 
            </a> 
          </li>
        
          
          <li>
            <a href="<?php echo my_url('index.php/admin/');?>Admins">
              <i class="fa fa-columns"></i>
              <span class="link-title">Admins</span> 
            </a> 
          </li>
         
         
              
        </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12">
              <h1 id="bootstrap-admin-template-build-status-https-travis-ci-org-onokumus-bootstrap-admin-template-png-https-travis-ci-org-onokumus-bootstrap-admin-template-dependency-status-https-david-dm-org-onokumus-bootstrap-admin-template-svg-theme-shields-io-https-david-dm-org-onokumus-bootstrap-admin-template-devdependency-status-https-david-dm-org-onokumus-bootstrap-admin-template-dev-status-svg-theme-shields-io-https-david-dm-org-onokumus-bootstrap-admin-template-info-devdependencies-">Bienvenu Admin HoussemZ
                
              </h1>
              <blockquote>
                <p>Page d'administration</p>
              </blockquote>



<div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Editer une Annonce</h5>
                  </header>

                  <br/>
					<div>
                     
                       <?php 
                          if(isset($annonceInfo)){
                                foreach ($annonceInfo->result() as $row) {
										echo validation_errors('<div class="alert alert-error">', '</div>');
										echo form_open('form_annonce_edit');
										echo  '	<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<label for="tire">Titre: </label>
															<input type="text" name="id_annonce" id="id_annonce" value="'.$row->id_annonce.'" hidden>
															<input type="text" name="titre" value="'.$row->titre.'" class="form-control input-sm" placeholder="Titre">
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-xs-3 col-sm-3 col-md-3">
														<div class="form-group">
															<label for="date_expiration">Date Expiration: </label>
															<input type="text" name="date_expiration" value="'.$row->date_expiration.'" class="form-control input-sm" placeholder="Date Expiration">
														</div>
													</div>
													<div class="col-xs-3 col-sm-3 col-md-3">
														<div class="form-group">
															<label for="categorie">Catégorie: </label>
															<select name="categorie" id="categorie" class="form-control">
																<option value="choisir">-- Catégorie --</option>
																';
																foreach ($titre_categorie->result() as $row3) {
																	echo '<option value="'.$row3->id_categorie.'"';
																		if ($row3->id_categorie == $row->id_categorie)
																			{
																				echo 'selected';
																			}
																	echo '>'.$row3->titre.'</option>';
																	
																}
																echo '
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-3 col-sm-3 col-md-3">
														<div class="form-group">
															<label for="region">Région: </label>
															<select name="region" id="region" class="form-control" onChange="myville(this.value,'.$row->id_annonce.');">
																<option value="choisir">-- Région --</option>
																';
																foreach ($region->result() as $row3) {
																
																	echo '<option value="'.$row3->id_region.'"';
																		if ($row3->id_region == $this->uri->segment($this->uri->total_segments()))
																			echo 'selected';
																	echo '>'.$row3->nom.'</option>';

																}
																echo '
															</select>
														</div>
													</div>
													<div class="col-xs-3 col-sm-3 col-md-3">
														<div class="form-group">
															<label for="ville">Ville: </label>
															<select name="ville" id="ville" class="form-control">
																<option value="choisir">-- Ville --</option>
																';
																foreach ($ville->result() as $row2) {
																	echo '<option value="'.$row2->id_ville.'"';
																		if ($row2->id_ville == $row->id_ville)
																			{
																				echo 'selected';
																			}
																	echo '>'.$row2->nom.'</option>';
																	
																}
																echo '
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<label for="description">Description: </label>
															<textarea name="description" class="form-control" placeholder="Description">'.$row->desc.'</textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-3 col-sm-3 col-md-3">
														<div class="form-group">
															<label for="email">Email: </label>
															<input type="email" name="email" value="'.$row->mail.'" class="form-control input-sm" placeholder="Email">
														</div>
													</div>
													<div class="col-xs-3 col-sm-3 col-md-3">
														<div class="form-group">
															<label for="tel">Téléphone: </label>
															<input type="text" name="tel" value="'.$row->tel.'" class="form-control input-sm" placeholder="Téléphone">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<label for="adresse">Adresse: </label>
															<textarea name="adresse" class="form-control" placeholder="Adresse">'.$row->adresse.'</textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-3 col-sm-3 col-md-3">
														<div class="form-group">
															<label for="code_postale">Code Postale: </label>
															<input type="number" name="code_postale" value="'.$row->code_postale.'" class="form-control input-sm" placeholder="Code Postale">
														</div>
													</div>
													<div class="col-xs-3 col-sm-3 col-md-3">
														<div class="form-group">
															<label for="type_annonce">Type Annonce: </label>
															<select name="type_annonce" id="type_annonce" class="form-control">
																<option value="choisir">-- Type Annonce --</option>
																';
																foreach ($type_annonce->result() as $row4) {
																	echo '<option value="'.$row4->id_type_annonce.'"';
																		if ($row4->id_type_annonce == $row->id_type_annonce)
																			{
																				echo 'selected';
																			}
																	echo '>'.$row4->titre.'</option>';
																	
																}
																echo '
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<input type="submit" value="Valider" class="btn btn-info btn-block">
													</div>
												</div>
											</form>';
                                }
                            
                          }
                        ?>
                        
                    </div>  
                </div>
              </div>
            </div><!-- /.row -->



             
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
    
       

       
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer class="Footer bg-dark dker">
      <p>2014 &copy; etroc.tn | Page d'administration </p>
    </footer><!-- /#footer -->

    

    <!--jQuery 2.1.1 -->
    <script src=<?php echo my_url("assets/lib/jquery/jquery.min.js");?> ></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    
    <!--Bootstrap -->
    <script src=<?php echo my_url("assets/lib/bootstrap/js/bootstrap.min.js");?> ></script>
	<script src=<?php echo my_url("assets/lib/bootbox/js/bootbox.min.js");?> ></script>

    <!-- Screenfull -->
    <script src=<?php echo my_url("assets/lib/screenfull/screenfull.js");?> ></script>

    <!-- Metis core scripts -->
    <script src=<?php echo my_url("assets/js/core.js");?> ></script>
    <script src=<?php echo my_url("assets/lib/datatables/jquery.dataTables.js");?> ></script>
    <script src=<?php echo my_url("assets/lib/datatables/3/dataTables.bootstrap.js");?>></script>
    <script src=<?php echo my_url("assets/lib/jquery.tablesorter/jquery.tablesorter.min.js");?>></script>
    <script src=<?php echo my_url("assets/lib/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js");?>></script>

    <!-- Metis demo scripts -->
    <script src=<?php echo my_url("assets/js/app.min.js");?> ></script>
    <script>
      $(function() {
        Metis.MetisTable();
        Metis.metisSortable();
      });
	  
	  if (modif_annonce==1)
		bootbox.alert("Modification terminée");
    </script>
    <script src=<?php echo my_url("assets/js/style-switcher.js");?> ></script>
    


 

  </body>
</html>