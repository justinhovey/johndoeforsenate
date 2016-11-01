<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Sign Up</title>
  
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
      <h1>Want us to send you a daily campaign update?</h1>
      <h2> Sign up Below!</h2>
    </header>
    

    <div class="container clear_footer">
          <div class="col-xs-12 col-md-6">
               <form style="text-align:center; margin-top:20px">
                        <div class="form-group">
                          <label for="username" style="color: black; font-size: 18px;">Username:</label>
                          <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                          <label for="email" style="color: black; font-size: 18px;">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="phone" style="color: black; font-size: 18px;">Phone:</label>
                          <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="form-group">
                          <label for="password" style="color: black; font-size: 18px;">Password:</label>
                          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="alert alert-warning" role="alert"> Your password must contain at least one of the following: a capital and lowercase letter, a number, the * symbol, another symbol, and at least 5 greek letters</div>
                        <div class="form-group">
                          <label for="retypePassword" style="color: black; font-size: 18px;">Retype Password:</label>
                          <input type="password" class="form-control" id="retypePassword" placeholder="Retype Password" name="retypePassword">
                        </div>
                        <a href="login.html" class="btn btn-primary" role="button">Submit</a>
               </form>
          </div>
    </div>

  
    <?php include '../resources/footer.php'; ?>
  
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>