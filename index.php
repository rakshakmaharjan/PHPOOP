<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container d-flex justify-content-center">

    <div class="col-lg-4">
        <h2 class="text-center">SignUp Form</h2>
        <form action="includes/signup.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="repwd" placeholder="Enter Password Again">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>

    <div class="col-lg-4">
        <h2 class="text-center">Login Form</h2>
        <form action="includes/login.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

</body>
</html>