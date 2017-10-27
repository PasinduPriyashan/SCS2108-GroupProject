<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asserts/css/bootstrap.min.css');?>" >
  </head>
  <body>
 
   <div class="container" style="margin-top:80px;">
    <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-body">

        <?php  
        if(validation_errors()){
        ?>

        

        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <strong><?php echo validation_errors();?></strong> 
        </div>

        <?php
        }
        echo form_open('login','class="myclass"');

        ?>


          <form action="<?php echo site_url('login') ?>" method="post">
            <div class="form-group">
              <?php 
                echo form_label('Username','username');
                echo form_input('username','','class="form-control" id="username"  placeholder="Enter Username"');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Password','password');
                echo form_password('password','','class="form-control" id="password"  placeholder="Password"');
              ?>
            </div>
            
            <?php echo form_submit('login','Login','class="btn btn-primary"') ?>
            <a href="<?php echo site_url('login/register')?> " class="btn btn-link">Sign Up</a>
            <?php echo form_close() ?>
          </form>


        </div>
      </div>
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