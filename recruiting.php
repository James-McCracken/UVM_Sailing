<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UVM Sailing: Recruiting</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <!-- NAVBAR
    ================================================== -->
        <nav data-spy="scroll" data-target=".navbar" data-offset-top="50">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- /.navbar-toggle -->
                            <a class="navbar-brand" href="index.html">UVM Sailing Team</a>
                        </div>
                        <!-- /.navbar-header -->
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li><a href="about.html">About</a>
                                </li>
                                <li><a href="results.html">Results</a>
                                </li>
                                <li class="active"><a href="recruiting.html">Recruiting</a>
                                </li>
                                <li><a href="roster.html">Roster</a>
                                </li>
                            </ul>
                            <!-- /.nav .navbar-nav -->
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="https://www.facebook.com/pages/UVM-Sailing-Team/255202822590?fref=ts">
                                        <img class="social-icon" src="img/facebook.png" alt="Visit us on facebook" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/UVMSailingTeam">
                                        <img class="social-icon" src="img/twitter.png" alt="Visit us on Twitter" />
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:catamountSailing@gmail.com">
                                        <img class="social-icon" src="img/email.png" alt="mail us" />
                                    </a>
                                </li>
                            </ul>
                            <!-- /.nav .navbar-nav .navbar-right -->
                        </div>
                        <!-- /.navbar-collapse .collapse -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.navbar .navbar-inverse .navbar-fixed-top -->
        </nav>

        <div class="container content-box">
            <div class="page-header jumbotron">
                <h1>Recruiting <small> If interested, fill out the form below.</h1>
            </div>
            <br>
            <div class="col-xs-6 col-md-6">
                <form class="form-horizontal" role="form" action="send_mail.php" enctype="text/plain" method="get">
                    <div class="form-group">
                        <label for="Email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="Email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="FirstName" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                        <div id="LastName" class="col-sm-10">
                            <input type="text" class="form-control" id="LastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                        <label class="radio-inline col-sm-2">
                            <input type="radio" name="gender" id="male" value="male" checked>Male
                        </label>
                        <label class="radio-inline col-sm-2">
                            <input type="radio" name="gender" id="female" value="female">Female
                        </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="City" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">State</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="State" class="form-control">
                        </div>

                        <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Post Code" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">School Year</label>
                        <div class="col-sm-4">
                            <select class="form-control">
                                <option>H.S. Freshman</option>
                                <option>H.S. Sophomore</option>
                                <option>H.S. Junior</option>
                                <option>H.S. Senior</option>
                                <option>UVM Student</option>
                                <option>Transfer Student</option>
                            </select>
                        </div>
                        <label class="col-sm-2 control-label">Sailing Resume</label>
                        <div class="col-sm-4">
                        <input type="file" id="exampleInputFile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Comments</label>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                    <br>
                    <br>
                </form>
            </div>

        </div>
        <!-- /.container -->
</body>

</html>
