<?php 
  session_start();
?>
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

    <script src="../api/jquery/jquery.js"></script>

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

    <!-- JQuery-validate script --> 
    <script type="text/javascript" src="../api/jquery-validation/dist/jquery.validate.js"></script>

    <!-- My own script -->
    <script type="text/javascript" src="register.js"></script>

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
              <div class="col-md-10" id="form_content">
                <form id="registration" name="registration" class="form-horizontal" method="post">
                  <fieldset>

                    <!-- Form Name -->
                    <legend>Registration form</legend>

                    <p>Please fill this form to let us know that you wish to participate. If you face any issues filling the form, you may also email your details to <a href="emailto:rashed.karim@gmail.com">rashed.karim@kcl.ac.uk</a></p>

                    <!-- Text input first name-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Title</label>  
                      <div class="col-md-6">
                        <input id="title" name="title" type="text" placeholder="Mr., Miss, Mrs., Dr., Prof." class="form-control input-md">
                      </div>
                    </div>

                    <!-- Text input first name-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">First name</label>  
                      <div class="col-md-6">
                        <input id="firstname" name="firstname" type="text" placeholder="Enter your first name" class="form-control input-md">
                      </div>
                    </div>

                    <!-- Text input last name-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Last name</label>  
                      <div class="col-md-6">
                        <input id="lastname" name="lastname" type="text" placeholder="Enter your last name" class="form-control input-md">
                      </div>
                    </div>

                    <!-- Text input institution-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Institution</label>  
                      <div class="col-md-6">
                        <input id="institution" name="institution" type="text" placeholder="Enter your institution" class="form-control input-md col-xs-3">
                      </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textarea">Address</label>
                      <div class="col-md-6">                     
                        <textarea class="form-control" id="address" placeholder="Enter your address" name="address"></textarea>
                      </div>
                    </div>

                    <!-- Text input email-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Email</label>  
                      <div class="col-md-6">
                        <input id="email" name="email" type="text" placeholder="Enter your email" class="form-control input-md">
                      </div>
                    </div>
<!--
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="document">Agreement</label>
                            <div class="col-md-6">
                              
                              <span class="btn btn-success fileinput-button">
                                  <i class="glyphicon glyphicon-plus"></i>
                                  <span>Select file...</span>
                                  
                                  <input id="agreement" class="fileupload" type="file" name="agreement" />
                              </span>
                              
                            </div>
                    </div>
-->                    
                    <hr />
                    <div class="form-group">
                      <div class="col-md-4"></div>
                      <!-- Taken from example in https://www.phpcaptcha.org/documentation/quickstart-guide/  -->
                      <div class="col-md-6"><img id="captcha" src="../api/securimage/securimage_show.php?namespace=captcha" alt="CAPTCHA Image" />
                        <a style="border: 0" href="#" title="Refresh Image" onclick="document.getElementById('captcha').src = '../api/securimage/securimage_show.php?' + Math.random(); this.blur(); return false"><img height="32" width="32" src="../api/securimage/images/refresh.png" alt="Refresh Image" onclick="this.blur()" style="border: 0px; vertical-align: bottom">
                        
                      </a>
                      </div>
                    </div>
                    <div id="captchaInputDIV" class="form-group">
                       <label class="col-md-4 control-label" for="document">Are you a human?</label>
                      <div class="col-md-4">
                        <input id="captchaInput" name="captchaInput" type="text" placeholder="Type the text above" class="form-control input-md">

                      </div>

                    </div>

                    <div class="form-group">
                      <div class="col-md-4"></div>
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-default">Submit form</button>
                      </div>
                      <div class="col-md-4" id="form_process_error" class="">
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

    $.validator.setDefaults( {
      
      submitHandler: function () {
        registration_handler();
      }
    
    });
     
     $( document ).ready( function () {

       /*
       *  JQuery form validation 
       */
       $("#registration").validate( {

          rules: {
            title: "required",
            firstname: "required",
            lastname: "required",
            institution: "required", 
            address: "required", 
            email: { "required" : true , "email" : true }, 
            captchaInput: "required", 
            /*agreement: {
              required: true, 
              accept: "application/pdf"
            },*/

            messages : {
              firstname: "Please enter your first name", 
              lastname: "Please enter your last name", 
              institution: "Please enter your institution", 
              email: "Please enter a valid email address",
              address: "Please enter an address", 
              captchaInput: "Please enter the text you see in the shown image"
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
            // Add the `help-block` class to the error element
            error.addClass( "help-block" );
              if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
              } else {
                error.insertAfter( element );
              }
            },
            highlight: function ( element, errorClass, validClass ) {
              $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
              $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
            },



      }});
  

    });     // document ready 


      
    </script> 
  </body>
</html>

