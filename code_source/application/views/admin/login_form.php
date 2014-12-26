<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo my_url("assets/lib/bootstrap/css/bootstrap.min.css");?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo my_url("assets/lib/font-awesome/css/font-awesome.min.css");?>">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo my_url("assets/css/main.min.css");?>">
    <link rel="stylesheet" href="<?php echo my_url("assets/lib/animate.css/animate.min.css");?>">
  </head>
  <body class="login">
    <div class="form-signin">
      <div class="text-center">
        <img src="<?php echo img_url("test");?>" alt="etroc.tn Logo">
      </div>
      <hr>
      
	  <div class="tab-content">
        <div id="login" class="tab-pane active">
          <?php 
			echo validation_errors('<div class="alert alert-error">', '</div>');
			echo form_open('__admin__');
		  ?>
            <p class="text-muted text-center">
              Entrer votre Login et Mot de passe 
            </p>
            <input name="login" type="text" placeholder="Login" class="form-control top">
            <input name="pwd" type="password" placeholder="Mot de Passe" class="form-control bottom">
            <div class="checkbox">
              <label>
                <input type="checkbox">Se souvenir de moi
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
          </form>
        </div>
        
		
      <hr>
      <div class="text-center">
        <ul class="list-inline">
          <li> <a class="text-muted" href="#login" data-toggle="tab">Login</a>  </li>
          
        </ul>
      </div>
    </div>
	
	
	 <!--jQuery 2.1.1 -->
    <script src=<?php echo my_url("assets/lib/jquery/jquery.min.js");?> ></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    
    <!--Bootstrap -->
    <script src=<?php echo my_url("assets/lib/bootstrap/js/bootstrap.min.js");?> ></script>
	
    <script type="text/javascript">
      (function($) {
        $(document).ready(function() {
          $('.list-inline li > a').click(function() {
            var activeForm = $(this).attr('href') + ' > form';
            //console.log(activeForm);
            $(activeForm).addClass('animated fadeIn');
            //set timer to 1 seconds, after that, unload the animate animation
            setTimeout(function() {
              $(activeForm).removeClass('animated fadeIn');
            }, 1000);
          });
        });
      })(jQuery);
    </script>
  </body>
</html>
