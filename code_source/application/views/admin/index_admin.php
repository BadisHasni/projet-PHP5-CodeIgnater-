<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Admin ||</title>

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
    </script>
    <link rel="stylesheet" href="<?php echo my_url("assets/css/style-switcher.css");?> ">
    <link rel="stylesheet/less" type="text/css" href="<?php echo my_url("assets/css/less/theme.less");?>">
    <script src=<?php echo my_url("assets/lib/less/less-1.7.3.min.js");?>></script>

    <!--Modernizr 2.8.2-->
    <script src=<?php echo my_url("assets/lib/modernizr/modernizr.min.js");?>  ></script>
  </head>
  <body class="  ">
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
             
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> 
            </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> 
            </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> 
            </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> 
            </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer class="Footer bg-dark dker">
      <p>2014 &copy; etroc.tn | Page d'administration </p>
    </footer><!-- /#footer -->

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->

    <!--jQuery 2.1.1 -->
    <script src=<?php echo my_url("assets/lib/jquery/jquery.min.js");?> ></script>

    <!--Bootstrap -->
    <script src=<?php echo my_url("assets/lib/bootstrap/js/bootstrap.min.js");?> ></script>

    <!-- Screenfull -->
    <script src=<?php echo my_url("assets/lib/screenfull/screenfull.js");?> ></script>

    <!-- Metis core scripts -->
    <script src=<?php echo my_url("assets/js/core.js");?> ></script>

    <!-- Metis demo scripts -->
    <script src=<?php echo my_url("assets/js/app.min.js");?> ></script>
    <script src=<?php echo my_url("assets/js/style-switcher.js");?> ></script>
  </body>
</html>