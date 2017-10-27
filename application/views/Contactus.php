
<html>
    <head>
        <title>Contact Form </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assest/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assest/css/style.css">
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


          </div><!--/.nav-collapse -->
        </div>
      </nav>

        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                  <h1>Contact Us</h1>
                  <?php
                    if($this->session->flashdata('msg')){
                      echo "<h3>".$this->session->flashdata('msg')."</h3>";
                    }
                    elseif ($this->session->flashdata('msg1')) {
                      echo "<h3>".$this->session->flashdata('msg2')."</h3>";
                    }
                   ?>

                  <?php echo validation_errors() ?>
                  <?php echo form_open('Contactus/inputContactusData'); ?>

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                  <p>* These fields are required.</p>
                                </div>
                            </div>
                        </div>

                    <?php echo form_close(); ?>

                </div><!-- /.8 -->
                <div class="col-lg-6">
                  <h1>Contact info</h1>
                  <div class="panel panel-info">
                    <div class="panel-body" style="background:#d9d9d9;">
                      <p>We have talented, friendly marketing team to
                        serve your needs efficiently.
                        Please contact our marketing officers for more details.
                      </p>
                      <hr>
                      <p>Address:<br>
                        <b> SAMIKTA CONSTRUCTION </b> <br>
                          407/8, KUMARATHUNGA MAWATHA,<br> MATARA</p>
                        <hr>

                        <table>
                          <tr>
                            <td>Hot Line</td>
                            <td>:</td>
                            <td>+94472241548</td>

                          </tr>
                          <tr>
                            <td>Telephone</td>
                            <td>:</td>
                            <td>+94472252548</td>

                          </tr>
                          <tr>
                            <td>Fax</td>
                            <td>:</td>
                            <td>+94472271548</td>

                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>samikta@gmail.com</td>

                          </tr>
                        </table>

                    </div>

                  </div>

                </div>

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <div class="container">
          <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7936.672188817476!2d80.5443459901885!3d5.948339744382496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13f2bcdd8cdf7%3A0x799072b2b4a2c2f9!2sMain+St%2C+Matara!5e0!3m2!1sen!2slk!4v1509020756570"
            width="100%" height="300" frameborder="0" style="border:0;margin-top:30px" allowfullscreen></iframe>

            </div>



          </div>

        </div>
        <footer id="footer">
          <p>Copyright &copy</p>

        </footer>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
</html>
