<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Mohit Chattlani" />
  <meta property="og:site_name" content="FIVE STAR" />
  <meta name="description" content="<?=$description?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Raleway|Reem+Kufi" rel="stylesheet" />
  <link rel="shortcut icon" href="/Fivestargarments-website/public/images/FSfront2.jpg"/>
  <link rel="stylesheet" type="text/css" href="/Fivestargarments-website/public/stylesheet/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/Fivestargarments-website/public/stylesheet/style.css">
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
    <a href="/Fivestargarments-website/index.php"><img src="/Fivestargarments-website/public/images/newfront.jpg" width="120px" height="120px" /></a>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/Fivestargarments-website/index.php">Five star garments</a>
     </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="home" class="active"><a href="/Fivestargarments-website/index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
        <li id="gallery"><a href="/Fivestargarments-website/public/gallery.php"><span class="glyphicon glyphicon-film"></span> GALLERY</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >COLLECTION <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Woman</a></li>
            <li class="divider"></li>
            <li id="babygirl"><a href="/Fivestargarments-website/public/babygirl.php">BABY GIRL | 3 months - 4 years</a></li>
            <li id="girl"><a href="/Fivestargarments-website/public/girldresses.php">GIRL | 4 - 17 years</a></li>
         </ul>
        </li>
        <li id="about"><a href="/Fivestargarments-website/public/about.php"><span class="glyphicon glyphicon-log-out"></span> ABOUT US</a></li>
        <li id="contact"><a href="/Fivestargarments-website/public/contact.php"><span class="glyphicon glyphicon-search"></span> FIND US</a></li>
      </ul>
    </div>  
  </div>
</nav>
<div class="container"> 