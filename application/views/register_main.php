<!doctype html>
<html lang="en">
  <head>
    <title>Register area</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asserts/css/bootstrap.min.css');?>" >
  </head>
  <body>
 
   <div class="container" style="margin-top:80px;">


<div class="row">
  <div class="col-md-6">
    <div class="jumbotron">
            <h1 class="display-3" align="center">Customer</h1>
            <br>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg btn-block" href="<?php echo site_url('login/register_red')?>" role="button">Customer Registration</a>
            </p>
          </div>

  </div>
  <div class="col-md-6">
     <div class="jumbotron bg-success">
            <h1 class="display-3" align="center">Supplier </h1>
            <br>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg btn-block" href="<?php echo site_url('login/register')?>" role="button">Supplier Registration</a>
            </p>
          </div>


  </div>
</div>

  
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('asserts/js/jquery.min.js');?>" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('asserts/js/bootstrap.min.js');?>" ></script>
  </body>
</html>