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
    <link href="../api/bootstrap/dist/css/bootstrap_custom.css" rel="stylesheet">
    <!--<link href="../api/bootstrap_custom/bootstrap.css" rel="stylesheet"> -->

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

         <!-- <h2 class="page-header">Registration form</h2> -->

            <div class="row">
              <div class="col-md-8">
                <form class="form-horizontal">
                  <fieldset>

                    <!-- Form Name -->
                    <legend>Registration form</legend>


                    <!-- Text input first name-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Title</label>  
                      <div class="col-md-4">
                        <input id="inputTitle" name="inputTitle" type="text" placeholder="Mr., Mrs., Dr., Prof." class="form-control input-md">
                      </div>
                    </div>

                    <!-- Text input first name-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">First name</label>  
                      <div class="col-md-4">
                        <input id="inputFirstName" name="inputFirstName" type="text" placeholder="Enter your first name" class="form-control input-md">
                      </div>
                    </div>

                    <!-- Text input last name-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Last name</label>  
                      <div class="col-md-4">
                        <input id="inputLastName" name="inputLastName" type="text" placeholder="Enter your last name" class="form-control input-md">
                      </div>
                    </div>

                    <!-- Text input institution-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Institution</label>  
                      <div class="col-md-4">
                        <input id="inputInstitution" name="inputInstitution" type="text" placeholder="Enter your institution" class="form-control input-md col-xs-3">
                      </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textarea">Address</label>
                      <div class="col-md-4">                     
                        <textarea class="form-control" id="textarea" placeholder="Enter your address" name="textarea"></textarea>
                      </div>
                    </div>

                    <!-- Text input email-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Email</label>  
                      <div class="col-md-4">
                        <input id="inputEmail" name="inputEmail" type="text" placeholder="Enter your email" class="form-control input-md">
                      </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label" for="document">Agreement</label>
                            <div class="col-md-4">
                              
                              <span class="btn btn-success fileinput-button">
                                  <i class="glyphicon glyphicon-plus"></i>
                                  <span>Select file...</span>
                                  <!-- The file input field used as target for the file upload widget -->
                                  <input id="fileupload" class="fileupload" type="file" name="file" />
                              </span>
                              <!-- The container for the uploaded files -->
                            </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                        
                        <button type="submit" class="btn btn-primary btn-default">Submit form</button>
                      </div>
                    </div>

                  </fieldset>
                  </form>

              </div>
            </div>

        </div>
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

