<html>
	<head>
	<title>PROJECT</title>  <!--  App Description  -->
  
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  <link rel="stylesheet" type="text/css" href="css/main.css"/>


</script> 
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/parallax.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <style type="text/css">


.hero{
  display: block;
  position: relative;
  width: 100%;
  height: 560px;
  background: url('img/fif.jpg') no-repeat fixed center center;
  background-size: cover;
}
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#bun").click(function(){
        $("#panel").slideDown("slow");
    });
     
});
</script>
<script> 
$(document).ready(function(){
    $("#bun1").click(function(){
        $("#panel1").slideDown("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#bun2").click(function(){
        $("#panel2").slideDown("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#bun3").click(function(){
        $("#panel3").slideDown("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#bun4").click(function(){
        $("#panel4").slideDown("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#bun5").click(function(){
        $("#panel5").slideDown("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#bun6").click(function(){
        $("#panel6").slideDown("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#bun7").click(function(){
        $("#panel7").slideDown("slow");
    });
});
</script>
		
	</head>



	<?php
	session_start(); //starts the session
	if($_SESSION['visit']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['visit']; //assigns user value
	?>
	<body>
	
<div id="block">

  <!--  Header Section  -->
  <header>
    <div class="container">
      <div class="heading pull-left animated wow bounceInLeft">
   <h1 class="text-uppercase  animated wow wobble" data-wow-delay="1s" style="font-size:24;font-family:Copperplate Gothic Light;color:black">QUICK GAME</h1> 
      </div>

      
      <nav class="pull-left">
        <ul class="list-unstyled">

          <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="home.php">  Home</a></li>
        
          <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="#about"> About</a></li>
         

          <li class="animated wow bounceInLeft" data-wow-delay=".8s"><a href="css.html">Upcoming games</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay="1.2s"><a href="#copy">Contact Us</a></li>
        </ul>
      </nav>

      

      
    </div>

  </header>
  <!--  End Header Section  -->


  <!--  Hero Section  -->
  <section class="hero" id="hero" >
    <div class="container">
      <div class="caption">
      	
	<div id="back"><p style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600">Welcome <?php Print "$user"?>!</p></div>
  <!--Displays user's name-->
		    <br/><br/>
        <h1 class="text-uppercase  animated wow bounceInLeft" >WELCOME TO QUICK GAME</h1><br>
        <h1 class="text-uppercase  animated wow wobble" data-wow-delay="1s">PLEASE DO REVIEW!!!</h1><br>
        <a href="logout.php"><button  style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600;position:relative;bottom:0;right:0;">LOG-out</button></a>

      </div>      
    </div>
  </section>
  <!--  End Hero Section  -->





  <!--  About Section  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center animated wow bounceInLeft">
          <div class="pic">
            <h1>CRYSIS 3</h1>
            <div class="imb"><a href="https://www.youtube.com/embed/2F3_JMYNB6A"><img src="img/cr.jpeg"></a></div>
          
          <form action="home.php" method="post">
<input type="checkbox" name="id" value="1" required="required">
<input type="number" name="rating" min="0" max="5" step="1" required="required">
<input type="submit" alt="Submit" width="100px" height="50px">
</form>
   <?php 
        $id=1;
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie Where id='$id'"); // SQL Query
        while($row = mysql_fetch_array($query))
        {  Print $row['percentage'];  
          Print '<span>&#9829</span>';
              if ($row['percentage']==0) 
          {Print '<div id="rating_0"><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span></div>';}
elseif ($row['percentage']==1) 
  {Print '<div id="rating_1"><span>&#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==2)
  {Print '<div id="rating_2"><span>&#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==3)
  {Print '<div id="rating_3"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==4)
  {Print '<div id="rating_4"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==5)
  {Print '<div id="rating_5"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span> </div>';}
        }
      ?>
<!--<a href="start.html"><button  style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600;position:relative;bottom:0;right:0;">BUY</button></a>
--></div>
       </div>
        <div class="col-md-6 animated wow bounceInLeft">
          <div class="features_list">
            <h1 class="text-uppercase">About</h1>
            <div class="story">
  <h1>Review</h1>
<div id="flip">
Crysis 3 is a first-person shooter video game developed by Crytek and published by Electronic Arts for Microsoft Windows, PlayStation 3, and Xbox 360. It was released in North America on 19 February 2013.Officially announced 16 April 2012, it is the third main installment of the Crysis series, a sequel to the 2011 video game Crysis 2, and runs on the CryEngine 3 game engine.</div>
<div id="panel" style="display: none;">Crysis 3's gameplay revolves around Prophet, a Nanosuit holder who is on a quest to take revenge to CELL Corporation, an evil corporation, and Alpha Ceph, the leader of the Ceph, which is an alien race. He is accompanied by Psycho, the protagonist of Crysis Warhead. The story of the game serves as the end of the Crysis trilogy. Gameplay revolves around the use of the Nanosuit, which grants players a variety of abilities such as being invisible. New features introduced in Crysis 3 includes a new compound bow and the "hacking" feature, which allows players to hack into enemies' equipment and weapons. New additions to the game includes Rip & Throw, a new Nanosuit ability, and an asymmetrical multiplayer game mode called "The Hunter".</div>
<button id="bun">CONTINUE READING >></button>
</div><br>
<br>

          </div>          
        </div>
      </div>
    </div>

     <!--  About Section  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center animated wow bounceInLeft">
          <div class="pic">
           <div class="imb"><h1>WITCHERS 3</h1><a href="https://www.youtube.com/embed/XHrskkHf958"><img src="img/with.jpg" width="640px"></a></div>
               <form action="home.php" method="post">
<input type="checkbox" name="id" value="2" required="required">
<input type="number" name="rating" min="0" max="5" step="1" required="required">
<input type="submit" alt="Submit" width="100px" height="50px">
</form>
   <?php 
        $id=2;
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie Where id='$id'"); // SQL Query
        while($row = mysql_fetch_array($query))
        { Print $row['percentage']; 
          Print '<span>&#9829</span>';
                  if ($row['percentage']==0) 
          {Print '<div id="rating_0"><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span></div>';}
elseif ($row['percentage']==1) 
  {Print '<div id="rating_1"><span>&#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==2)
  {Print '<div id="rating_2"><span>&#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==3)
  {Print '<div id="rating_3"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==4)
  {Print '<div id="rating_4"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==5)
  {Print '<div id="rating_5"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span> </div>';}
         }
      ?>
      </div>
        </div>
        <div class="col-md-6 animated wow bounceInLeft">
          <div class="features_list">
            <h1 class="text-uppercase">About</h1>
   <div class="story">
   <h1>Review</h1>
  <div id="flip1">
The Witcher 3: Wild Hunt (Polish: Wiedźmin 3: Dziki Gon) is an action role-playing video game set in an open world environment, developed by Polish video game developer CD Projekt RED. Announced in February 2013, it was released for Microsoft Windows, PlayStation 4, and Xbox One on 19 May 2015. The game is the third in the series, preceded by The Witcher and The Witcher 2: Assassins of Kings, which are based on the series of fantasy novels of the same title by the Polish author Andrzej Sapkowski, but all take place after them.
 </div>
<div id="panel1" style="display: none;">
The Witcher 3: Wild Hunt follows directly from the events of The Witcher 2: Assassin of Kings. The game begins with Geralt's dream about Kaer Morhen, a demolished witcher school. Yennefer, a sorceress and his love interest, notifies Geralt of Ciri, a young female witcher in training and their adopted daughter, practicing without his permission. Geralt finds Ciri and brings her back to Vesemir, her teacher. However, the titular Wild Hunt, a phantom army whose appearance is the beginning of the end of the world, kidnaps Ciri. While Geralt wakes up, he realizes that it was just a bad dream and he is still on a journey to find Yennefer with his mentor Vesemir..</div>
<button id="bun1">CONTINUE READING >></button>
</div><br><br>

          </div>          
        </div>
      </div>
    </div>

    <!--  About Section  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center animated wow bounceInLeft">
          <div class="pic">
          <div class="imb"><h1>FIFA-15</h1><a href="https://www.youtube.com/embed/TnTYVT6lwBc" ><img src="img/fif.jpg" width="640px"></a></div>
             <form action="home.php" method="post">
<input type="checkbox" name="id" value="3" required="required">
<input type="number" name="rating" min="0" max="5" step="1" required="required">
<input type="submit" alt="Submit" width="100px" height="50px">
</form>
   <?php 
        $id=3;
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie Where id='$id'"); // SQL Query
        while($row = mysql_fetch_array($query))
        { Print $row['percentage'];  
          Print '<span>&#9829</span>';
              if ($row['percentage']==0) 
          {Print '<div id="rating_0"><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span></div>';}
elseif ($row['percentage']==1) 
  {Print '<div id="rating_1"><span>&#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==2)
  {Print '<div id="rating_2"><span>&#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==3)
  {Print '<div id="rating_3"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==4)
  {Print '<div id="rating_4"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==5)
  {Print '<div id="rating_5"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span> </div>';}
        }
      ?>
          </div>

        </div>
        <div class="col-md-6 animated wow bounceInLeft">
          <div class="features_list">
            <h1 class="text-uppercase">About</h1>
<div class="story">
   <h1>Review</h1>
  <div id="flip2">
FIFA 15 is an association football simulation video game developed by EA Canada and published by Electronic Arts. It was released on 23 September 2014 in North America, 25 September in Europe and 26 September in the United Kingdom and Ireland for the PlayStation 3, PlayStation 4, PlayStation Vita, Nintendo 3DS, Wii, Xbox One, Xbox 360, Microsoft Windows, iOS, Android and Windows Phone.On PC, FIFA 15 runs on EA’s Ignite engine with the same features as the PS4 and Xbox One editions.
 </div>
<div id="panel2" style="display: none;">
The game features Lionel Messi on its cover, alongside a different player in different parts of the world, and is the first game in the FIFA series to be fully licensed by the Premier League. FIFA 15 received positive reviews across all platforms, although the PC version in particular was criticised for the amount of bugs that were featured at release.</div>
<button id="bun2">CONTINUE READING >></button>
</div>

          </div>          
        </div>
      </div>
    </div>
  
  <!--  About Section  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center animated wow bounceInLeft">
          <div class="pic">
            <h1>Uncharted 4: A Thief's End</h1>
            <div class="imb"><a href="https://www.youtube.com/embed/y1Rx-Bbht5E"><img src="img/Un4.jpg"></a></div>
          
          <form action="home.php" method="post">
<input type="checkbox" name="id" value="4" required="required">
<input type="number" name="rating" min="0" max="5" step="1" required="required">
<input type="submit" alt="Submit" width="100px" height="50px">
</form>
   <?php 
        $id=4;
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie Where id='$id'"); // SQL Query
        while($row = mysql_fetch_array($query))
        { Print $row['percentage'];
          Print '<span>&#9829</span>';
                  if ($row['percentage']==0) 
          {Print '<div id="rating_0"><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span></div>';}
elseif ($row['percentage']==1) 
  {Print '<div id="rating_1"><span>&#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==2)
  {Print '<div id="rating_2"><span>&#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==3)
  {Print '<div id="rating_3"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==4)
  {Print '<div id="rating_4"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==5)
  {Print '<div id="rating_5"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span> </div>';}
          }
      ?>
</div>
       </div>
        <div class="col-md-6 animated wow bounceInLeft">
          <div class="features_list">
            <h1 class="text-uppercase">About</h1>
            <div class="story">
  <h1>Review</h1>
<div id="flip3">
Uncharted 4: A Thief's End is an upcoming action-adventure third-person shooter platform video game published by Sony Computer Entertainment and developed by Naughty Dog for the PlayStation 4 video game console. It has also been announced that this will be the last entry in the Uncharted series featuring the character of Nathan Drake. The game is set to release in the first quarter of 2016.</div>
<div id="panel3" style="display: none;">Set three years after the events of Uncharted 3: Drake's Deception, Nathan Drake, now retired as a fortune hunter, has settled into a normal life with his wife Elena Fisher. His world is then turned upside down when his older brother Sam, long believed dead, suddenly appears seeking Drake's help. Together they embark on a globe-trotting journey in pursuit of a conspiracy behind a long lost pirate colony and its fabled pirate treasure. Naughty Dog outlined the game's plot as "his greatest adventure yet and will test his physical limits, his resolve, and ultimately what he's willing to sacrifice to save the ones he loves"</div>
<button id="bun3">CONTINUE READING >></button>
</div><br>
<br>

          </div>          
        </div>
      </div>
    </div>

 <!--  About Section  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center animated wow bounceInLeft">
          <div class="pic">
            <h1>Call of Duty: Black Ops III</h1>
            <div class="imb"><a href="https://www.youtube.com/embed/TOC3iDC2_nA"><img src="img/cal.jpeg"></a></div>
          
          <form action="home.php" method="post">
<input type="checkbox" name="id" value="5" required="required">
<input type="number" name="rating" min="0" max="5" step="1" required="required">
<input type="submit" alt="Submit" width="100px" height="50px">
</form>
   <?php 
        $id=5;
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie Where id='$id'"); // SQL Query
        while($row = mysql_fetch_array($query))
        { Print $row['percentage'];  
          Print '<span>&#9829</span>';
              if ($row['percentage']==0) 
          {Print '<div id="rating_0"><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span></div>';}
elseif ($row['percentage']==1) 
  {Print '<div id="rating_1"><span>&#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==2)
  {Print '<div id="rating_2"><span>&#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==3)
  {Print '<div id="rating_3"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==4)
  {Print '<div id="rating_4"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==5)
  {Print '<div id="rating_5"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span> </div>';}
        }
      ?>
</div>
       </div>
        <div class="col-md-6 animated wow bounceInLeft">
          <div class="features_list">
            <h1 class="text-uppercase">About</h1>
            <div class="story">
  <h1>Review</h1>
<div id="flip4">
Call of Duty: Black Ops III is an upcoming first-person shooter video game, developed by Treyarch and published by Activision.[1] The game is a sequel to the 2012 game Call of Duty: Black Ops II, and will be released on Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, and Xbox One on November 6, 2015. A multiplayer beta will be released on August 19, 2015 for the PlayStation 4 for five days and the Xbox One and Microsoft Windows on August 26, 2015 for five days</div>
<div id="panel4" style="display: none;">Call of Duty: Black Ops III takes place in a dystopian future set in 2065, 40 years after the events of Black Ops II. Air defense systems have advanced to a point where they cancel each other out. As such, most of the warfare between countries is done by covert operatives fighting behind enemy lines. Science and technology have radically changed both the landscape as well as the future of the human race, with society violently protesting and attempting to halt further advancements touted by scientists as "progress". Military technology has progressed to the point where robotics play a main role in combat, and supersoldiers have been developed to fight in the battlefield. Humans have reached the point where they are considered to be more machine than flesh and blood. As a result, there is speculation and fear about an eventual robotic takeover. The game will follow a team of black ops soldiers, like previous installments in the Black Ops series, with supersoldier capabilities</div>
<button id="bun4">CONTINUE READING >></button>
</div><br>
<br>

          </div>          
        </div>
      </div>
    </div>

   <!--  About Section  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center animated wow bounceInLeft">
          <div class="pic">
            <h1>Grand Theft Auto V</h1>
            <div class="imb"><a href="https://www.youtube.com/embed/QkkoHAzjnUs"><img src="img/gta5.jpeg"></a></div>
          
          <form action="home.php" method="post">
<input type="checkbox" name="id" value="6" required="required">
<input type="number" name="rating" min="0" max="5" step="1" required="required">
<input type="submit" alt="Submit" width="100px" height="50px">
</form>
   <?php 
        $id=6;
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie Where id='$id'"); // SQL Query
        while($row = mysql_fetch_array($query))
        { Print $row['percentage'];  
          Print '<span>&#9829</span>';
              if ($row['percentage']==0) 
          {Print '<div id="rating_0"><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span></div>';}
elseif ($row['percentage']==1) 
  {Print '<div id="rating_1"><span>&#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==2)
  {Print '<div id="rating_2"><span>&#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==3)
  {Print '<div id="rating_3"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==4)
  {Print '<div id="rating_4"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==5)
  {Print '<div id="rating_5"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span> </div>';}
        }
      ?>
</div>
       </div>
        <div class="col-md-6 animated wow bounceInLeft">
          <div class="features_list">
            <h1 class="text-uppercase">About</h1>
            <div class="story">
  <h1>Review</h1>
<div id="flip5">
Grand Theft Auto V is an open world, action-adventure video game developed by Rockstar North and published by Rockstar Games. It was released on 17 September 2013 for the PlayStation 3 and Xbox 360, on 18 November 2014 for the PlayStation 4 and Xbox One, and on 14 April 2015 for Microsoft Windows. The game is the first main entry in the Grand Theft Auto series since 2008's Grand Theft Auto IV. Set within the fictional state of San Andreas (based on Southern California), the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency. The open world design lets players freely roam San Andreas, which includes open countryside and the fictional city of Los Santos (based on Los Angeles).</div>
<div id="panel5" style="display: none;">The game is played from either a third-person or first-person view[c] and its world is navigated on foot or by vehicle. Players control the three lead protagonists throughout the single-player mode, switching between them both during and outside of missions. The story is centred on the heist sequences, and many of the missions involve shooting and driving gameplay. Players who commit crimes may incite a response from law enforcement agencies, measured by a "wanted" system that governs the aggression of their response. Grand Theft Auto Online, the online multiplayer mode, lets up to 30 players explore the open world and engage in cooperative or competitive game matches.</div>
<button id="bun5">CONTINUE READING >></button>
</div><br>
<br>

          </div>          
        </div>
      </div>
    </div>

 <!--  About Section  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center animated wow bounceInLeft">
          <div class="pic">
            <h1>Batman: Arkham Knight</h1>
            <div class="imb"><a href="https://www.youtube.com/embed/M8M6Pn4s-9s"><img src="img/batman.jpeg"></a></div>
          
          <form action="home.php" method="post">
<input type="checkbox" name="id" value="7" required="required">
<input type="number" name="rating" min="0" max="5" step="1" required="required">
<input type="submit" alt="Submit" width="100px" height="50px">
</form>
   <?php 
        $id=7;
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie Where id='$id'"); // SQL Query
        while($row = mysql_fetch_array($query))
        { Print $row['percentage']; 
          Print '<span>&#9829</span>';
                  if ($row['percentage']==0) 
          {Print '<div id="rating_0"><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span></div>';}
elseif ($row['percentage']==1) 
  {Print '<div id="rating_1"><span>&#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==2)
  {Print '<div id="rating_2"><span>&#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==3)
  {Print '<div id="rating_3"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==4)
  {Print '<div id="rating_4"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==5)
  {Print '<div id="rating_5"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span> </div>';}
        
         }
      ?>
</div>
       </div>
        <div class="col-md-6 animated wow bounceInLeft">
          <div class="features_list">
            <h1 class="text-uppercase">About</h1>
            <div class="story">
  <h1>Review</h1>
<div id="flip6">
Batman: Arkham Knight is a 2015 action-adventure video game developed by Rocksteady Studios and published by Warner Bros. Interactive Entertainment for the PlayStation 4 and Xbox One video game consoles, and Microsoft Windows. Based on the DC Comics superhero Batman, it is the successor to Warner Bros. Games Montréal's 2013 video game Batman: Arkham Origins, and the fourth main installment in the Batman: Arkham series. Arkham Knight was released worldwide on June 23, 2015.</div>
<div id="panel6" style="display: none;">Written by Sefton Hill, Ian Ball and Martin Lancaster, Arkham Knight is based on the franchise's long-running comic book mythos. Set one year after the events of 2011's Batman: Arkham City, the game's main storyline follows Batman as he confronts Scarecrow, who has launched an attack on Gotham City, causing a city-wide evacuation. Aided by the mysterious Arkham Knight, Scarecrow unites Batman's greatest foes in a plot to finally destroy Batman.</div>
<button id="bun6">CONTINUE READING >></button>
</div><br>
<br>

          </div>          
        </div>
      </div>
    </div>

 <!--  About Section  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center animated wow bounceInLeft">
          <div class="pic">
            <h1>Metal Gear Solid V: The Phantom Pain</h1>
            <div class="imb"><a href="https://www.youtube.com/embed/W-5Wwlgdd2o"><img src="img/me.jpeg"></a></div>
          
          <form action="home.php" method="post">
<input type="checkbox" name="id" value="8" required="required">
<input type="number" name="rating" min="0" max="5" step="1" required="required">
<input type="submit" alt="Submit" width="100px" height="50px">
</form>
   <?php 
        $id=8;
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from movie Where id='$id'"); // SQL Query
        while($row = mysql_fetch_array($query))
        { Print $row['percentage']; 
          Print '<span>&#9829</span>'; 
           if ($row['percentage']==0) 
          {Print '<div id="rating_0"><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span></div>';}
elseif ($row['percentage']==1) 
  {Print '<div id="rating_1"><span>&#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==2)
  {Print '<div id="rating_2"><span>&#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==3)
  {Print '<div id="rating_3"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==4)
  {Print '<div id="rating_4"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9734</span> </div>';}
elseif ($row['percentage']==5)
  {Print '<div id="rating_5"><span>&#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span><span> &#9733</span> </div>';}
          }
      ?>
</div>
       </div>
        <div class="col-md-6 animated wow bounceInLeft">
          <div class="features_list">
            <h1 class="text-uppercase">About</h1>
            <div class="story">
  <h1>Review</h1>
<div id="flip7">
Metal Gear Solid V: The Phantom Pain is an upcoming open world action-adventure stealth video game developed by Kojima Productions and directed, designed, co-produced and co-written by Hideo Kojima, currently in development for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360 and Xbox One.The game serves as a sequel to Metal Gear Solid V: Ground Zeroes, and a continuation of the narrative established there, and will carry over the same tagline of Tactical Espionage Operations first used in Metal Gear Solid: Peace Walker. Set in 1984, the game follows the mercenary leader Punished "Venom" Snake as he ventures into Afghanistan during the Soviet–Afghan War and Africa to exact revenge on the people who destroyed his forces and nearly himself during the climax of Ground Zeroes.</div>
<div id="panel7" style="display: none;">Metal Gear Solid V: The Phantom Pain is a separated composite of two previously announced Kojima Productions projects, both of which formed a cunning ruse. The first was Metal Gear Solid: Ground Zeroes, originally revealed in a Fox Engine tech demo shown at the Metal Gear 25th Anniversary Party on August 30, 2012. The second was The Phantom Pain, a trailer at the Spike TV Video Game Awards on December 7, 2012, presented as an original title by fictional developer Moby Dick Studios, with the Metal Gear Solid V logo virtually obscured. On March 27, 2013, the true nature of these two projects was revealed at the Game Developers Conference, where Kojima announced that Ground Zeroes serves as a prologue to The Phantom Pain. These two, separately released titles combined are Metal Gear Solid V, with The Phantom Pain constituting the bulk of the game</div>
<button id="bun7">CONTINUE READING >></button>
</div><br>
<br>

          </div>          
        </div>
      </div>
    </div>



  </section>

  <!--  End About Section  -->


  <!--  App Features Section  -->


  
  <section class="app_features" id="app_features">
    <div class="container">
      <h1>UPCOMING GAMES</h1>
      <div class="row text-center">
              <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="0s">
          <img src="img/home.jpeg" id="pic" alt="" title="">
          <h1 class="text-uppercase">HomeFront THE REVOLUTION</h1>
        </div>
        
        <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay=".6s">
          <img src="img/star.jpeg" id="pic" alt="" title="">
          <h1 class="text-uppercase">Star Citizen</h1>
        </div>
        </div>

<div class="row text-center">
        <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="1s">
          <img src="img/tom.jpeg" id="pic" height="200px" width="200px"  alt="" title="">
          <h1 class="text-uppercase">Rainbow's SIX Siege</h1>
        </div>
        

        <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="1.2s">
          <img src="img/creed.jpeg" id="pic" height="300px" width="400px" alt="" title="" style="box-shadow:10px 10px #ccc">
          <h1 class="text-uppercase">ASSASSIN's CREED VICTORY</h1>
        </div>
        </div>
<div class="row text-center">
        <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="1.5s">
          <img src="img/hell.jpeg" id="pic" height="300px" width="400px" alt="" title="">
          <h1 class="text-uppercase">HELLBLADE</h1>
        </div>
        
        <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="1.5s">
          <img src="img/mirror.jpeg" id="pic" height="300px" width="400px" alt="" title="">
          <h1 class="text-uppercase">Mirror's EDGE 2</h1>
        </div>
      </div>
<div class="row text-center">
        <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="1.5s">
          <img src="img/silent.jpeg" id="pic" height="300px" width="400px" alt="" title="">
          <h1 class="text-uppercase">SILENT HILLS</h1>
        </div>
        
        <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="1.5s">
          <img src="img/dead.jpeg" id="pic" height="300px" width="400px" alt="" title="">
          <h1 class="text-uppercase">Dead ISLAND 2</h1>
        </div>
      </div>

    </div>
  </section>
  <!--  And App Features Section  -->



  <!--  Email Subscription Section  -->
  <section class="sub_box">
    <div class="cta_text animated wow bounceInLeft">Contact Us!</div>
    <div class="cta_text">The web site has been created by Harshad reddy. It has been developed for WEB APPLICATION DEVELOPMENT PROJECT . You can contact me at <a href="mailto:harshad.rocks07@gmail.com" style="color:black">harshad.rocks07@gmail.com </a>. </div>
  
  
  </section>
  </div></div>


  <!--  Footer Section  -->
  <footer>
    <div id="copy">COPYRIGHTS</i> &copy belong to HARSHAD</div>
  </footer>
  <!--  End Footer Section  -->
</div>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$id = $_POST['id'];
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("project") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("SELECT * from movie WHERE id='$id'"); //Query the users table if there are matching rows equal to $username
	$exists = mysql_num_rows($query); //Checks if username exists
    $v=$_POST['rating'];
    $c="";
    $r="";
    $per="";
if($exists > 0)
{
	while($row = mysql_fetch_assoc($query)) //display all rows from query
		{   $c=$row['voter'];
		    $r=$row['rating'];
			$table_name = $row['name']; // the first username row is passed on to $table_users, and so on until the query is finished
			 // the first password row is passed on to $table_users, and so on until the query is finished
		    $id_c=$row['id'];
		}
		$r=$r+$v;
		$c=$c+1;
    $per=$r/$c;
	//	$_SESSION['user'] = $username; 
	    mysql_query("UPDATE movie SET rating='$r' WHERE id='$id_c'") ;
	    mysql_query("UPDATE movie SET voter='$c' WHERE id='$id_c'") ;
      mysql_query("UPDATE movie SET percentage='$per' WHERE id='$id_c'") ;
	    mysql_query("UPDATE visit SET choice=' $id_c'WHERE username='$user'");
       
       Print '<script>alert("YOUR CHOICE IS LOCKED");</script>'; //Prompts the user
		// header("location:index.php");
		Print '<script>window.location.assign("home.php");</script>';
 

}}?>
 
	</body>
</html>