<?php require(__DIR__."/../includes/helpers.php") ?>
<?php render("header.php",["title"=>"FIVE STAR| ABOUT US","description"=>"Some details about the store."])?>
<script type="text/javascript">
  $(document).ready(function () {
  $(".nav li").removeClass("active");
    $('#about').addClass('active');
});
</script>
<link rel="stylesheet" type="text/css" href="stylesheet/aboutstyl.css">
		<div class="base">
			<div class="page-header">
				<h2>Five star readymade Garments</h2>
			</div>
			<p class="para">A family clothing shop based in New delhi.We deal in formal clothing,casual clothing
		,woolen clothing , baby clothing ,wedding clothing and other clothing accessories.The store is open all seven days with working hours from  10:30AM to 9:30PM <kbd>except Monday.</kbd></p>
		<p class="para">
		The store was started almost <code>25</code> years ago by valid contributions from all the family members starting from eldest to the youngest member . Hardwork and patience has lead us here . The <kbd> motive</kbd> of the store is to provide good quality clothes for all age-groups and that too at affordrable prices.</p>
		<p class="para">
		Our customers mean everything to us and so we thank all our customers for shopping with us ! We hope you will come and visit us again .
		</p>
		</div>
<?php render("footer.php") ?>
