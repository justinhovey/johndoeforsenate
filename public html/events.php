<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Campaign Events</title>

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
    <h1>Events</h1>
    <h2>These are the upcoming events John Doe will be attending</h2>
  </header>

  <div class="vote">
    <h5> Vote John Doe!</h5>
    <img src ="img/content/Ballot.png" alt="Vote Picture"/>
    <br><a class="pollingLocation" href="pollinglocation.html">Click here for polling locations!</a>
  </div>

  <section class= "main">
  <ul>


      <li>
        Highland Elementary rally on June 10th. 
        <ul>
        <li>5:30pm</li>
        </ul>
      </li>

      <li>
       	Televised Debate on July 16th.
        <ul>
        <li>7:00pm</li>
        </ul>
      </li>

      <li>
       	Tour of West Town followed by rally on July 30th.
        <ul>
        <li>1:00pm</li>
        </ul>
      </li>

      <li>
       	Speech given at the Town Hall of Northfield on August 15th.
        <ul>
        <li>12:00pm</li>
        </ul>
      </li>

      <li>
       	Speech given at the Town Hall of Westward on September 1st.
        <ul>
        <li>12:00pm</li>
        </ul>
      </li>

      
     <li>
       	Hosting Q and A at Simpson College on September 21st.
        <ul>
        <li>12:00pm</li>
        </ul>
      </li>
      </ul>
   </section>

    <?php include '../resources/footer.php'; ?>

</body>
</html>