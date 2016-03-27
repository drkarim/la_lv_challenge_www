<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>LA Wall benchmark</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../api/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../api/bootstrap/dist/css/bootstrap_custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../api/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../api/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container">
            <div id="top_menu"></div>
          </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <div id="side_menu"></div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <div id="main_content"></div>

          <h2 class="page-header">Thank you!</h2>
          Your registration request was received successfully. We will write back and get in touch with you very shortly. <br /><br />Thank you for your interest.
         </div>  <!-- End main_content -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../api/jquery/jquery.js"></script>
    <script src="../api/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../api/bootstrap/docs/assets/js/docs.min.js"></script>
    <script> 

    /*
    *   Load Top-menu 
    */
      $(function(){
        $("#top_menu").load("../top_menu.html"); 
      });


    /*
    *   Load Side-menu
    */
     $(function(){
        $("#side_menu").load("sidemenu.html"); 
      });

     

      
    </script> 
  </body>
</html>
