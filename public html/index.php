<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    
    <title>John Doe for Senate</title>

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
        <h1>John Doe: Independent For Urgandale Senate</h1><br>
        <h2> A handsome no-nonsense family man!</h2> 
    </header>

    <div class="vote">
        <h5> Vote John Doe!</h5>
        <img src ="img/content/Ballot.png" alt="Vote Picture"/>
        <br><a class= "pollingLocation" href="pollinglocation.html">Click here for polling locations!</a>
    </div>

    <section>
        <img id="john" style="border-color:#F2C185;" src ="img/content/John_Doe_Picture2.jpg" alt="John Doe Picture" width = 350 height = 200>
        <ul>
        <li><a href="johnabout.html">Learn more about John here!</a></li>
        <li><a href="issues.html">Learn what John is passionate about!</a></li>
        <li><a href="events.html">Learn where you can see John!</a></li>
        </ul>
    </section>
    <?php include '../resources/footer.php'; ?>
</body>
</html>