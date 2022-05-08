<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="save.php" method="post">
        <h2 class="text-center">Register</h2>       
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Fullname" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
    </form>
    <p class="text-center"><a href="index.php">Log in</a></p>
	
	<?php if(isset($_GET['register']) && $_GET['register'] == 'false'): ?>
		<div class="alert alert-danger"> 
			<center>
				<strong>Error : <br> User unable to register !</strong>
			</center>
		</div>
	<?php endif; ?>
	
	<?php if(isset($_GET['exist']) && $_GET['exist'] == 'true'): ?>
		<div class="alert alert-warning"> 
			<center>
				<strong>Opps : <br> Username is already exist !</strong>
			</center>
		</div>
	<?php endif; ?>
	
	<?php if(isset($_GET['register']) && $_GET['register'] == 'true'): ?>
		<div class="alert alert-success"> 
			<center>
				<strong>Success : <br> User is registered. <br> You can log in !</strong>
			</center>
		</div>
	<?php endif; ?>
	
</div>
</body>
</html>