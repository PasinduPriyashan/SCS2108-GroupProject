<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Samikta Constructions</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/homestyle.css">
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 id="samikta">Samikta Constructions </h1>
          <h1 id="company"><small>(Pvt) Ltd</small></h1>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="">Our Company</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="<?php echo site_url('contactus')?> ">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Supplier Registration</a></li>
            <li><a href="<?php echo site_url('login/user_login')?> ">Login</a></li>
            
          </ul>
           
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
      
      
  <div class="container" id="carousel">
      <div class=row>
        <div class="col-md-12">
          <div id="my-slider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#my-slider" data-slide-to="0" class="active"></li>
            <li data-target="#my-slider" data-slide-to="1"></li>
            <li data-target="#my-slider" data-slide-to="2"></li>
          </ol>/
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php echo base_url();?>assets/img/image1.jpg"/>
              </div>
              <div class="item">
                <img src="<?php echo base_url();?>assets/img/image2.jpg"/>
              </div>           
             
              <div class="item">
                <img src="<?php echo base_url();?>assets/img/imag3.jpg"/>
              </div>
              </div>
              <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chervon-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="left carousel-control" href="#my-slider" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chervon-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
          </div>
          
        </div>
        
      </div>
      
    </div>
    


   
    <footer id="footer">
      <p>Copyright &copy</p>
      
    </footer>
    <!--ckeditor-->
    <script>
      CKEDITOR.replace( 'pagebody' );
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    
  </body>
</html>
