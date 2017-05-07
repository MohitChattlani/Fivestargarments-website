<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Mohit Chattlani" />
  <meta property="og:site_name" content="FIVE STAR" />
  <meta name="description" content="<?=$description?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Raleway|Reem+Kufi" rel="stylesheet" />
  <link rel="shortcut icon" href="images/FSfront2.jpg"/>
  <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title><?=htmlspecialchars($title) ?></title>
  <script type="text/javascript">
  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
    });
  </script>
</head>
<body>
<div class="row" align="center">
    <a href="index.php"><img src="images/newfront.jpg" width="120px" height="120px" /></a>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Five star garments</a>
     </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="home" class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
        <li id="gallery"><a href="gallery.php"><span class="glyphicon glyphicon-film"></span> GALLERY</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >COLLECTION <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Woman</a></li>
            <li class="divider"></li>
            <li id="babygirl"><a href="babygirl.php">BABY GIRL | 3 months - 4 years</a></li>
            <li id="girl"><a href="girldresses.php">GIRL | 4 - 17 years</a></li>
         </ul>
        </li>
        <li id="about"><a href="about.php"><span class="glyphicon glyphicon-log-out"></span> ABOUT US</a></li>
        <li id="contact"><a href="contact.php"><span class="glyphicon glyphicon-search"></span> FIND US</a></li>
      </ul>
    </div>  
  </div>
</nav>
<div class="container"> 