<!DOCTYPE html>

<html lang="en">
<head>

  <meta charset="utf-8">

  <title>Login</title>

    <!-- compatibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- custom css -->  
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

  
</head>

<body>

 <?php include '../resources/navigation.php'; ?>

  <header>
    <h1>Campaign Member Login</h1>
    <h2>Thanks for being a part of our campaign!</h2>
  </header>
  
  <div class="container clear_footer">
    <div class="col-xs-12 col-md-6">
        <form style="text-align:center; margin-top:20px">
            <div class="form-group">
                <label for="username" style="color: black; font-size: 18px;">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
            
            <div class="form-group">
                <label for="password" style="color: black; font-size: 18px;">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            
            <a href="memberspage.html" class="btn btn-primary" role="button">Log In</a>
         </form>
    </div>
  </div>
    <?php include '../resources/footer.php'; ?>

</body>
</html>