<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Mohit Chattlani" />
	<meta property="og:site_name" content="FIVE STAR" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css"/>
	<link rel="shortcut icon" href="images/FSfront2.jpg"/>
	<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<!-- for changing the class to active when clicked-->
  	<script>
   $(function(){
		$(".nav li").on("click",function(){
		  $(".nav li").removeClass("active");
		  $(this).addClass("active");
		});
	});
	</script>
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Raleway|Reem+Kufi" rel="stylesheet" />
	<title><?=htmlspecialchars($title) ?></title>
</head>
<body>
<div class="row" align="center">
		<a href="index.php"><img src="images/newfront.jpg" width="120px" height="120px" /></a>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="pull-left navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Five star garments</a>
     </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
    	<ul class="nav navbar-nav">
      	<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
      	<li><a href="gallery.php"><span class="glyphicon glyphicon-film"></span> GALLERY</a></li>
      	<li><a href="about.php"><span class="glyphicon glyphicon-log-out"></span> ABOUT US</a></li>
      	<li><a href="contact.php"><span class="glyphicon glyphicon-search"></span> FIND US</a></li>
    	</ul>
    </div>	
  </div>
</nav>
<div class="container">