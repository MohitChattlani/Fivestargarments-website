<?php require(__DIR__."/../includes/helpers.php") ?>
<?php render("header.php",["title"=>"FIVE STAR","description"=>"The official website of fivestar readymade garments. To provide good quality clothes for all age-groups at affordable prices."])?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from  
                                     //previously active menu item 
  $('#home').addClass('active');
});
</script>
<link rel="stylesheet" type="text/css" href="stylesheet/home.css"> 
	<div class="container">
		<div class="row" align="center">
			<figure>
				<img class="images" src="images/family2.jpg">
			</figure>
		</div>
	</div>
<?php render("footer.php") ?>