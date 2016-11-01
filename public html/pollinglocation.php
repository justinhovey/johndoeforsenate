<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    
    <title>Polling Locations in Urgandale</title>
    
      <!-- compatibility -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
      <!-- custom css -->
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    
    <style>
        table{
            border-collapse: collapse;
            font-family:Arial,sans-serif;
        }
        table, th, td {
            border:solid 1px black;
            background-color:#FFFFFF;
        }

        th{
            height:30px;
            background-color:#F2C185;
        }

        th,td{
            padding:10px;
        }
    </style>

</head>

<body>

 <?php include '../resources/navigation.php'; ?>


    <header>
        <h1>Polling Places in Urgandale</h1>
        <h2><em>DOE</em>n't miss the vote!</h2>
    </header>
    
    <div class="container">
    <div class="below_menu_container">
    
    <div  class="col-xs-12 col-md-6 col-lg-8 clear_footer" style="padding-top:20px">
     <table class="table table-bordered">
     <thead>
        <tr> 
            <th>Building</th>
            <th>City</th>
            <th>County</th>
        </tr>
     </thead>
     <tbody>
        <tr>
            <td>Highland Elementary</td>
            <td>Newton</td>
            <td>Blackwell</td>
        </tr>
        <tr>
            <td>West Town Fire Station</td>
            <td>West Town</td>
            <td>Blackwell</td>
        </tr>
        <tr>
            <td>Saint Mary's Church</td>
            <td>Calvin</td>
            <td>Rapture</td>
        </tr>
        <tr>
            <td>Terry Police Station</td>
            <td>Terry</td>
            <td>Rapture</td>
        </tr>
        <tr>
            <td>Jane High School</td>
            <td>Jane</td>
            <td>Rapture</td>
        </tr>
        <tr>
            <td>Town Hall</td>
            <td>Charleston</td>
            <td>Woodwork</td>
        </tr>
        <tr>
            <td>Wilson Police Station</td>
            <td>Wilson</td>
            <td>Woodwork</td>
        </tr>
        <tr>
            <td>Clair Science Museum</td>
            <td>Clair</td>
            <td>Woodwork</td>
        </tr>
        <tr>
            <td>Saturn Plaza</td>
            <td>Sol</td>
            <td>Milky Way</td>
        </tr>
        <tr>
            <td>Proxima Hospital</td>
            <td>Proxima</td>
            <td>Milky Way</td>
        </tr>
        <tr>
            <td>Lions Middle School</td>
            <td>Lions</td>
            <td>Granite</td>
        </tr>
        <tr>
            <td>Rex College</td>
            <td>Rex</td>
            <td>Granite</td>
        </tr>
        <tr>
            <td>T-Rex Museum</td>
            <td>Rex</td>
            <td>Granite</td>
        </tr>
	   <tr>
            <td>North Bic Elementary</td>
            <td>Bic</td>
            <td>Granite</td>
        </tr>
     </tbody>
     
   </table>
   
   </div>
        <div class="col-xs-12 col-md-6 col-lg-4 clear_footer" style="text-align:center">
            <h2> Vote John Doe!</h2>
            <img class="img-responsive" src="img/content/Ballot.png" alt="Vote Picture"/><br>
        </div>
   </div>
   </div>
   
    <?php include '../resources/footer.php'; ?>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</body>
</html>