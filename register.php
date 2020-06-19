<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Hall Booking System</title>
     <!-- Required meta tags always come first -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    
     <link href="css/styles.css" rel="stylesheet">
 
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm bg-primary fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand " href="#"><img src="img/crest.png" height="41" width="41">Online Hall Booking System</a>
            <div class="collapse navbar-collapse  justify-content-end" id="Navbar">
                <ul class="navbar-nav">
                         <li class="nav-item "><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="./register.php"><span class="fa fa-id-card-o"></span> Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="./login.php"><span class="fa fa-sign-in"></span> Login</a></li>
                        <li class="nav-item "><a class="nav-link" href="./admin.php"><span class="fa fa-user-circle"></span> Admin</a></li>
                        <li class="nav-item "><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Guide</a></li>
                   
                </ul>            
           </div>    
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
        <div class="row row-header">
                <div class="col-12 align-self-center">
                      <h1>If you do not have an account, please register</h1>
                   
                </div>
                
            </div>
        </div>
    </header>

    <div class="container"> 
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">Register</li>
            </ol>
        </div>

        <div class="row row-content">  

            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-primary text-white">Register</h3>
                    <div class="card-body">
                        <form method="post" action="register.php">
                        <?php include('errors.php'); ?>
                            <div class="form-group row">
                                <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="firstname" name="firstname" required="requried" placeholder="First Name" value = "<?php echo $firstname;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="lastname" name="lastname" required="requried" placeholder="Last Name" value = "<?php echo $lastname;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailid" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" id="email" name="email" required="requried" placeholder="Email" value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                               
                                <div class="col-md-10">
                                    <input type="tel" class="form-control" id="telnum" name="telnum" required="requried" placeholder="Tel. number" value = "<?php echo $telnum;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="approve" id="approve" >
                                        <label class="form-check-label" for="approve">
                                            <strong>May we contact you?</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 offset-md-1">
                                    <select class="form-control">
                                        <option>Tel.</option>
                                        <option>Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstname" class="col-md-2 col-form-label">Status</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="status">
                                        <option>Student</option>
                                        <option>Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstname" class="col-md-2 col-form-label">User Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="username" name="username" required="requried" placeholder="User Name" value="<?php echo $username; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstname" class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="password_1" name="password_1" required="requried" placeholder="Password" >
                                   
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="firstname" class="col-md-2 col-form-label">Confirm Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="password_2" name="password_2" required="requried" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-md-2 col-md-10">
                                <input type="submit" name="register" value="Register" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
        
        
                    </div>
                </div>
            </div>

        
        </div>
    </div>
    
    
    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Faculty of Engineering</h5>
                    <address>
		              University of Peradeniya<br>
		              
                      <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                      <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                      <i class="fa fa-envelope fa-lg"></i>: 
                      <a href="mailto:confusion@food.net">eng.ac.pdn@lk</a>

		           </address>
                </div>
                
            </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Online Hall Booking System</p>
                </div>
           </div>
        </div>
    </footer>
    
<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>