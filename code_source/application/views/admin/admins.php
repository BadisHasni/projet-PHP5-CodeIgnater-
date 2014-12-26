<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Admin ||</title>

    <style>
          button[type=button]{
            font-size: 12px;
            height: 29px;
          }
		
		

          
    </style>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo my_url("assets/lib/bootstrap/css/bootstrap.min.css"); ?>">

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
	  
	  function deleteAdm(i){
	  bootbox.confirm("Voulez-vous supprimer cet Administrateur ?",function(result) {
		if (result)
		{
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					bootbox.alert("L'Administrateur a été supprimé", function() {
						window.open("<?php echo my_url('index.php/admin/');?>Admins", "_self");
					});
				}
			}
			xmlhttp.open("GET","<?php echo my_url('index.php/admin/');?>delete_admin/"+i,true);
			xmlhttp.send();
		}
	})
	}
	
	function statutAdm(i){
	  bootbox.confirm("Voulez-vous changer le Statut de cet Administrateur ?",function(result) {
		if (result)
		{
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					bootbox.alert("Le Statut a été changé", function() {
						window.open("<?php echo my_url('index.php/admin/');?>Admins", "_self");
					});
				}
			}
			xmlhttp.open("GET","<?php echo my_url('index.php/admin/');?>statut_admin/"+i,true);
			xmlhttp.send();
		}
	})
	}
		
		
    </script>
    <link rel="stylesheet" href="<?php echo my_url("assets/css/style-switcher.css");?> ">
    <link rel="stylesheet/less" type="text/css" href="<?php echo my_url("assets/css/less/theme.less");?>">
    <script src=<?php echo my_url("assets/lib/less/less-1.7.3.min.js");?>></script>

    <!--Modernizr 2.8.2-->
    <script src=<?php echo my_url("assets/lib/modernizr/modernizr.min.js");?>  ></script>
  </head>

  <body bgcolor="black">
	
    <div class="bg-dark dk" id="wrap" style="margin-top:0px;">
	<div id="top" style="margin-top:0px;">

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
                <li style="margin-top:12px;"> <a href="">Administrator</a>  </li>
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
                    <h5>Liste des Administrateurs</h5>
                  </header>
					<br/>
					<div class="text-right"><a href="<?php echo my_url('index.php/admin/');?>new_admin"><button type="button" class="btn btn-info">Ajouter un Administrateur</button></a></div>
                  <br/>
                  <div id="collapse4" class="body">
                  

                    <table id="dataTable" class="table  table-condensed table-hover table-striped">
                      <thead>
                        <tr>
                          
                          <th>Admin</th>
                          <th>Téléphone</th>
                          <th>Email</th>
						  <th>Type</th>
                          <th>Statut</th>
                          <th></th>
						  <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                     
                       <?php 
                          if(isset($admins)){
                            
                                foreach ($admins->result() as $row) {
                                  
                                  echo  '<tr>
                                            
                                            <td>'.$row->login.'</td>
                                            <td>'.$row->tel.'</td>
                                            <td>'.$row->mail.'</td>
											<td>'.$row->nom.'</td>
                                            <td>';
												if ($row->statut == 1)
													echo '<div class="glyphicon glyphicon-ok"></div>';
												else echo '<div class="glyphicon glyphicon-remove"></div>';
								  echo 	'</td>
											<td>';
											
											if ($row->id_admin != 1)
											{
												echo '&nbsp;&nbsp;<button id="delete_cat" onclick="statutAdm('.$row->id_admin.')" type="button" class="btn btn-warning">Changer Statut</button>';
											}
											
											echo '</td>
                                            
											<td>'.'&nbsp;&nbsp;<a href="'.my_url("index.php/admin/").'editer_admin/'.$row->id_admin.'"><button type="button" class="btn btn-success">Editer</button></a>'.'</td>
                                            
											<td>';
											if ($row->id_admin != 1)
											{
												echo '&nbsp;&nbsp;<button id="delete_cat" onclick="deleteAdm('.$row->id_admin.')" type="button" class="btn btn-danger">Supprimer</button>'.'</td>';
											}
                                        echo '</tr>';
                                }
                            
                          }
                        ?>
                        
                      </tbody>
                    </table>
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
	  
	  //if (document.URL == "http://localhost/etroc/index.php/form_edit.html")
	  if (modif_admin==1)
		bootbox.alert("Modification terminée");
    </script>
    <script src=<?php echo my_url("assets/js/style-switcher.js");?> ></script>
    


 

  </body>
</html>