<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Metis</title>

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
              <a href="index.html" class="navbar-brand">
                <img src="assets/img/logo.png" alt="">
              </a> 
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
                <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
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
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="base_url()assets/img/user.gif">
              <span class="label label-danger user-label">16</span> 
            </a> 
            <div class="media-body">
                <ul class="list-unstyled user-info">
                <li> <a href="">Administrator</a>  </li>
                <li>Dernier Acces :
                  <br>
                  <small>
                    <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> 
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #menu -->
        <ul id="menu" class="bg-blue dker">
          <li class="nav-header">Menu</li>
          <li class="nav-divider"></li>
          <li class="">
            <a href="dashboard.html">
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
              <?php 
                if (isset($type_annonce)){
                  foreach ($type_annonce->result() as $row){ 
                    echo '<li>
                    <a href="troc">
                      <i class="fa fa-angle-right"></i>&nbsp; '. $row->titre.'</a> 
                    </li>';
                  
                  }
                }
              ?>
            </ul>
          </li>
         
         
          <li>
            <a href="categorie">
              <i class="fa fa-file"></i>
              <span class="link-title">Catégories</span> 
            </a> 
          </li>
          <li>
            <a href="typography.html">
              <i class="fa fa-font"></i>
              <span class="link-title">Utilisateurs</span>  
            </a> 
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
            <a href="grid.html">
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