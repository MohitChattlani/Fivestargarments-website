<?php require(__DIR__."/../includes/helpers.php") ?>
<?php render("header.php",["title"=>"FIVE STAR| GALLERY"])?>
<link rel="stylesheet" type="text/css" href="stylesheet/gallery.css">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="shopimg" src="../images/shop1.1.jpg" alt="shop1">
      <div class="carousel-caption">
        <h3>Five star garments</h3>
        <p>Exterior photos</p>
      </div>
    </div>

    <div class="item">
      <img class="shopimg" src="../images/shop1.2.jpg" alt="shop2">
      <div class="carousel-caption">
        <h3>Five star garments</h3>
        <p>Interior photos</p>
      </div>
    </div>

    <div class="item">
      <img class="shopimg" src="../images/shop1.3.jpg" alt="shop3">
      <div class="carousel-caption">
        <h3>Five star garments</h3>
        <p>View from outside</p>
      </div>
    </div>

    <div class="item">
      <img class="shopimg" src="../images/shop1.4.jpg" alt="shop4">
      <div class="carousel-caption">
        <h3>Five star garments</h3>
        <p>Interior photos</p>
      </div>
    </div>
    <div class="item">
      <img class="shopimg" src="../images/shop1.5.jpg" alt="shop5">
      <div class="carousel-caption">
        <h3>Five star garments</h3>
        <p>Exterior photos</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php render("footer.php") ?>
