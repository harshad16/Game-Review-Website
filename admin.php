
<!DOCTYPE html>
<html>
<head>
  <!--  App Title  -->
<title>PROJECT</title>
  <!--  App Description  -->
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  <link rel="stylesheet" type="text/css" href="css/main.css"/>

  
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
  
  <!--  Header Section  -->
  <header>
    <div class="container">
      <div class="heading pull-left animated wow bounceInLeft">
        <h1>QUICK GAME</h1>
      </div>

      
      <nav class="pull-left">
        <ul class="list-unstyled">
          <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="index.php">  Home</a></li>
          <li class="animated wow bounceInLeft" data-wow-delsay="0s"><a href="index.php#about"> About</a></li>
                    <li class="animated wow bounceInLeft" data-wow-delay=".8s"><a href="css.html">upcoming games </a></li>
          <li class="animated wow bounceInLeft" data-wow-delay="1.2s"><a href="index.php#copy">Contact Us</a></li>
        </ul>
      </nav>    
    </div>

  </header>
  <!--  End Header Section  -->
 <div class="container">
      <div class="row text-center">
              <div class="col-sm-12 col-md-12 details animated wow bounceInLeft" data-wow-delay="0s">
          <a href="add.php"><button  style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600;position:relative;bottom:0;right:0;">LIST</button></a>
         <form action="admin.php" method="post">
      ADD GAME: <input type="text" name="name"  placeholder="game" required="required"/> <br><br>
       <input type="submit" alt="Submit" width="100px" height="50px" style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600;">
    </form>
        </div>

    </div>


</body>
</html>

  <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = mysql_real_escape_string($_POST['name']);
 
  
    $bool = true;
  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("project") or die("Cannot connect to database"); //Connect to database
  $query = mysql_query("Select * from movie"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_name = $row['name']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($name == $table_name) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("YOU ALREADY REGISTERED");</script>'; //Prompts the user
      Print '<script>window.location.assign("admin.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysql_query("INSERT INTO movie (name) VALUES ('$name')"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
    Print '<script>window.location.assign("admin.php");</script>'; // redirects to register.php
  }
}
?>