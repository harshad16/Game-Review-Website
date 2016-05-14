<!doctype html>

<html>
<head>
  <!--  App Title  -->
  <title>Project</title>
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
              <div class="col-sm-12 col-md-12 details animated wow bounceInLeft" data-wow-delay="0s" style="border-radius:25px;">
          <h2 align="center">My list</h2>
    
        <table border="1px" width="100%">
      <tr>
        <th>Id</th>
        <th>name</th>
        <th>rating</th>
        <th>voter</th>
        <th>percentage</th>
        <th>Edit</th>
        <th>Delete</th>
      
      </tr>
      <?php 
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie"); // SQL Query
        while($row = mysql_fetch_array($query))
        {
          Print "<tr>";
            Print '<td align="center">'. $row['id'] . "</td>";
            Print '<td align="center">'. $row['name'] . "</td>";
            Print '<td align="center">'. $row['rating']. "</td>";
             Print '<td align="center">'. $row['voter']. "</td>";
            Print '<td align="center">'. $row['percentage']."</td>";
            Print '<td align="center"><a href="edit.php?id='. $row['id'] .'">edit</a> </td>';
            Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
          Print "</tr>";
        }
      ?>
    </table>
    <script>
      function myFunction(id)
      {
      var r=confirm("Are you sure you want to delete this record?");
      if (r==true)
        {
          window.location.assign("delete.php?id=" + id);
        }
      }
    </script>
        </div>
<a href="index.php"> <button  style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600;position:fixed;bottom:0px;right:0px;">LOG-out</button></a
>    </div>
  </body>
</html>
