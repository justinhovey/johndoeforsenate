<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    
    <title>Members Page</title>

    <!-- compatibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- custom css -->  
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <style>
        section{
            width:80%;
            margin-top:20px;
        }
        section ul{
            margin-top:20px;
            text-align: center;
        }
        section li{
            list-style: none;
            padding:15px;
            display: block;
        }
        section a {
            font-family:Arial, sans-serif;
            text-decoration: none;
            color:#FFFFFF;
            background-color: #021F59;
            padding:10px;
            border: outset 3px #F2C185;
        }
    </style>
    
</head>
 
<body> 

 <?php include '../resources/navigation.php'; ?>

    <header>
        <h1>Members Welcome!</h1><br>
        <h2>Thank you for your support!</h2> 
    </header>

    <div class="vote">
        <h5> Vote John Doe!</h5>
        <img src ="img/content/Ballot.png" alt="Vote Picture"/>
        <br><a class= "pollingLocation" href="pollinglocation.html">Click here for polling locations!</a>
    </div>

    <section class ="main">
        <p>
        <h4>Online Video Stream</h4>
        John will be having two more online video streams before the election for members only! These streams will be on Thursday, October 13 at 6:00PM and Tuesday,          October 25 at 9:00PM. In these streams John will answer questions that have been asked on the campaign trail or have been received by our office. These               questions can and will be about anything, not just politics. Thank you for your support!
        </p>
    </section>
    <?php include '../resources/footer.php'; ?>
</body>
</html>