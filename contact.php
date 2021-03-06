<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="micombax">

    <title>VOIDrobotic - la robotique Française</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand" href="index.html">VOIDrobotic</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.html">A propos</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Proto <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="proto.html">R.E.M. 1</a></li>
                        <li><a href="rem2.html">R.E.M. 2</a></li>
                        <li class="divider"></li>
                        <li><a href="#">a venir</a></li>
                      </ul>
                    </li>
                    <li><a href="blog_home.html">Blog</a>
                    </li>
                    <li><a href="newsletter.html">Newsletter</a>
                    </li>
                    <li class="active"><a href="contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">A venir</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">------</a>
                    </li>
                    <li><a href="">EN</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contact <small>Restons en contact !</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Vous avez envie de partager notre aventure ou nous poser des questions? Laissez nous vos coordonnées:</h3>
          <?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

          ?>

            <form role="form" method="POST" action="contact-form-submission.php">
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="input1">Nom</label>
                    <input type="text" name="contact_name" class="form-control" id="input1">
                  </div>
                  <div class="form-group col-lg-4">
                    <label for="input2">Addresse E-mail</label>
                    <input type="email" name="contact_email" class="form-control" id="input2">
                  </div>
                  <div class="form-group col-lg-4">
                    <label for="input3">Numéro de téléphone</label>
                    <input type="phone" name="contact_phone" class="form-control" id="input3">
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group col-lg-12">
                    <label for="input4">Message</label>
                    <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
                  </div>
                  <div class="form-group col-lg-12">
                    <input type="hidden" name="save" value="contact">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                  </div>
              </div>
            </form>
        </div>

        <!-- <div class="col-sm-4">
          <h3>VOIDrobotic</h3>
          <h4>La robotique DIY</h4>
          <p>
            14 rue des lylas<br>
            Ville, 00000<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 06.00.00.00.00</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:contact@voidrobotic.com">contact@voidrobotic.com</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">Horaire</abbr>: Lundi - Vendredi : 9:00 à 18:00</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div> -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
            <div class="row">
                <div class="col-lg-10">
                    <p>Copyright &copy; VOIDrobotic 2014</p>
                </div>
                <div class="col-lg-2">
                    <p>Merci à <a href="http://www.startbootstrap.com">Start Bootstrap</a></p>
                </div>
            </div>
        </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
