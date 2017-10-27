
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

    <title>View messages</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assest/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assest/css/style.css">
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Samikta Constructions</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#pages">Pages</a></li>
            <li><a href="#posts">Posts</a></li>
            <li class="active"><a href="#suppliers">Suppliers</a></li>
            <li><a href="#">View messages</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome,Kavinda</a></li>
            <li><a href="#login">Logout</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Suppliers <small>Manage suppliers</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage" href="#">Add Page</a></li>
                <li><a href="#">Add Post</a></li>


            </ul>
          </div>
          </div>
        </div>
      </div>

    </header>
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Suppliers</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active main-color-bg">
                Dashboard
              </a>
              <a href="#pages" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages<span class="badge">12</span></a>
              <a href="#posts" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts<span class="badge">56</span></a>
              <a href="#suppliers" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Suppliers<span class="badge">101</span></a>
              <a href="#suppliers" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Messages<span class="badge">54</span></a>

          </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Suppliers</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                   <div class="col-md-12">
                      <input class="form-control" type="text" placeholder="Filter Suppliers...">
                    </div>
                </div>
                <table class="table table-striped table-hover">
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Message</th>

                    <th></th>
                  </tr>
                  <?php
                    if ($fetch_data->num_rows() > 0) {
                      foreach ($fetch_data->result() as $row) {
                        ?>
                        <tr style="">
                          <td><?php echo $row->Id ?></td>
                          <td><?php echo $row->Firstname ?></td>
                          <td><?php echo $row->Lastname ?></td>
                          <td><?php echo $row->Email ?></td>
                          <td><?php echo $row->Phone ?></td>
                          <td><?php echo $row->Message ?></td>



                        </tr>
                        <?php
                      }
                    }else {
                      ?>
                      <tr>
                        <td colspan="3"> No data found </td>
                      </tr>
                      <?php
                    }
                   ?>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Modals-->
    <!--AddPage-->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Page</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Page Title</label>
                <input type="text" class="form-control" placeholder="Page Title">
              </div>
              <div class="form-group">
              <label>Page Body</label>
              <textarea name="pagebody" class="form-control" placeholder="Page Body"></textarea>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Published
                </label>
              </div>

              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
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
    <script src="<?php echo base_url() ?>assest/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assest/js/bootstrap.min.js"></script>

  </body>
</html>
