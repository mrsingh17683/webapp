<!DOCTYPE html>
<html lang="en">
   <head>
        <title>Login</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </head>
   <body>
      <div style="margin-top:30px;">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-md-offset-4">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h3 class="panel-title">Please sign in</h3>
                     </div>
                     <div class="panel-body">
                        <form method="post" action="check.php">
                           <fieldset>
                              <div class="form-group">
                                 <input class="form-control" placeholder="Username" name="username" type="text" required>
                              </div>
                              <div class="form-group">
                                 <input class="form-control" placeholder="Password" name="password" type="password" required>
                              </div>
                              <input class="btn btn-lg btn-success btn-block" type="submit">
                           </fieldset>
                        </form>
                     </div>
                  </div>
                  <div style="margin-top:5px">
                    <?php if(isset($_GET['match']) && $_GET['match'] == 'false'): ?>
                    <div class="alert alert-danger">
                        <center>
                            <strong>Failure : <br> Not a valid username password combination!</strong>
                        </center>
                    </div>
                    <?php endif; ?>
                    <?php if(isset($_GET['match']) && $_GET['match'] == 'true'): ?>
                    <div class="alert alert-success">
                        <center>
                            <strong>Success : <br> Username and password are correct.</strong>
                        </center>
                    </div>
                    <?php endif; ?>
                </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>